<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
    <div class="antialiased lg:flex items-center justify-center min-h-screen lg:bg-gray-50 text-gray-800">
        <div class="lg:w-1/3 w-full py-5 lg:py-0">
            <div class="text-center mb-5">
                <a href="/">
                    <div class="inline-flex items-center">
                        <svg class="w-12 h-12 text-violet-500" viewBox="0 0 364 364" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M364 182C364 282.516 282.516 364 182 364C81.4842 364 0 282.516 0 182C0 81.4842 81.4842 0 182 0C282.516 0 364 81.4842 364 182ZM68.6354 182C68.6354 244.61 119.39 295.365 182 295.365C244.61 295.365 295.365 244.61 295.365 182C295.365 119.39 244.61 68.6354 182 68.6354C119.39 68.6354 68.6354 119.39 68.6354 182Z" fill="currentColor"/>
                        </svg>
                    </div>
                </a>
                <h3 class="text-gray-600 font-medium uppercase text-xl mt-2">{{ $header }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ $subheader }}</p>
            </div>
            <div class="bg-white lg:p-10 p-5 rounded-lg lg:shadow">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
