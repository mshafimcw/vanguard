@extends('layouts.admin')

@section('content')
<div class="container card card-primary p-4">
    <h1 class="mb-4">Edit Post</h1>

    <form action="{{ route('admin.page.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control">
            @error('title') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <!-- Hidden Fields -->
        <input type="hidden" name="post_category_id" value="{{ $post->post_category_id }}">
        <input type="hidden" name="category_slug" value="{{ $slug }}">
        @error('post_category_id') 
            <small class="text-danger">{{ $message }}</small> 
        @enderror

        <!-- Gallery Category -->
        @if($slug=="gallery")
        <div class="mb-3">
            <label class="form-label">Gallery Category</label>
            <select name="gallery_category_id" class="form-control">
                <option value="">-- select gallery category --</option>
                @foreach($galleryCategories as $id => $name)
                    <option value="{{ $id }}" 
                        {{ old('gallery_category_id', $post->gallery_category_id) == $id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
            @error('gallery_category_id') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>
        @endif

        <!-- Body -->
        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea name="body" id="editor" class="form-control">{{ old('body', $post->body) }}</textarea>
            @error('body') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <!-- Single Image -->
        <div class="mb-3">
            <label class="form-label">Featured Image (Single)</label>

            @if($post->image)
                <div class="mb-2">
                    <img src="{{ asset($post->image) }}" width="120" class="img-thumbnail">
                </div>
            @endif

            <input type="file" name="image" class="form-control">
            @error('image') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <!-- Existing Multiple Images -->
        @if($post->images && $post->images->count() > 0)
        <div class="mb-3">
            <label class="form-label">Existing Multiple Images</label>
            <div class="row">
                @foreach($post->images as $multiImage)
                    <div class="col-md-3 mb-3 text-center">
                        <div class="card">
                            <img src="{{ asset('posts/'.$multiImage->image_name) }}" 
                                 class="card-img-top" 
                                 style="height:150px;object-fit:cover;">
                            <div class="card-body p-2">
                                <div class="form-check">
                                    <input type="checkbox" 
                                           name="delete_images[]" 
                                           value="{{ $multiImage->id }}" 
                                           class="form-check-input">
                                    <label class="form-check-label text-danger">
                                        Delete
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <small class="text-muted">Check images to delete them while updating</small>
        </div>
        @endif

        <!-- Add New Multiple Images -->
        <div class="mb-3">
            <label class="form-label">Add More Images</label>
            <input type="file" name="multiple_images[]" class="form-control" multiple id="multipleImagesInput">
            <small class="text-muted">You can select multiple images</small>

            <!-- Preview -->
            <div class="row mt-3" id="previewContainer"></div>
        </div>

        <!-- Publish -->
        <div class="form-check mb-3">
            <input type="checkbox" 
                   name="published" 
                   class="form-check-input" 
                   id="published" 
                   {{ old('published', $post->published) ? 'checked' : '' }}>
            <label class="form-check-label" for="published">Publish</label>
        </div>

        <!-- Buttons -->
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<!-- TinyMCE -->
<script>
tinymce.init({
    selector: '#editor',
    plugins: [
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 
      'link', 'lists', 'media', 'searchreplace', 'table', 
      'visualblocks', 'wordcount'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table | align | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    height: 500,
    menubar: 'file edit view insert format tools table help',
    images_upload_url: '{{ route("admin.upload.image") }}',
    automatic_uploads: true,
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route("admin.upload.image") }}');

        xhr.onload = function() {
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            var json = JSON.parse(xhr.responseText);
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON');
                return;
            }
            success(json.location);
        };

        var formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        formData.append('_token', '{{ csrf_token() }}');
        xhr.send(formData);
    }
});


// Multiple Image Preview
document.getElementById('multipleImagesInput').addEventListener('change', function(event) {
    const previewContainer = document.getElementById('previewContainer');
    previewContainer.innerHTML = '';

    Array.from(event.target.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const col = document.createElement('div');
            col.classList.add('col-md-3', 'mb-3');

            col.innerHTML = `
                <div class="card">
                    <img src="${e.target.result}" class="card-img-top" style="height:150px;object-fit:cover;">
                </div>
            `;
            previewContainer.appendChild(col);
        };
        reader.readAsDataURL(file);
    });
});
</script>
@endsection