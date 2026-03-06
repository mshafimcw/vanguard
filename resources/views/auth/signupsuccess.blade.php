@extends('layouts.main')

@section('content')
<style>
    .success-wrapper {
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #1A3628 0%, #2F5D44 50%, #8B6B3E 100%);
        text-align: center;
        padding: 20px;
    }

    .success-box {
        background: white;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        max-width: 500px;
    }

    .success-box img {
        width: 180px;
        margin-bottom: 20px;
    }

    .success-box h2 {
        color: #2F5D44;
        font-weight: 700;
    }

    .success-box p {
        color: #555;
        margin-top: 10px;
    }

    .btn-login {
        margin-top: 25px;
        background: #2F5D44;
        color: white;
        padding: 10px 25px;
        border-radius: 8px;
        text-decoration: none;
    }

    .btn-login:hover {
        background: #1A3628;
    }
</style>

<div class="success-wrapper">
    <div class="success-box">
        <h2>Registration Successful</h2>
        <p>You are now authorized to log in.</p>
        <p>Your profile will be visible after administrative approval.</p>
        <a href="{{ route('login') }}" class="btn-login">
            Go to Login
        </a>
    </div>
</div>

@endsection