@extends('layouts.admin')

@section('content')
<div class="container card card-primary ">
    <h1>Edit Post</h1>
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Post Category</label>
            <select name="post_category_id" class="form-control">
                @foreach($categories as $id => $name)
                <option value="{{ $id }}" {{ old('post_category_id', $post->post_category_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
            @error('post_category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Add Gallery Category Field -->
        <div class="mb-3">
            <label>Gallery Category</label>
            <select name="gallery_category_id" class="form-control">
                <option value="">Select Gallery Category</option>
                @foreach($gallerycategories as $id => $name)
                <option value="{{ $id }}" {{ old('gallery_category_id', $post->gallery_category_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
            @error('gallery_category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control">{{ old('body', $post->body) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            @if($post->image)
            <div class="mb-2">
                <img src="{{ asset('storage/'.$post->image) }}" width="100">
            </div>
            @endif
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="published" class="form-check-input" id="published" {{ old('published', $post->published) ? 'checked' : '' }}>
            <label class="form-check-label" for="published">Publish</label>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="featured" value="1" class="form-check-input" id="featured"
                {{ old('featured', isset($post) ? $post->featured : false) ? 'checked' : '' }}>
            <label class="form-check-label" for="featured">Featured</label>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection