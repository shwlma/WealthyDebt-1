<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index | Wealthy Debt</title>
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
        <section class="hero">
            <h1>Turn What You Owe Into What You Own™</h1>
            <p class="lead">Debt doesn’t have to drain you. With the right moves, those payments can fund assets that grow—and even pay you back.</p>
            <p><strong>Mission:</strong> Empower one million people to turn what they owe into what they own by 2030. Grab your free Q&A guide to see exactly how the Wealthy Debt™ process works and whether our services are the right fit for you.</p>
            <a href="{{ route('downloads') }}" class="button primary">[Download the Wealthy Debt™ Quick-Start Q&A Guide]</a>
            <p class="featured-on"><em>Featured on Legacy Moves Live™ | Master courses launching Summer ’25 | Nationwide virtual coaching</em></p>
        </section>

        <section class="why-us">
            <h2>Why Our Clients Win</h2>
            <ul class="checklist">
                <li><strong>Flip Interest, Don’t Fight It</strong> – No extreme budgeting. We redirect money you already spend into wealth-building vehicles.</li>
                <li><strong>Personal Playbook</strong> – Your WealthStack™ strategy is custom-fit to your cash flow and goals—never off-the-shelf advice.</li>
                <li><strong>Legacy Lens</strong> – Every tactic must answer one question: Will this bless my grand-babies? If not, it’s out.</li>
            </ul>
        </section>

        <section class="free-guide">
            <h2>What’s Inside the Free Guide</h2>
            <ul class="benefit-list">
                <li>7 must-answer questions that reveal if debt-flipping is right for you</li>
                <li>Real-world examples of turning credit-card interest into cash value</li>
                <li>Exact pricing for SPARC Sessions, VIP Days, and Group Coaching—zero surprises</li>
                <li>A simple checklist to decide if you’re ready to invest in your financial future</li>
            </ul>
            <a href="{{ route('downloads') }}" class="button secondary">[Get My Q&A Guide]</a>
        </section>

        <section class="call-to-action">
            <p><strong>Ready to Take Action?</strong><br>
                If your checklist says “I’m in!”, secure a SPARC Session today. After you book, a team member will reach out within 24 business hours (Monday – Friday).
            </p>
            <a href="{{ route('sparc') }}" class="button call-to-action-button">[Book My SPARC Session]</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>
</body>
</html>