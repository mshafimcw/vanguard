@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Projects List</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Add New Project</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created Date</th>
                <th>Description</th>
                <th>Image</th>
                <th>Video ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->created_date }}</td>
                <td>{{ Str::limit($project->description, 50) }}</td>
                <td>
                    @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" width="60" alt="Image">
                    @endif
                </td>
                <td>{{ $project->video_id }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links() }}
</div>
@endsection