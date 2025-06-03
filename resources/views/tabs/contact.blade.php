<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact | Wealthy Debt</title>
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
        <h1 class="page-title">Let's Flip Your Balance Sheet</h1>

        <section class="contact-intro">
            <h4>Have a question before booking? Want D'Andrea to speak at your event? Drop a note below—our team answers
                every message within one business day.</h4>
        </section>

        <section class="contact-form-section">
            <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                @csrf

                <div class="form-group">
                    <label for="name">Name: *</label>
                    <input type="text" id="name" name="name" required maxlength="100">
                </div>

                <div class="form-group">
                    <label for="email">Email: *</label>
                    <input type="email" id="email" name="email" required maxlength="255">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" maxlength="20">
                </div>

                <div class="form-group">
                    <label for="type">Type of Inquiry:</label>
                    <select id="type" name="type" required>
                        <option value="">Please select...</option>
                        <option value="services">Services</option>
                        <option value="speaking">Speaking</option>
                        <option value="press">Press</option>
                        <option value="partnership">Partnership</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" maxlength="1000"
                        placeholder="Tell us how we can help you..."></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Send Message</button>
                </div>
            </form>

            {{-- Display validation errors --}}
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Display success message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <p><strong>Direct Contact:</strong> <a href="mailto:info@wealthydebt.com">info@wealthydebt.com</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>
</body>

</html>