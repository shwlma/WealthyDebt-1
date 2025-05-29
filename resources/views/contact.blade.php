<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact | Wealthy Debt</title>
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
        <h1>Let's Flip Your Balance Sheet</h1>
        <p>Have a question before booking? Want D'Andrea to speak at your event? Drop a note below—our team answers every message within one business day.</p>
        
        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
            @csrf
            
            <div>
                <label for="name">Name: *
                    <input type="text" id="name" name="name" required maxlength="100">
                </label>
            </div>
            
            <div>
                <label for="email">Email: *
                    <input type="email" id="email" name="email" required maxlength="255">
                </label>
            </div>
            
            <div>
                <label for="phone">Phone:
                    <input type="tel" id="phone" name="phone" maxlength="20">
                </label>
            </div>
            
            <div>
                <label for="type">Type of Inquiry:
                    <select id="type" name="type" required>
                        <option value="">Please select...</option>
                        <option value="services">Services</option>
                        <option value="speaking">Speaking</option>
                        <option value="press">Press</option>
                        <option value="partnership">Partnership</option>
                        <option value="other">Other</option>
                    </select>
                </label>
            </div>
            
            <div>
                <p>Message:</p>
                <label for="message">
                    <textarea id="message" name="message" rows="5" cols="50" maxlength="1000" placeholder="Tell us how we can help you..."></textarea>
                </label>
            </div>
            
            <div>
                <button type="submit">Send Message</button>
            </div>
        </form>
        
        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <p><strong>Direct Contact:</strong> info@wealthydebt.com</p>
    </main>
    
    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>
</body>
</html>