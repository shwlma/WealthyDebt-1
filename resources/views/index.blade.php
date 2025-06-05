<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index | Wealthy Debt™</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Turn what you owe into what you own with FRED Financial Services & Wealthy Debt™. Empowering financial growth through smart debt strategies.">
    <link rel="stylesheet" href="{{ asset('css/frontpage/tabs.index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.header')
    <main>
        <section id="hero-section" class="hero" aria-labelledby="hero-heading">
            <h1 id="hero-heading">Turn What You Owe Into What You Own™</h1>
            <p class="lead">Debt doesn’t have to drain you. With the right moves, those payments can fund assets that
                grow—and even pay you back.</p>
            <p><strong>Mission:</strong> Empower one million people to turn what they owe into what they own by 2030.
                Grab your free Q&A guide to see exactly how the Wealthy Debt™ process works and whether our services are
                the right fit for you.</p>
            <a href="{{ route('downloads') }}" class="button primary">[Download the Wealthy Debt™ Quick-Start Q&A
                Guide]</a>
            <p class="featured-on"><em>Featured on Legacy Moves Live™ | Master courses launching Summer ’25 | Nationwide
                    virtual coaching</em></p>
        </section>

        <section id="why-us-section" class="why-us" aria-labelledby="why-us-heading">
            <h2 id="why-us-heading">Why Our Clients Win</h2>
            <ul class="checklist">
                <li><strong>Flip Interest, Don’t Fight It</strong> – No extreme budgeting. We redirect money you already
                    spend into wealth-building vehicles.</li>
                <li><strong>Personal Playbook</strong> – Your WealthStack™ strategy is custom-fit to your cash flow and
                    goals—never off-the-shelf advice.</li>
                <li><strong>Legacy Lens</strong> – Every tactic must answer one question: Will this bless my
                    grand-babies? If not, it’s out.</li>
            </ul>
        </section>

        <section id="free-guide-section" class="free-guide" aria-labelledby="free-guide-heading">
            <h2 id="free-guide-heading">What’s Inside the Free Guide</h2>
            <ul class="benefit-list">
                <li>7 must-answer questions that reveal if debt-flipping is right for you</li>
                <li>Real-world examples of turning credit-card interest into cash value</li>
                <li>Exact pricing for SPARC Sessions, VIP Days, and Group Coaching—zero surprises</li>
                <li>A simple checklist to decide if you’re ready to invest in your financial future</li>
            </ul>
            <a href="{{ route('downloads') }}" class="button secondary">[Get My Q&A Guide]</a>
        </section>

        <section id="call-to-action-section" class="call-to-action" aria-labelledby="cta-heading">
            <h2 id="cta-heading" class="sr-only">Ready to Take Action?</h2> {{-- Hidden heading for accessibility --}}
            <p><strong>Ready to Take Action?</strong> If your checklist says “I’m in!”, secure your SPARC Session
                today. A team member will reach out within 24 business hours (Monday – Friday) after you book.</p>
            <a href="{{ route('sparc') }}" class="button call-to-action-button">[Book My SPARC Session]</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Wealthy Debt™. All rights reserved.</p>
    </footer>
</body>

</html>