<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/adminpage/admin.tabs.css') }}">
</head>
<header>
    <div>
        <nav>
            <div class="nav-center-group">
                <a href="{{ route('admin.dashboard') }}">CRM</a> |
                <a href="{{ route('admin.consult') }}">Consultation</a> |
                <a href="{{ route('admin.groupvip') }}">Group VIP</a> |
                <a href="{{ route('admin.sparc') }}">SPARC</a> |
                <a href="{{ route('admin.speaking') }}">Speaking</a> |
                <a href="{{ route('admin.vip') }}">VIP</a>
            </div>

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