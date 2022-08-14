<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-800 text-tiny tracking-tight">
    @include('layouts.navigation')
    <main class="mt-8">
        {{ $slot }}
    </main>

    <footer class="mt-8 lg:mt-16 border-t py-10 text-center">
        <span class="text-gray-500">{{ config('app.name') }} / &copy; {{ date('Y') }}</span>
    </footer>
</body>

</html>
