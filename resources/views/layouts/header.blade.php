<header>
    <style>
        /* Base header styling */
        header {
            background-color: #082f1e;
            /* Deep green background */
            padding: 1.5em 2em;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            color: white;
            border-bottom: 4px solid #ffd700;

        }

        /* Navigation container styling */
        header nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Space out items: brand on left, nav in middle, login on right */
            width: 100%;
            position: relative;
        }

        /* Styling for the brand name */
        .brand-name {
            font-size: 1.8em;
            /* Larger font size for prominence */
            font-weight: bold;
            /* Bold text */
            color: #ffd700;
            /* Gold color for the brand name */
            text-decoration: none;
            /* Remove underline */
            padding-right: 1em;
            /* Add some space to the right of the brand name */
            white-space: nowrap;
            /* Prevent wrapping */
        }

        /* Styling for individual navigation links */
        header nav a {
            font-size: 1.1em;
            padding: 0.5em 1em;
            border-radius: 4px;
            text-decoration: none;
            /* Remove underline */
            color: #d4af37;
            /* Gold color for links */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Smooth transitions for hover effects */
            white-space: nowrap;
            /* Prevent links from wrapping */
        }

        /* Hover effect for navigation links */
        header nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            /* Light transparent background on hover */
            color: #ffd700;
            /* Brighter gold on hover */
        }

        /* Styling for the login button */
        header .login-btn {
            background-color: #d4af37;
            /* Gold background */
            color: #082f1e;
            /* Deep green text for contrast */
            padding: 0.6rem 1.2rem;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Smooth transitions */
            margin-left: 1.5em;
            /* Space from other nav items */
            text-decoration: none;
            /* Remove underline */
            white-space: nowrap;
            /* Prevent wrapping */
        }

        /* Hover effect for the login button */
        header .login-btn:hover {
            background-color: #ffd700;
            transform: translateY(-1px);
        }

        /* Styling for the separators between links */
        header nav span.separator {
            color: rgba(255, 255, 255, 0.5);
            margin: 0 0.5em;
        }

        /* Specific styling for the 'Sparc' link */
        header nav a[href*="Sparc"] {
            font-weight: bolder;
            color: #ffd700;
            text-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
        }

        /* Container for the main navigation links (excluding brand and login) */
        .main-nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            margin: 0 1em;
            flex-wrap: wrap;
        }


        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            header nav {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .brand-name {
                margin-bottom: 1em;
                padding-right: 0;
            }

            .main-nav-links {
                flex-direction: column;
                /* Stack links vertically */
                margin: 0;
                /* Remove horizontal margin */
                width: 100%;
            }

            header nav a,
            header .login-btn {
                margin: 0.5em 0;
                /* Add vertical margin */
                width: auto;
                /* Allow items to size naturally */
            }

            header nav span.separator {
                display: none;
            }

            /* Logo styling inside the brand-name */
            .brand-name .logo {
                height: 32px;
                width: 32px;
                margin-right: 0.5em;
            }
        }
    </style>

    <div>
        <nav>
            <a href="#" class="brand-name">
                <img src="{{ asset('images/logo-02.png') }}" alt="Wealthy Debt Logo" class="logo"
                    style="height: 50px; width: 50px; vertical-align: middle;">
                Wealthy Debt™
            </a>

            <div class="main-nav-links">
                <a href="{{ route('home') }}">Home</a> <span class="separator">|</span>
                <a href="{{ route('about') }}">About</a> <span class="separator">|</span>
                <a href="{{ route('sparcservices') }}">Sparc</a> <span class="separator">|</span>
                <a href="{{ route('vip') }}">VIP</a> <span class="separator">|</span>
                <a href="{{ route('book') }}">Book</a> <span class="separator">|</span>
                <a href="{{ route('coaching') }}">Coaching</a> <span class="separator">|</span>
                <a href="{{ route('services') }}">Services</a> <span class="separator">|</span>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            {{-- Conditional rendering of the Login button --}}
            @if (Route::currentRouteName() != 'login')
                <a href="{{ route('login') }}" class="login-btn">Login</a>
            @endif
        </nav>
    </div>
</header>