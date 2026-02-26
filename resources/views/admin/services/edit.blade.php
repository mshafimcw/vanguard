@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1>Edit Service</h1>


        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')


            <div class="form-group">

                <label>Title</label>

                <input type="text" name="title" value="{{ old('title', $service->title) }}" class="form-control" required>

            </div>



            <div class="form-group mt-3">

                <label>Description</label>

                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $service->description) }}</textarea>

            </div>



            <div class="form-group mt-3">

                <label>Current Image</label>

                <br>

                @if ($service->image)
                    <img src="{{ asset('services/' . $service->image) }}" width="120" style="border-radius:8px">
                @else
                    <p>No image uploaded</p>
                @endif

            </div>



            <div class="form-group mt-3">

                <label>Change Image</label>

                <input type="file" name="image" class="form-control">

            </div>



            <br>


            <button class="btn btn-success">

                Update

            </button>


            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">

                Cancel

            </a>


        </form>


    </div>
@endsection
