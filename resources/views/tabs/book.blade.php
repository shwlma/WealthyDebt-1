<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book D’Andrea - Speaking Engagements</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Lato:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/frontpage/tabs.book.css">
</head>

<body>
    <header class="hero-section">
        <nav class="main-nav">
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a> |
                <a href="{{ route('about') }}">About</a> |
                <a href="{{ route('services') }}">Services</a> |
                <a href="{{ route('contact') }}">Contact</a> |
                <a href="{{ route('login') }}" class="login-link">Login</a>
            </div>
        </nav>
        <div class="hero-container">
            <div class="hero-heading-wrapper">
                <img src="{{ asset('images/logo.png') }}" alt="F.R.E.D. Logo - D'Andrea Felipa" class="hero-logo">
                <h1>Book D’Andrea to Speak at Your Next Event</h1>
            </div>
            <p class="subheadline">Inspire your audience with powerful insights on wealth, trust, and financial
                transformation.</p>
            <p class="tagline">D’Andrea Speaks — Where Money, Legacy, and Mindset Collide</p>

            <div class="price-format-info">
                <span class="starting-price">Starting at: $3,500</span>
                <p class="formats"><strong>Format:</strong> Keynote, Panel, Workshop, Fireside Chat, or Virtual Session
                </p>
            </div>

            <div class="button-container">
                <a href="#final-cta" class="cta-button primary-action">Book D'Andrea Now</a>
            </div>
        </div>
    </header>

    <div class="content-section-wrapper">
        <div class="container">
            <main>
                <section id="about-dandrea" class="content-section">
                    <h2><span class="icon">🎤</span>Who Is D’Andrea?</h2>
                    <p>D’Andrea Felipa is not your average financial strategist. She blends street-smart hustle with
                        real-world results — teaching individuals, entrepreneurs, and communities how to turn what they
                        owe into what they own™, protect their legacy, and finally take control of their financial
                        future.</p>
                    <p>From underserved audiences to high-level boardrooms, D’Andrea connects across generations with
                        story-driven insight, wealth-building clarity, and no-fluff delivery that actually sticks.</p>
                </section>

                <section id="core-topics" class="content-section">
                    <h2><span class="icon"></span>Core Topics Include:</h2>
                    <p>Each talk is tailored to your audience, but signature topics include:</p>
                    <ul>
                        <li><strong>Wealthy Debt™:</strong> Flip your financial story using the money you're already
                            spending</li>
                        <li><strong>Living Benefits Now:</strong> Life insurance as a wealth tool while you’re still
                            alive</li>
                        <li><strong>Legacy Moves™:</strong> Building generational wealth through trusts and estate
                            planning</li>
                        <li><strong>The Mindset of Ownership:</strong> How to stop thinking like a borrower and start
                            moving like a builder</li>
                        <li><strong>From Hustle to Structure:</strong> Teaching entrepreneurs how to clean up their
                            financial chaos</li>
                        <li><strong>Financial Faith:</strong> Honoring God while building wealth and protecting your
                            household</li>
                    </ul>
                </section>

                <section id="testimonials" class="content-section">
                    <h2><span class="icon"></span>What Audiences Say:</h2>
                    <div class="testimonial-item">
                        <p>"I’ve heard dozens of financial speakers, but D’Andrea made it real. She didn’t just speak
                            facts — she sparked change.”</p>
                    </div>
                    <div class="testimonial-item">
                        <p>"She broke down things we’ve been too afraid to ask. Now I feel equipped and empowered.”</p>
                    </div>
                </section>

                <section id="booking-includes" class="content-section">
                    <h2><span class="icon"></span>Booking Includes:</h2>
                    <ul>
                        <li>A pre-session consult to understand your audience’s needs and event goals</li>
                        <li>A customized keynote or session plan tailored for impact</li>
                        <li>Travel and accommodations billed separately unless otherwise arranged</li>
                        <li>Virtual and in-person speaking options available</li>
                    </ul>
                </section>

                <section id="please-note" class="content-section">
                    <h2><span class="icon"></span>Please Note:</h2>
                    <ul>
                        <li>All speaking engagements start at $3,500 and may vary depending on location, format, and
                            custom requests</li>
                        <li>Nonprofit and community-based rates may be considered upon request</li>
                        <li>D’Andrea does not speak for exposure — only impact</li>
                    </ul>
                </section>
            </main>
        </div>
    </div>

    <section id="final-cta" class="final-cta-section">
        <p class="intro-text">Whether it’s a conference, corporate training, church summit, or community event — if
            you're looking for someone to educate, activate, and elevate your audience in 60 minutes or less?</p>
        <p class="final-cta-tagline">D’Andrea Speaks.</p>
        <div class="button-container">
            <a href="#final-cta" class="cta-button primary-action">Request D'Andrea for Your Event</a>
        </div>
    </section>

    <footer>
        <p>© <span id="currentYear"></span> D’Andrea Felipa. All Rights Reserved.</p>
        <p>
            <a href="#privacy">Privacy Policy</a> | <a href="#terms">Terms of Service</a>
        </p>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        // IMPORTANT: Replace "YOUR_JOTFORM_INTAKE_LINK_HERE" with your actual Jotform URL in the two 'Submit Intake Form' buttons.
    </script>

</body>

</html>