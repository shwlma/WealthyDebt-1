<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/userpage/user.tabs.css') }}">
</head>
<header>
    <div>
        <nav>
            <a href="#" class="logout-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
</header>
<main>
    <body>
        @yield('content')
    </body>
</main>

<footer>
    <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
</footer>

</html>