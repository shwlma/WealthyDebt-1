<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | Wealthy Debt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/frontpage/tabs.about.css') }}">
</head>

<body>
    @include('layouts.header')
    <main>
        <h1 class="page-title">FRED Financial Services & the Wealthy Debt™ Program</h1>

        <section class="about-section introduction">
            <p>We’re on a mission to flip the nation’s balance sheet—one household at a time—by turning liabilities into
                lasting legacies. What began as a single coaching framework has grown into a full-service
                financial-education company poised to serve clients in every U.S. time-zone.</p>
            <a href="{{ route('downloads') }}" class="button primary">[Download the Wealthy Debt™ Quick-Start Q&A
                Guide]</a>
        </section>

        <section class="about-section mtp">
            <h2>Our Massive Transformative Purpose (MTP)</h2>
            <p>“Empower one million people to turn what they owe into what they own by 2030.”</p>
        </section>

        <section class="about-section impact">
            <h2>How We Deliver Impact</h2>
            <ul class="benefit-list">
                <li><strong>Education at Scale</strong> 24/7 access through master courses, shows, and guides</li>
                <li><strong>Personalized Strategy</strong> Choose SPARC, VIP Day, or Group Coaching</li>
                <li><strong>Asset-First Mindset</strong> Redirect payments into appreciating assets</li>
                <li><strong>Community & Accountability</strong> Client portals, check-ins, partner network</li>
            </ul>
        </section>

        <section class="about-section roadmap">
            <h2>Growth Roadmap (2025 → 2027)</h2>
            <ul class="roadmap-list">
                <li>Nationwide Virtual Reach (2025)</li>
                <li>Certified Advisor Network (2026)</li>
                <li>Wealthy Debt™ Grant Program (2027)</li>
                <li>AI-Powered WealthStack™ App (Beta 2027)</li>
            </ul>
        </section>

        <section class="about-section core-values">
            <h2>Core Values</h2>
            <ul class="values-list">
                <li>Integrity Over Hype</li>
                <li>Teach to Empower</li>
                <li>Legacy Lens</li>
                <li>Relentless Iteration</li>
            </ul>
        </section>

        <section class="about-section why-choose-us">
            <h2>Why Clients Choose Us</h2>
            <ul class="reason-list">
                <li>Straight Talk, Zero Judgment</li>
                <li>Action Before Afternoon</li>
                <li>Results That Compound</li>
            </ul>
        </section>

        <section class="call-to-action">
            <a href="{{ route('downloads')}}" class="button secondary">[Download the Wealthy Debt™ Quick-Start Q&A
                Guide]</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>
</body>

</html>