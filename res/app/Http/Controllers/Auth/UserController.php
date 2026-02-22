<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserMultipleimage;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Post;
use App\Models\PostCategory;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('auth.users.index', compact('users'));
    }
    public function directoryListing(Request $request)
    {
        $query = User::query();

        // Filter by location
        if ($request->location) {
            $query->where('location', $request->location);
        }

        if ($request->has('keyword') && $request->keyword) {
            $query->orWhere(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->keyword . '%');
            });
        }

        $users = $query->orderBy('created_at', 'desc')->paginate(6)->withQueryString();
        $latestProfiles = User::orderByDesc('id')->take(6)->get();

        $categories = ['slider', 'about-s', 'features', 'counter', 'whychooseus', 'facilities', 'gallery', 'testimonials', 'faq', 'locations', 'banner'];
        $data = [];

        foreach ($categories as $slug) {
            $category = PostCategory::where('slug', $slug)->first();
            if ($category) {
                $catid = $category->id;
                $posts = Post::where('post_category_id', $catid)->get();
                $data[$slug] = in_array($slug, ['slider', 'about-s', 'whychooseus', 'banner']) ? $posts->first() : $posts;
            }
        }


        $locations = Location::all(); // for filter dropdown

        return view('directorylisting', array_merge($data, [
            'users' => $users,
            'latestProfiles' => $latestProfiles,

            'locations' => $locations,
        ]));
    }
    public function create()
    {
        $locations = Location::all();
        return view('auth.users.create', compact('locations'));
    }
    // Show the password change form
    public function showChangePasswordForm()
    {
        return view('auth.users.change-password');
    }

    // Handle the password change form submission
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        $user = auth()->user();

        if (!\Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match']);
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->route('admin.user.change-password.form')->with('success', 'Password successfully changed.');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'nullable|integer|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle profile image
        $profileImageName = null;
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profile_images'), $filename);
            $profileImageName = 'uploads/profile_images/' . $filename;
        }

        // Handle cover image
        $coverImageName = null;
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/cover_images'), $filename);
            $coverImageName = 'uploads/cover_images/' . $filename;
        }

        // Create the user first
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'profile_image' => $profileImageName,
            'location' => $request->location,
            'description' => $request->description,
            'cover_image' => $coverImageName,
        ]);

        // Handle multiple images upload
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/user_images'), $filename);
                $user->multipleImages()->create([
                    'image' => 'uploads/user_images/' . $filename,
                ]);
            }
        }

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {

        $user->load('multipleImages');
        return view('auth.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $user->load('multipleImages');
        return view('auth.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profile_images'), $filename);
            $user->profile_image = 'uploads/profile_images/' . $filename;
        }

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/cover_images'), $filename);
            $user->cover_image = 'uploads/cover_images/' . $filename;
        }

        $user->location = $request->location;
        $user->description = $request->description;

        $user->update($validated);
        $user->save();

        // Handle new multiple images upload
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/user_images'), $filename);
                $user->multipleImages()->create([
                    'image' => 'uploads/user_images/' . $filename,
                ]);
            }
        }

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }
}
