
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads</title>
    <link rel="stylesheet" href="{{ asset('css/tabs.css') }}">
</head>
<body>
    <header>
        <h1>Download Guide</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('about') }}">About</a> |
            <a href="{{ route('services') }}">Services</a> |
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Your Resources</h2>
            <p>Click below to download your guides and templates:</p>
            <button class="btn" onclick="downloadFile()">Download Now</button>
        </section>
    </main>
    <script>
        function downloadFile() {
            alert("Download functionality will be connected soon.");
        }
    </script>
    <footer>
        <p>&copy; 2025 Wealthy Debt. All rights reserved.</p>
    </footer>

</body>
</html>
