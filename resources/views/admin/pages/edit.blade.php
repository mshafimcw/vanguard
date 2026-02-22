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
		
         @if($slug=="gallery")
        <div class="mb-3">
            <label>Gallery Category</label>
            <select name="gallery_category_id" class="form-control">
                <option value="">-- select gallery category --</option>
                @foreach($galleryCategories as $id => $name)
                <option value="{{ $id }}" {{ old('gallery_category_id', $post->gallery_category_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
            @error('gallery_category_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        @endif
		
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" id="editor" class="form-control">{{ old('body', $post->body) }}</textarea>
            @error('body') <small class="text-danger">{{ $message }}</small> @enderror
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

<!-- TinyMCE CDN with your API key -->
<script src="https://cdn.tiny.cloud/1/jlcp1yma120hl71botabkzvij0018e797yseb7huh85fxyzw/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
<script>
tinymce.init({
    selector: '#editor',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Nov 29, 2025:
     
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    uploadcare_public_key: '0a8a8007a21007c988c5',
    height: 500,
    menubar: 'file edit view insert format tools table help',
    images_upload_url: '{{ route("admin.upload.image") }}',
    automatic_uploads: true,
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '{{ route("admin.upload.image") }}');
        
        xhr.onload = function() {
            var json;
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            json = JSON.parse(xhr.responseText);
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        formData.append('_token', '{{ csrf_token() }}');
        
        xhr.send(formData);
    }
});
</script>
@endsection