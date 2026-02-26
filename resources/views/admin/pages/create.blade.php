@extends('layouts.admin')

@section('content')
<div class="container card card-primary p-4">
    <h1 class="mb-4">Create Post</h1>

    <form action="{{ route('admin.page.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Hidden Fields -->
        <input type="hidden" name="post_category_id" value="{{ $categoryId }}">
        <input type="hidden" name="category_slug" value="{{ $slug }}">

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            @error('title') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <!-- Gallery Category -->
        @if($slug=="gallery")
        <div class="mb-3">
            <label class="form-label">Gallery Category</label>
            <select name="gallery_category_id" class="form-control">
                <option value="">-- select gallery category --</option>
                @foreach($galleryCategories as $id => $name)
                    <option value="{{ $id }}" {{ old('gallery_category_id') == $id ? 'selected' : '' }}>
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
            <textarea name="body" id="editor" class="form-control">{{ old('body') }}</textarea>
            @error('body') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <!-- Single Image Upload (Existing) -->
        <div class="mb-3">
            <label class="form-label">Featured Image (Single)</label>
            <input type="file" name="image" class="form-control">
            @error('image') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror
        </div>

        <!-- Multiple Images Upload (NEW) -->
        <div class="mb-3">
            <label class="form-label">Upload Multiple Images</label>
            <input type="file" name="multiple_images[]" class="form-control" multiple id="multipleImagesInput">
            <small class="text-muted">You can select multiple images</small>
            @error('multiple_images') 
                <small class="text-danger">{{ $message }}</small> 
            @enderror

            <!-- Preview Section -->
            <div class="row mt-3" id="previewContainer"></div>
        </div>

        <!-- Publish -->
        <div class="form-check mb-3">
            <input type="checkbox" name="published" class="form-check-input" id="published">
            <label class="form-check-label" for="published">Publish</label>
        </div>

        <!-- Buttons -->
        <button class="btn btn-success">Save</button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
</div>

<!-- TinyMCE -->
<script>
tinymce.init({
    selector: '#editor',
    plugins: [
      'anchor','autolink','charmap','codesample','emoticons',
      'link','lists','media','searchreplace','table',
      'visualblocks','wordcount'
    ],
    toolbar: 'undo redo | bold italic underline | link media table | align | bullist numlist | removeformat',
    height: 500,
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


// Multiple Image Preview Script
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