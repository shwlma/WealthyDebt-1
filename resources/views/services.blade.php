<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Services | Wealthy Debt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        <h1>Choose Your Level-Up Path</h1>
        <h2>SPARC Session</h2>
        <p>60-minute Zoom | $350 | Strategic Power Audit & Roadmap</p>
        <ul>
            <li>Level-Up Snapshot PDF</li>
            <li>Redirect plan, credit/tax moves, insurance suggestions</li>
        </ul>
        <!-- Redirected to a temporary placeholder page -->
        <a href="{{ route('temp', ['context' => 'SPARC Session']) }}">[Book My SPARC Session]</a>
        <h2>VIP Day</h2>
        <p>5-hour deep dive | I-We-You framework | Virtual or On-Site</p>
        <ul>
            <li>Pre-work, strategy session, follow-up</li>
        </ul>
        <!-- Redirected to a temporary placeholder page -->
        <a href="{{ route('temp', ['context' => 'VIP Day']) }}">[Apply for VIP Day]</a>

        <h2>Group Coaching</h2>
        <p>8-week cohort | Weekly live classes + worksheets + community</p>
        <!-- Redirected to a temporary placeholder page -->
        <a href="{{ route('temp', ['context' => 'Waitlist']) }}">[Join the Waitlist]</a>
        
        <h2>Mini-FAQ</h2>
        <ul>
            <li>SPARC not required before Group Coaching</li>
            <li>Couples can attend together if goals are shared</li>
            <li>Collection debt? We'll focus on credit repair first</li>
        </ul>

    </main>
    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>
</body>

</html>