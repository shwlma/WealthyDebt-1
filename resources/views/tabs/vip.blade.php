<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Day - Your Wealth Strategy Blueprint</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontpage/tabs.vip.css') }}">
</head>

<body>
    @include('layouts.header')
    <header header class="hero">
        <div class="container">
            <div class="logo-container animate-fade-in" style="transition-delay: 0.1s;"> <!-- Added animation -->
                <img src="{{ asset('images/logo.png') }}" alt="F.R.E.D. Logo - D'Andrea Felipa" class="hero-logo">
            </div>
            <span class="vip-day-badge animate-fade-in" style="transition-delay: 0.2s;">VIP Day</span>
            <!-- Added animation -->
            <h1 class="animate-slide-up" style="transition-delay: 0.3s;">Your Wealth Strategy Blueprint in One
                Powerful
                Session</h1> <!-- Added animation -->
            <p class="subheadline animate-slide-up" style="transition-delay: 0.4s;">A 4-hour strategic experience to
                build your wealth blueprint. One-on-One, Live on Zoom</p> <!-- Added animation -->
        </div>
    </header>

    <main>
        <section id="what-this-is">
            <div class="container">
                <h2 class="animate-fade-in"
                    style="font-family: 'Poppins', sans-serif; color: var(--original-gold-accent); font-size: 2.5rem; text-align:center; text-transform:uppercase;">
                    What This Is:</h2>
                <p class="highlight-text financial-rebirth animate-zoom-in" style="transition-delay: 0.2s;">This is not
                    a coaching call. This is not a workshop. <strong>This is your financial rebirth.</strong></p>
                <p class="animate-fade-in" style="transition-delay: 0.3s;">The VIP Day is a laser-focused, deep-dive
                    session designed to collapse time and accelerate your goals. We take your scattered pieces — income,
                    debt, savings, life insurance, legacy dreams — and architect a custom strategy that builds wealth
                    now, not just when you die.</p>
                <p class="animate-fade-in" style="transition-delay: 0.4s;">Whether you're starting from scratch or
                    already on the path, this is your private boardroom moment — with me as your strategist.</p>
                <p class="highlight-text boutique-strategy animate-fade-in" style="transition-delay: 0.5s;">No
                    pre-packaged advice. No cookie-cutter templates. This is boutique-level strategy for real people who
                    are ready to build wealth on their own terms.</p>
            </div>
        </section>

        <section id="what-we-do" class="benefits-section">
            <div class="container">
                <h2 class="animate-slide-up"><span class="emoji"></span> What We Do:</h2>
                <div class="title-divider animate-zoom-in" style="transition-delay: 0.1s;"></div>
                <div class="benefits-grid">
                    <!-- Animation class will be added by JS for staggered effect -->
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-search-dollar"></i></div>
                        <h3 class="benefit-heading">Unlock Potential</h3>
                        <p class="benefit-text">Uncover the hidden potential in your income and debt (turn what you owe
                            into what you own<span class="tm-icon">™</span>).</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-map-signs"></i></div>
                        <h3 class="benefit-heading">Personalized Roadmap</h3>
                        <p class="benefit-text">Design a personalized financial roadmap using life insurance, trusts,
                            and cash-flow strategies.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-clipboard-list"></i></div>
                        <h3 class="benefit-heading">Comprehensive Review</h3>
                        <p class="benefit-text">Review your current assets, liabilities, and opportunities — no
                            judgment, just clarity.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3 class="benefit-heading">Wealth Protection</h3>
                        <p class="benefit-text">Structure your wealth protection plan (dynasty trust optional).</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-cogs"></i></div>
                        <h3 class="benefit-heading">Actionable System</h3>
                        <p class="benefit-text">Build a system you can actually follow, even if you’re busy,
                            overwhelmed, or behind.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="what-you-leave-with" class="benefits-section">
            <div class="container">
                <h2 class="animate-slide-up"><span class="emoji"></span> What You Leave With:</h2>
                <div class="title-divider animate-zoom-in" style="transition-delay: 0.1s;"></div>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-file-signature"></i></div>
                        <h3 class="benefit-heading">Tailored Action Plan</h3>
                        <p class="benefit-text">A documented plan of action tailored to your exact financial picture.
                        </p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-rocket"></i></div>
                        <h3 class="benefit-heading">90-Day Momentum Map</h3>
                        <p class="benefit-text">Your next 90-day priority map to create momentum.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-hand-holding-usd"></i></div>
                        <h3 class="benefit-heading">Financial Empowerment</h3>
                        <p class="benefit-text">A sense of control, clarity, and confidence over your money like never
                            before.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-video"></i></div>
                        <h3 class="benefit-heading">Session Recording (Optional)</h3>
                        <p class="benefit-text">Optional: Live recording + follow-up notes (available upon request).</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="who-this-is-for" class="benefits-section">
            <div class="container">
                <h2 class="animate-slide-up"><span class="emoji"></span> Who This Is For:</h2>
                <div class="title-divider animate-zoom-in" style="transition-delay: 0.1s;"></div>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-puzzle-piece"></i></div>
                        <h3 class="benefit-heading">Tired of DIY Finance?</h3>
                        <p class="benefit-text">You’re tired of piecing together financial advice from the internet.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-film"></i></div>
                        <h3 class="benefit-heading">Done with Generic Tips?</h3>
                        <p class="benefit-text">You’re done wasting time on vague YouTube tips and $99 courses.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-user-tie"></i></div>
                        <h3 class="benefit-heading">Ready for Real Strategy?</h3>
                        <p class="benefit-text">You want real strategy, now — from someone who walks the talk.</p>
                    </div>
                </div>
                <p class="highlight-text launchpad animate-fade-in"
                    style="color:var(--benefits-gold); font-family:'Poppins', sans-serif; transition-delay: 0.3s;">If
                    you're ready to stop winging it and start winning, the VIP Day is your launchpad.</p>
            </div>
        </section>

        <section id="testimonial">
            <div class="container">
                <div class="quote-wrapper animate-fade-in"> <!-- Animated wrapper for quote -->
                    <div class="quote">
                        <p>“I thought I needed a budget. What I needed was a vision and a system. This VIP Day showed me
                            both — and how to fund them.”</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta">
            <div class="container">
                <h2 class="animate-slide-up">Ready to Build Your Blueprint?</h2>
                <a href="https://buy.stripe.com/test_4gMbJ35UDdsVcvXbrB14400" target="_blank"
                    class="cta-button animate-zoom-in" style="transition-delay: 0.2s;">Reserve Your VIP Day</a>
                <p class="price-info animate-fade-in" style="transition-delay: 0.3s;">VIP Day Investment: $2,500</p>

                <div class="important-note animate-fade-in" style="transition-delay: 0.4s;">
                    <p><strong>No Recordings. No Replays.</strong></p>
                    <p>This session is live, confidential, and built for those who show up. To protect your privacy —
                        and my future programs — the session will not be recorded or replayed.</p>
                </div>

                <div class="jotform-link-placeholder animate-fade-in" style="transition-delay: 0.5s;">
                    <p>To ensure we make the most of our time, please <a href="https://calendly.com/wealthydebt/vip-day"
                            target="_blank">Schedule your session</a> after reserving
                        your spot.</p>
                </div>
            </div>
        </section>
    </main>


    <footer class="animate-fade-in">
        <div class="container">
            <p>© 2024 F.R.E.D. Financial Services. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const animationClasses = [
                'animate-fade-in',
                'animate-slide-up',
                'animate-slide-in-left',
                'animate-slide-in-right',
                'animate-zoom-in'
            ];

            // Function to handle intersection
            const handleIntersection = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            };

            // Create a single observer for all animation types
            const observer = new IntersectionObserver(handleIntersection, {
                root: null, // relative to the viewport
                rootMargin: '0px',
                threshold: 0.1 // 10% of the element is visible
            });

            // Observe elements with general animation classes
            animationClasses.forEach(animClass => {
                const elements = document.querySelectorAll('.' + animClass);
                elements.forEach(el => observer.observe(el));
            });

            // Special handling for staggered benefit items
            const benefitGrids = document.querySelectorAll('.benefits-grid');
            benefitGrids.forEach(grid => {
                const items = grid.querySelectorAll('.benefit-item');
                items.forEach((item, index) => {
                    // Add a base animation class if not already present
                    // (though it's better to add directly in HTML for clarity if all slide up)
                    item.classList.add('animate-slide-up'); // Default to slide-up for benefit items

                    // Apply delay for staggering
                    item.style.transitionDelay = `${index * 0.1}s`;
                    observer.observe(item); // Observe each item
                });
            });
        });
    </script>

</body>

</html>