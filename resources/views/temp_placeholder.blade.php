<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index | Wealthy Debt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tabs.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('services') }}">Services</a> |
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route(name: 'login') }}">Login</a>
        </nav>
    </header>
    <main>
        <h1 style="text-align: center;">{{ $context }}</h1>
    </main>
        <footer>
            <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
        </footer>
</body>
</html>