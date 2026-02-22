<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = PostCategory::pluck('name', 'id');
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'body'              => 'nullable|string',
            'post_category_id'  => 'required|exists:post_categories,id',
            'image'             => 'nullable|image|max:2048',
            'published'         => 'sometimes',
            'featured'          => 'nullable|boolean',
			'gallery_category_id'  => 'gallery_category_id',
        ]);

        // slug
        $slug = Str::slug($validated['title']);
        $original = $slug;
        $count = 2;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $original . '-' . $count++;
        }
        $validated['slug'] = $slug;

        // image upload
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('posts'), $filename);
            $validated['image'] = 'posts/' . $filename;
        }

        $validated['published'] = $request->has('published');
        $validated['featured'] = $request->boolean('featured');

        $validated['user_id']   = auth()->id();

        Post::create($validated);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post created successfully.');
    }

   public function edit(Post $post)
{ 
    $categories = PostCategory::pluck('name', 'id');
    $gallerycategories = GalleryCategory::pluck('name', 'id'); // Add this line
    
    return view('admin.posts.edit', compact('post', 'categories', 'gallerycategories'));
}
  public function update(Request $request, Post $post)
{
    \Log::info('=== UPDATE METHOD START ===');
    \Log::info('Request data:', $request->all());
    
    $validated = $request->validate([
        'title'             => 'required|string|max:255',
        'body'              => 'nullable|string',
        'post_category_id'  => 'required|exists:post_categories,id',
        'gallery_category_id' => 'nullable|exists:gallery_categories,id',
        'image'             => 'nullable|image|max:2048',
        'published'         => 'sometimes',
        'featured'          => 'nullable|boolean',
    ]);

    \Log::info('Validated data:', $validated);
    \Log::info('Gallery category ID from request: ' . $request->gallery_category_id);
    \Log::info('Gallery category ID from validated: ' . ($validated['gallery_category_id'] ?? 'NULL'));

    // Generate new slug if title changes
    if ($post->title !== $validated['title']) {
        $slug = Str::slug($validated['title']);
        $original = $slug;
        $count = 2;
        while (Post::where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
            $slug = $original . '-' . $count++;
        }
        $validated['slug'] = $slug;
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
        $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('posts'), $filename);
        $validated['image'] = 'posts/' . $filename;
    }

    // Handle checkbox values
    $validated['published'] = $request->has('published');
    $validated['featured'] = $request->boolean('featured');
    
    // Handle gallery_category_id - set to null if empty
    $validated['gallery_category_id'] = $request->filled('gallery_category_id') ? $request->gallery_category_id : null;

    \Log::info('Final data to update:', $validated);

    $post->update($validated);

    \Log::info('Post after update - gallery_category_id: ' . $post->fresh()->gallery_category_id);
    \Log::info('=== UPDATE METHOD END ===');

    return redirect()->route('admin.posts.index')
        ->with('success', 'Post updated successfully.');
}

    public function destroy(Post $post)
    {
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted.');
    }
}
