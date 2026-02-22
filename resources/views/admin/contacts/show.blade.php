{{-- resources/views/admin/contacts/show.blade.php --}}

@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Contact Submission</h1>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Name:</strong> {{ $contact->name }}</p>
                    <p><strong>Email:</strong> {{ $contact->email }}</p>
                    <p><strong>Phone:</strong> {{ $contact->phone ?? 'Not provided' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Submitted:</strong> {{ $contact->created_at->format('F j, Y \a\t g:i A') }}</p>
                    <p><strong>Status:</strong> 
                        @if($contact->is_read)
                            <span class="badge badge-success">Read</span>
                        @else
                            <span class="badge badge-warning">Unread</span>
                        @endif
                    </p>
                </div>
            </div>
            
            <hr>
            
            <p><strong>Subject:</strong> {{ $contact->subject }}</p>
            <p><strong>Message:</strong></p>
            <div class="border p-3 bg-light">
                {{ $contact->message }}
				-------
				{{ $contact->is_read}}
            </div>
            
            <div class="mt-4">
                @if($contact->is_read)
                    <form action="{{ route('admin.contacts.mark-unread', $contact) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-warning">Mark as Unread</button>
                    </form>
                @else
                    <form action="{{ route('admin.contacts.mark-read', $contact) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">Mark as Read</button>
                    </form>
                @endif
                
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
                <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" class="btn btn-primary">Reply</a>
            </div>
        </div>
    </div>
</div>
@endsection