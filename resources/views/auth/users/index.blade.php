@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>User List</h1>
    <form method="GET" action="{{ route('admin.users.index') }}" class="row mb-3 align-items-center">

    <div class="col-md-4">
        <input type="text"
            name="keyword"
            class="form-control"
            placeholder="Search by name"
            value="{{ request('keyword') }}">
    </div>

    <div class="col-md-4">
        <div class="dropdown w-100" data-bs-auto-close="outside">
            <button class="btn btn-outline-secondary dropdown-toggle w-100 text-start"
                type="button"
                data-bs-toggle="dropdown"
                id="locationDropdown">
                {{ request('location_name') ?? 'Search Location' }}
            </button>

            <div class="dropdown-menu w-100 p-2" onclick="event.stopPropagation();">

                <input type="text"
                    class="form-control mb-2"
                    placeholder="Search..."
                    id="locationSearch"
                    onkeyup="filterLocation()">

                @foreach($locations as $location)
                <a href="#"
                    class="dropdown-item location-item"
                    data-id="{{ $location->id }}"
                    onclick="selectLocation(this); return false;">
                    {{ $location->name }}
                </a>
                @endforeach

            </div>
        </div>
    </div>

    <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Go</button>
    </div>

    <div class="col-md-2">
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary w-100">Reset</a>
    </div>
    <input type="hidden" name="location" id="locationInput" value="{{ request('location') }}">
</form>
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Cover Image</th>
                <th>Multiple Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    @if($user->profile_image)
                    <img src="{{ asset($user->profile_image) }}" alt="Profile" class="rounded-circle" width="50" height="50">
                    @else
                    <span class="text-muted">No image</span>
                    @endif
                </td>

                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {{ $user->location->name ?? 'N/A' }}
                </td>
                <td>
                    @if($user->cover_image)
                    <img src="{{ asset($user->cover_image) }}" alt="Cover" class="img-thumbnail" width="50" height="35">
                    @else
                    <span class="text-muted">No image</span>
                    @endif
                </td>

                <td>
                    @if($user->multipleImages->count())
                    <img src="{{ asset($user->multipleImages->first()->image) }}" alt="Gallery" class="img-thumbnail" width="50">
                    @else
                    <span class="text-muted">No Multiple images</span>
                    @endif
                </td>



                <td>


                    @if($user->is_approved)

                    Approved
                    @else
                    Not approved
                    @endif

                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Actions
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-primary">View</a>

                            </li>
                            <li>
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            @if($user->is_approved)
                            <li>
                                <form action="{{ route('admin.users.unapprove', $user->id) }}" method="POST" class="d-inline">
                                    @csrf

                                    <button type="submit" class="dropdown-item text-danger"
                                        onclick="return confirm('Unapprove this user?')">
                                        <i class="bi bi-x-circle me-2"></i> Unapprove
                                    </button>
                                </form>
                            </li>
                            @else
                            <li>
                                <form action="{{ route('admin.users.approve', $user->id) }}" method="POST" class="d-inline">
                                    @csrf

                                    <button type="submit" class="dropdown-item text-success"
                                        onclick="return confirm('Approve this user?')">
                                        <i class="bi bi-check-circle me-2"></i> Approve
                                    </button>
                                </form>
                            </li>
                            @endif

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger"
                                        onclick="return confirm('Delete this user permanently?')">
                                        <i class="bi bi-trash me-2"></i> Delete
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
@endsection