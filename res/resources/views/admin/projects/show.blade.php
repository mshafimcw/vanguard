@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>View Project</h1>
    <div>
        <strong>Title:</strong> {{ $project->title }}<br>
        <strong>Created Date:</strong> {{ $project->created_date }}<br>
        <strong>Description:</strong> {!! nl2br(e($project->description)) !!}<br>
        @if($project->image)
        <strong>Image:</strong><br>
        <img src="{{ asset('storage/' . $project->image) }}" width="200" alt="Project Image"><br>
        @endif
        <strong>Video ID:</strong> {{ $project->video_id }}<br>
        <strong>Start Date:</strong> {{ $project->start_date }}<br>
        <strong>End Date:</strong> {{ $project->end_date }}<br>
    </div>

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection