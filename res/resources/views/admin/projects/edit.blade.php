@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Edit Project</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required maxlength="250">
        </div>

        <div class="form-group mb-3">
            <label>Created Date:</label>
            <input type="datetime-local" name="created_date" class="form-control"
                value="{{ old('created_date', $project->created_date ? \Carbon\Carbon::parse($project->created_date)->format('Y-m-d\TH:i') : '') }}">
        </div>

        <div class="form-group mb-3">
            <label>Start Date:</label>
            <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $project->start_date) }}">
        </div>

        <div class="form-group mb-3">
            <label>End Date:</label>
            <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $project->end_date) }}">
        </div>

        <div class="form-group mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" maxlength="2500">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Current Image:</label>
            @if($project->image)
            <div><img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" width="120"></div>
            @endif
            <input type="file" accept="image/*" name="image" class="form-control mt-1">
        </div>

        <div class="form-group mb-3">
            <label>Video ID:</label>
            <input type="text" name="video_id" class="form-control" value="{{ old('video_id', $project->video_id) }}" maxlength="75">
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection