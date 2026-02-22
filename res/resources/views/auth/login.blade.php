<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login | ENVED</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      height: 100%;
      overflow: hidden;
      /* Remove scrolling */
      font-family: "Poppins", sans-serif;
    }


    .login-container {
      max-width: 420px;
      margin: 100px auto;
      padding: 40px 35px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      backdrop-filter: blur(6px);
    }

    .login-title {
      text-align: center;
      font-weight: 700;
      color: #0a8a33;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    .form-label {
      font-weight: 600;
      color: #333;
    }

    .form-control {
      border-radius: 10px;
      border: 1px solid #d3d3d3;
      padding: 10px 14px;
    }

    .btn-primary {
      background-color: #0a8a33;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      padding: 10px 0;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #3fae49;
      box-shadow: 0 4px 12px rgba(15, 115, 30, 0.3);
    }

    .text-center a {
      color: #0a8a33;
      text-decoration: none;
      font-weight: 500;
    }

    .text-center a:hover {
      text-decoration: underline;
    }

    .alert {
      border-radius: 8px;
    }

    /* Optional subtle ENVED logo styling */
    .env-logo {
      display: block;
      margin: 0 auto 20px;
      width: 120px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login-container">
      <img src="{{ asset('images/logo.png') }}" alt="ENVED Logo" class="env-logo">

      <h2 class="login-title">Member Login</h2>

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" id="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary">Log In</button>
        </div>

        <div class="text-center">
          Don't have an account? <a href="{{ route('signup') }}">Sign up</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>