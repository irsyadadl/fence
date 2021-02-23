<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 
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
