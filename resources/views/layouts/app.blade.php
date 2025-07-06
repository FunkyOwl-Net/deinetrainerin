<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="/" class="text-xl font-semibold">{{ config('app.name') }}</a>
            <nav class="space-x-4">
                <a href="/" class="hover:underline">Home</a>
                <a href="/admin/pages" class="hover:underline">Admin</a>
            </nav>
        </div>
    </header>
    <main class="flex-1 container mx-auto p-4">
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-white text-center p-4">
        &copy; {{ date('Y') }} {{ config('app.name') }}
    </footer>
</body>
</html>
