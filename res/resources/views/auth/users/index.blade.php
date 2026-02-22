@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>User List</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th><th>Name</th><th>Email</th><th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-primary">View</a>
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
@endsection
