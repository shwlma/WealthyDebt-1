<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Services | Wealthy Debt</title>
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
        <h1 class="page-title">Choose Your Level-Up Path</h1>

        <section class="service-offering">
            <h2>SPARC Session</h2>
            <p class="service-details">60-minute Zoom | $350 | Strategic Power Audit & Roadmap</p>
            <ul class="service-benefits">
                <li>Level-Up Snapshot PDF</li>
                <li>Redirect plan, credit/tax moves, insurance suggestions</li>
            </ul>
            <a href="{{ route('sparc') }}" class="button primary">[Book My SPARC Session]</a>
        </section>

        <section class="service-offering">
            <h2>VIP Day</h2>
            <p class="service-details">5-hour deep dive | I-We-You framework | Virtual or On-Site</p>
            <ul class="service-benefits">
                <li>Pre-work, strategy session, follow-up</li>
            </ul>
            <a href="{{ route('temp', ['context' => 'VIP Day']) }}" class="button secondary">[Apply for VIP Day]</a>
        </section>

        <section class="service-offering">
            <h2>Group Coaching</h2>
            <p class="service-details">8-week cohort | Weekly live classes + worksheets + community</p>
            <a href="{{ route('temp', ['context' => 'Waitlist']) }}" class="button secondary">[Join the Waitlist]</a>
        </section>

        <section class="mini-faq">
            <h2>Mini-FAQ</h2>
            <ul class="faq-list">
                <li>SPARC not required before Group Coaching</li>
                <li>Couples can attend together if goals are shared</li>
                <li>Collection debt? We'll focus on credit repair first</li>
            </ul>
        </section>

    </main>
    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>
</body>

</html>