<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Wealthy Debt</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('services') }}">Services</a> |
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        <section class="contact-form-section">
            <h2 class="login-title">Welcome Back</h2>
            <form action="{{ route('enter') }}" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="login-btn">Sign In</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

    <script>
        @if ($errors->any())
            let errorMessage = '';
            @foreach ($errors->all() as $error)
                errorMessage += '{{ $error }}\n';
            @endforeach
            alert(errorMessage.trim());
        @endif
    </script>
</body>

</html>