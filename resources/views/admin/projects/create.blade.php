@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Create Project</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required maxlength="250">
        </div>

        <div class="form-group mb-3">
            <label>Created Date:</label>
            <input type="datetime-local" name="created_date" class="form-control" value="{{ old('created_date') }}">
        </div>

        <div class="form-group mb-3">
            <label>Start Date:</label>
            <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
        </div>

        <div class="form-group mb-3">
            <label>End Date:</label>
            <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}">
        </div>

        <div class="form-group mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" maxlength="2500">{{ old('description') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Image:</label>
            <input type="file" accept="image/*" name="image" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Video ID:</label>
            <input type="text" name="video_id" class="form-control" value="{{ old('video_id') }}" maxlength="75">
        </div>

        <button type="submit" class="btn btn-success">Save Project</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection