<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Forum') }}</title>

    <!-- CSS Dasar -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header, .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .header a, .footer a {
            color: #fff;
            text-decoration: none;
        }
        .nav {
            margin-bottom: 20px;
        }
        .nav a {
            margin-right: 10px;
            color: #333;
            text-decoration: none;
        }
        .nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Kelompok A2</h1>
    </div>
    
    <div class="nav">
        <a href="{{ route('home') }}">Home</a>
        @auth
            <a href="{{ route('posts.create') }}">Tambah Post</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; padding:0; color:#333; cursor:pointer;">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <a href="https://www.youtube.com/channel/UC5EtGA-VvEtd02SA1bFaC-w">&copy; {{ date('Y') }} Kelompok A2</a>
    </div>
</body>
</html>
