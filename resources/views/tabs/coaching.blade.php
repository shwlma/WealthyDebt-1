<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaching Sessions</title>
    <link rel="stylesheet" href="{{ asset('css/frontpage/tabs.coaching.css') }}">
</head>
<body>
    <header>
        <nav class="main-nav">
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a> |
                <a href="{{ route('about') }}">About</a> |
                <a href="{{ route('services') }}">Services</a> |
                <a href="{{ route('contact') }}">Contact</a> |
                <a href="{{ route('login') }}" class="login-link">Login</a>
            </div>
        </nav>
    </header>

    <main>
        <section id="group-vip" class="session-section gold-bg">
            <div class="container">
                <div class="session-intro">
                    <h2>Group Session — Breakthroughs in Good Company</h2>
                    <p class="price-tag">Group VIP: $175</p>
                </div>
                
                <h3>Learn in Community. Move in Confidence.</h3>
                <p class="subheadline">A live, small-group coaching experience focused on execution and elevation.</p>

                <div class="content-block">
                    <h4>What This Is:</h4>
                    <p>This is your chance to experience strategic guidance from a financial expert — at a lower investment — in a high-impact group setting.</p>
                    <p>You’ll get the same depth of insight offered in our $350 SPARC Session, but in a shared space where you’ll learn from real-time questions, guided teaching, and your own self-reflection.</p>
                    <p><strong>This is not a coaching circle.</strong></p>
                    <p>This is a focused, fast-moving, strategy-packed hour designed to help you shift your mindset, identify opportunity, and take smart financial action — especially for your business.</p>
                </div>

                <div class="divider"></div>

                <div class="content-block">
                    <h4>What You’ll Gain:</h4>
                    <ul>
                        <li>A breakdown of the Wealthy Debt™ Framework — and how to use it to strengthen your financial foundation</li>
                        <li>A new lens on how your current business income, debt, or gaps can actually be leveraged</li>
                        <li>Insight into how tools like life insurance, business structuring, and trust planning apply to your stage of growth</li>
                        <li>Live clarity prompts to reflect on your own situation — even without one-on-one time</li>
                    </ul>
                </div>

                <div class="divider"></div>

                <div class="content-block">
                    <h4>What You Leave With:</h4>
                    <ul>
                        <li>7-day replay access of the session</li>
                        <li>A custom Strategic Wealth Action Plan sent to your inbox the next business day, which includes:
                            <ul>
                                <li>Personalized notes based on your session input</li>
                                <li>Suggested financial strategies for your business</li>
                                <li>Insight prompts to help you take action</li>
                                <li>Next-step recommendations to build momentum from the session</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="divider"></div>

                <div class="content-block">
                    <h4>Why This Makes Sense:</h4>
                    <p>Less than a private session — but guided by the same strategy principles</p>
                    <p>A perfect starting point if you’re not ready for VIP Day or SPARC</p>
                    <p>Designed to help you take smarter steps with your business income and financial structure</p>
                    <blockquote class="testimonial">
                        “I left with ideas I’d never considered — and a strategy that makes sense for where I am right now.”
                    </blockquote>
                </div>
                
                <div class="cta-area">
                    <p class="emphasis">This session is bite-sized, bold, and business-aware.</p>
                    <p>Seats are limited to keep the energy intimate — and the takeaways powerful.</p>
                    <!-- IMPORTANT: Replace #YOUR_STRIPE_LINK_GROUP_VIP with your actual Stripe payment link -->
                    <a href="https://buy.stripe.com/test_9B66oJ1En2Oh9jLeDN14403" class="cta-button primary-cta">Enroll in Group VIP ($175)</a>
                    <p class="stripe-info">(Secure Payment via Stripe)</p>
                </div>
            </div>
        </section>

        <section id="consulting-session" class="session-section white-bg"> <!-- Note: was .session-section:nth-child(even), now explicit class for clarity if sections reorder -->
            <div class="container">
                <div class="session-intro">
                    <h2>Consulting Session — Real Answers. Real Fast.</h2>
                    <p class="price-tag">Price: $150 <span class="duration">(Duration: 45 minutes - Live on Zoom)</span></p>
                    <p class="Duration">Insurance consultations with an illustration are FREE</span></p>

                </div>

                <div class="content-block">
                    <h4>What This Is:</h4>
                    <p>You’re not looking for a course. You’re not here to waste time.</p>
                    <p>You’ve got a goal, a challenge, or a few smart questions — and you need answers now.</p>
                    <p>This 45-minute Consulting Session is a focused, fast-paced strategy call designed to cut through confusion and give you direction. Whether you’re building a business, launching a new idea, or just trying to make smarter moves, this is your window to clarity.</p>
                </div>

                <div class="divider"></div>

                <div class="content-block">
                    <h4>What We Might Cover:</h4>
                    <p>Every session is personalized. Common consulting topics include:</p>
                    <ul>
                        <li>How to properly register your business (LLC, S-Corp, Sole Prop — we’ll break it down)</li>
                        <li>Creating your first digital product or offer</li>
                        <li>Pricing and packaging your services so you’re not undercharging</li>
                        <li>How to find your ideal clients and stop spinning your wheels</li>
                        <li>Simple branding tips to make you look like a pro, even on a budget</li>
                        <li>Cleaning up your financial structure so business and personal aren’t mixed</li>
                        <li>Business tools or systems you need — and which ones you don’t</li>
                    </ul>
                    <p>You bring the question or the challenge — I’ll bring the solution and a few next moves.</p>
                </div>
                
                <div class="divider"></div>

                <div class="content-block">
                    <h4>What You Leave With:</h4>
                    <ul>
                        <li>A clear understanding of what to focus on first</li>
                        <li>Practical guidance you can act on immediately</li>
                        <li>A renewed sense of direction — no more spinning your wheels</li>
                        <li>Encouraged to take notes — because we won’t be sending a recording</li>
                    </ul>
                </div>

                <div class="divider"></div>

                <div class="content-block">
                    <h4>Why It’s Worth It:</h4>
                    <p>You get real feedback, not fluff</p>
                    <p>You avoid costly beginner mistakes</p>
                    <p>You leave with a focused mind and a mapped-out next step</p>
                    <blockquote class="testimonial">
                        “I didn’t need a course. I needed someone to help me stop overthinking and just take action. This 45-minute session changed everything.”
                    </blockquote>
                </div>

                <div class="cta-area">
                    <p class="emphasis">No Recordings. No Replays.</p>
                    <p>This session is live, confidential, and built for those who show up.<br>
                    To protect your privacy — and my future programs — the session will not be recorded or replayed.</p>
                     <!-- IMPORTANT: Replace #YOUR_STRIPE_LINK_CONSULTING with your actual Stripe payment link -->
                    <a href="https://buy.stripe.com/test_7sY7sN6YH0G967zbrB14404" class="cta-button gold-cta">Book Consulting Session ($150)</a>
                    <p class="stripe-info">(Secure Payment via Stripe)</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <!-- IMPORTANT: Replace "Your Company Name" with your actual company name -->
            <p>© 2024 FRED Financial Services. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>