<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'deineTrainerin') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800">
    <header class="bg-white shadow">
        <nav class="container mx-auto flex items-center justify-between p-4">
            <a href="/" class="text-xl font-bold text-primary">deineTrainerin.at</a>
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul id="menu" class="hidden md:flex space-x-6">
                <li><a href="#about" class="hover:text-primary">Über mich</a></li>
                <li><a href="#services" class="hover:text-primary">Leistungen</a></li>
                <li><a href="#contact" class="hover:text-primary">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} deineTrainerin.at
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
