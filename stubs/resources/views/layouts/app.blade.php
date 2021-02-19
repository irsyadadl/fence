<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body class="antialiased text-gray-800">
    @include('layouts._navbar')
    <main class="mt-8">
        {{ $slot }}
    </main>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
