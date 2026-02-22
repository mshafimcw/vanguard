@extends('layouts.main')


@section('content')
<div class="container mt-5 mb-5">
    <h2>Edit Profile</h2>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf

        <!-- Full Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
            @error('name')
            <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" id="location" name="location"
                value="{{ old('location', $user->location ?? '') }}"
                class="form-control" required>
            @error('location')
            <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>


        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Profile Description</label>
            <textarea id="description" name="description" rows="4" class="form-control" placeholder="Tell us something about yourself...">{{ old('description', $user->description) }}</textarea>
            @error('description')
            <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>


        <!-- Profile Image -->
        <div class="mb-3">
            <label for="profile_image" class="form-label">Profile Image</label>
            <input type="file" id="profile_image" name="profile_image" class="form-control">
            @if($user->profile_image)
            <div class="mt-2">
                <img src="{{ asset($user->profile_image) }}" alt="Profile Image" class="rounded-circle" width="100" height="100" style="object-fit: cover;">
            </div>
            @endif
            @error('profile_image')
            <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Cover Image -->
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input type="file" id="cover_image" name="cover_image" class="form-control">
            @if($user->cover_image)
            <div class="mt-2">
                <img src="{{ asset($user->cover_image) }}" alt="Cover Image" class="img-fluid rounded" style="max-height: 200px; object-fit: cover;">
            </div>
            @endif
            @error('cover_image')
            <span class="invalid-feedback d-block">{{ $message }}</span>
            @enderror
        </div>




        <!-- Save Buttons -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('profile') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection