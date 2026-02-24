<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Models\GalleryCategory;

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
       $posts = Post::join('post_categories', 'posts.post_category_id', '=', 'post_categories.id')
    ->where('post_categories.slug', $slug)
    ->with('category')   // eager-load for later use
    ->select('posts.*')  // avoid column collisions
    ->latest()
    ->paginate(10);
       return view('admin.pages.index', compact('posts','slug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
         $category = PostCategory::where('slug', $slug)->first();
         $categoryId = $category?->id;   // null-safe
          $categories = PostCategory::pluck('name', 'id');
		   $galleryCategories = GalleryCategory::active()->pluck('name', 'id');
        return view('admin.pages.create', compact('categories','categoryId','slug','galleryCategories'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		//dd($request->all());

      
                 
                    $validated = $request->validate([
                        'title'            => 'required|string|max:255',
                        'body'             => 'nullable|string',
                        'post_category_id' => 'required|exists:post_categories,id',
                        'image'            => 'nullable|image|max:10240',
                        'published' => 'sometimes', 
						 'gallery_category_id' => 'nullable|exists:gallery_categories,id',
                    ]);
//dd('Validated OK', $validated);die;

                    // slug
                    $slug = Str::slug($validated['title']);
                    $original = $slug; $count = 2;
                    while (Post::where('slug', $slug)->exists()) {
                        $slug = $original . '-' . $count++;
                    }
                    $validated['slug'] = $slug;

                    // image upload
                    if ($request->hasFile('image')) {
                       $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();

                        // Move the file directly into  <project>/public/posts
                        $request->file('image')->move(public_path('posts'), $filename);

                        // store the relative path (so asset() works)
                        $validated['image'] = 'posts/' . $filename;
                    }

                    $validated['published'] = $request->has('published');
                    $validated['user_id']   = auth()->id();
                  
                    $post=Post::create($validated);
                    $category_slug=$request->category_slug;
                    return redirect() ->route('admin.page.show', $post->id) 
                                    ->with('success', 'Post created successfully.');
                         
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       
         $post = Post::where('id', $id)->first();
         $category = PostCategory::where('id', $post->post_category_id)->first();
          $slug= $category->slug;
        return view('admin.pages.show', compact('post','slug'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $categories = PostCategory::pluck('name', 'id');
           $post = Post::where('id', $id)->first();
          $category = PostCategory::where('id', $post->post_category_id)->first();
          $slug= $category->slug;
		   $galleryCategories = GalleryCategory::active()->pluck('name', 'id');
        
        return view('admin.pages.edit', compact('post', 'categories','slug','galleryCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $post = Post::where('id', $id)->first();
       // try {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'body'             => 'nullable|string',
            'post_category_id' => 'required|exists:post_categories,id',
            'image'            => 'nullable|image|max:10240',
            'published'        => 'sometimes',
			 'gallery_category_id' => 'nullable|exists:gallery_categories,id',
        ]);

        // new slug if title changes
        if ($post->title !== $validated['title']) {
            $slug = Str::slug($validated['title']);
            $original = $slug; $count = 2;
            while (Post::where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
                $slug = $original . '-' . $count++;
            }
            $validated['slug'] = $slug;
        }

        // image replace
        if ($request->hasFile('image')) {
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }
            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();

                        // Move the file directly into  <project>/public/posts
                        $request->file('image')->move(public_path('posts'), $filename);

                        // store the relative path (so asset() works)
                        $validated['image'] = 'posts/' . $filename;
        }

        $validated['published'] = $request->has('published');

        $post->update($validated);

    //    } catch (\Throwable $e) {
    // write to storage/logs/laravel.log
//    dd([
//         'message' => $e->getMessage(),
//         'file'    => $e->getFile(),
//         'line'    => $e->getLine(),
//         'trace'   => $e->getTraceAsString(),
//     ]);
// }


       return redirect() ->route('admin.page.show', $post->id) 
                                    ->with('success', 'Post updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
		 $post = Post::where('id', $id)->first();
		 
		  $caletgiryid = $post->post_category_id; // Get slug from the post
		    $PostCategory = PostCategory::where('id', $caletgiryid)->first();
			$slug=$PostCategory->slug;
         if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete(); 
        
          return redirect()->route('admin.page.index', $slug)->with('success', 'Post deleted successfully.');
                                   
    }
}
