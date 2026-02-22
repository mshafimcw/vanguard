@extends('layouts.admin')

@section('content')
<div class="container  card card-primary ">
    <h1>Edit Post</h1>
    <form action="{{ route('admin.page.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <input type="hidden" name="post_category_id" value="{{ $post->post_category_id  }}" >
             <input type="hidden" name="category_slug" value="{{ $slug }}" >
            @error('post_category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control">{{ old('body', $post->body) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            @if($post->image)
                <div class="mb-2">
                    <img src="{{ asset($post->image) }}" width="100">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="published" class="form-check-input" id="published" {{ old('published', $post->published) ? 'checked' : '' }}>
            <label class="form-check-label" for="published">Publish</label>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
