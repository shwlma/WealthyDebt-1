<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPARC Session™ — Strike the Match. Clarify the Move.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontpage/tabs.sparc.css') }}">
</head>

<body>
    <header class="hero"> <!-- This section is now white -->
        <nav class="main-nav">
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a> |
                <a href="{{ route('about') }}">About</a> |
                <a href="{{ route('services') }}">Services</a> |
                <a href="{{ route('contact') }}">Contact</a> |
                <a href="{{ route('login') }}" class="login-link">Login</a>
            </div>
        </nav>
        <div class="container">
            <div class="hero-logo">
                <!-- REPLACE THIS WITH YOUR LOGO IMAGE -->
               <img src="{{ asset('images/logo.png') }}" alt="F.R.E.D. Logo - D'Andrea Felipa" class="hero-logo">

            </div>
            <div class="hero-text-content">
                <h1><span class="spark-text">SPARC Session™</span> — <br class="mobile-break"><span
                        class="gold-highlight">Strike the Match.</span> Clarify the Move.</h1>
                <p class="subheadline">Need Direction? Get It in 60 Minutes. A focused, 1-on-1 financial strategy
                    session that delivers clarity fast.</p>
            </div>
        </div>
    </header>

    <main> <!-- These sections will use the dark green theme -->
        <section id="what-this-is">
            <div class="container">
                <h2>What This Is</h2>
                <p>You’ve got a spark — a business idea, a financial move, a gut instinct you know could change
                    everything. But right now? It’s a little cloudy. Maybe even stuck.</p>
                <p>The <strong>SPARC Session™</strong> is your clarity call. One powerful hour to strip away the noise,
                    zero in on the right next move, and fuel it with strategy, precision, and confidence. This isn’t
                    generic advice. It’s hyper-personalized insight designed to snap you out of confusion and into
                    aligned action.</p>
            </div>
        </section>

        <section id="what-we-do"> <!-- This will get the 'section-bg-subtle-darker' -->
            <div class="container">
                <h2>What We Do</h2>
                <p class="subtle">In your 60-minute SPARC, we’ll:</p>
                <ul class="feature-list">
                    <li><i class="fas fa-bullseye"></i> Laser-focus on one core goal, challenge, or decision</li>
                    <li><i class="fas fa-unlock-alt"></i> Identify what’s holding you back (often, it’s not what you
                        think)</li>
                    <li><i class="fas fa-map-signs"></i> Map out your most aligned next step — with a clear reason
                        behind it</li>
                    <li><i class="fas fa-lightbulb"></i> Decode the opportunity in front of you and how to move on it
                        with boldness</li>
                </ul>
                <p>Whether you're navigating a tough financial choice, launching a new offer, or realigning your
                    direction — this is your strategic jolt of power and peace.</p>
            </div>
        </section>

        <section id="what-you-leave-with">
            <div class="container">
                <h2>What You Leave With</h2>
                <ul class="feature-list">
                    <li><i class="fas fa-check-circle"></i> Clarity on your current block or breakthrough moment</li>
                    <li><i class="fas fa-compass"></i> A custom action step or decision filter you can use immediately
                    </li>
                    <li><i class="fas fa-rocket"></i> Mental momentum (and often, renewed excitement) to stop
                        second-guessing and move</li>
                </ul>
            </div>
        </section>

        <section class="testimonial-section"> <!-- This will get the 'section-bg-subtle-darker' -->
            <div class="container">
                <div class="testimonial-content">
                    <p>“I left that call with more clarity in 60 minutes than I’ve had in 6 months.”</p>
                </div>
            </div>
        </section>

        <section id="who-this-is-for">
            <div class="container">
                <h2>Who This Is For</h2>
                <ul class="feature-list">
                    <li><i class="fas fa-sync-alt"></i> You’ve been swirling in indecision</li>
                    <li><i class="fas fa-exclamation-triangle"></i> You’re on the edge of something important — and you
                        know it</li>
                    <li><i class="fas fa-comments"></i> You want a clear, confident answer without booking a full-day
                        session</li>
                </ul>
            </div>
        </section>

        <section class="final-pitch"> <!-- This will get the 'section-bg-subtle-darker' -->
            <div class="container">
                <p>Think of it as a jump-start for your vision.</p>
                <p class="emphasis">One <span class="gold-highlight">Hour.</span> One <span
                        class="gold-highlight">Breakthrough.</span> One <span class="gold-highlight">Bold</span> Next
                    Move.</p>
            </div>
        </section>

        <section class="cta-section" id="book-now"> <!-- This will be main dark green -->
            <div class="container">
                <h2>Ready to Ignite Your Next Move?</h2>
                <p class="subtle">Book Your <strong>SPARC Session – 1-on-1 Strategy</strong></p>
                <div class="cta-price"><span class="currency">$</span>350</div>

                <a href="https://buy.stripe.com/test_aFa14p3Mv88B53v3Z914401" target="_blank" class="cta-button-main">
                    <i class="fas fa-credit-card"></i> Secure Your SPARC Session
                </a>

                <div class="cta-links-group">
                    <a href="YOUR_CALENDLY_LINK_HERE" target="_blank" class="secondary-action-link">
                        <i class="fas fa-calendar-alt"></i> Step 2: Schedule Your Session (After Payment)
                    </a>
                    <a href="YOUR_JOTFORM_INTAKE_FORM_LINK_HERE" target="_blank" class="secondary-action-link">
                        <i class="fas fa-clipboard-list"></i> Step 3: Complete Intake Form (Optional)
                    </a>
                </div>
            </div>
        </section>

        <section class="important-notice-section"> <!-- This will be main dark green -->
            <div class="container">
                <div class="important-notice">
                    <p><strong><i class="fas fa-shield-alt"></i> No Recordings. No Replays.</strong></p>
                    <p>This session is live, confidential, and built for those who show up. To protect your privacy —
                        and my future programs — the session will not be recorded or replayed.</p>
                </div>
            </div>
        </section>
    </main>

    <footer> <!-- This will get the 'section-bg-subtle-darker' -->
        <div class="container">
            <p>© 2024 FRED Financial Services. All rights reserved. <br class="mobile-break">
                <a href="#privacy-policy">Privacy Policy</a> | <a href="#terms-of-service">Terms of Service</a>
            </p>
        </div>
    </footer>

    <script>
        function handleMobileBreaks() {
            const elements = document.querySelectorAll('.mobile-break');
            if (window.innerWidth >= 768) {
                elements.forEach(el => el.style.display = 'none');
            } else {
                elements.forEach(el => el.style.display = 'initial');
            }
        }
        window.addEventListener('resize', handleMobileBreaks);
        handleMobileBreaks();
    </script>
</body>

</html>