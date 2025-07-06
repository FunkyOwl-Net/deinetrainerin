<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'deineTrainerin') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800">
    <header class="navbar">
        <div class="navbar-container">
            <button id="menu-toggle" class="hamburger md:hidden" aria-label="Menü öffnen">
                &#9776;
            </button>
            <a href="/" class="logo-link"><span class="logo-prefix">deine</span><span class="logo-highlight">Trainerin</span>.at</a>
            <div class="mail md:block hidden">
                <button onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Termin</button>
            </div>
            <nav id="desktop-menu" class="navbar-menu hidden md:block">
                <ul>
                    <li><a href="#about">Über mich</a></li>
                    <li><a href="#services">Leistungen</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
            </nav>
        </div>
        <nav id="mobile-menu" class="mobile-nav">
            <ul class="navbar-menu">
                <li><a href="#about">Über mich</a></li>
                <li><a href="#services">Leistungen</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h5>Sitemap</h5>
                <ul>
                    <li><a href="#about">Über mich</a></li>
                    <li><a href="#services">Leistungen</a></li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h5>Kontakt</h5>
                <p>Mag. Sabine Taudes</p>
                <p>Vienna, Austria</p>
                <div class="social-icons">
                    <a href="#" aria-label="Instagram">IG</a>
                    <a href="#" aria-label="Facebook">FB</a>
                </div>
            </div>
            <div class="footer-section">
                <img src="/img/svs.png" alt="SVS Logo" />
            </div>
        </div>
        <div class="footer-bottom">&copy; {{ date('Y') }} deineTrainerin.at</div>
    </footer>

    <div id="cookie" class="cookie-banner">
        <div class="cookie-content">
            <p>Diese Website verwendet Cookies.</p>
            <div>
                <button id="cookie-accept" class="cookie-btn">OK</button>
                <button id="cookie-decline" class="cookie-btn cookie-btn-decline">Ablehnen</button>
            </div>
        </div>
    </div>

    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        document.getElementById('menu-toggle').addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });
        const cookieBanner = document.getElementById('cookie');
        document.getElementById('cookie-accept').onclick = () => cookieBanner.style.display = 'none';
        document.getElementById('cookie-decline').onclick = () => cookieBanner.style.display = 'none';
        window.addEventListener('load', () => {
            cookieBanner.style.display = 'block';
        });
    </script>
</body>
</html>
