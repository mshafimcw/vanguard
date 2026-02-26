@extends('layouts.admin')

@section('content')
    <div class="container">

        <h1>Service Details</h1>



        <div class="card">

            <div class="card-body text-center">


                <p>

                    <strong>ID :</strong>

                    {{ $service->id }}

                </p>



                @if ($service->image)
                    <img src="{{ asset('uploads/services/'.$service->image) }}" width="200">
                @endif



                <h3>

                    {{ $service->title }}

                </h3>



                <p>

                    {{ $service->description }}

                </p>



            </div>

        </div>



        <br>


        <a href="{{ route('admin.services.index') }}" class="btn btn-primary">

            Back

        </a>


    </div>
@endsection
