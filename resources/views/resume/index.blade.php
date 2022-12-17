<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-900">
    <nav class="bg-gray-800 text-white">
        <ul class="flex">
            <li class="px-3 py-2"><a href="#" class="text-2xl hover:text-gray-400">{{ __('resume.index.about') }}</a></li>
            <li class="px-3 py-2"><a href="#" class="text-2xl hover:text-gray-400">{{ __('resume.index.contact') }}</a></li>
        </ul>
    </nav>
    @vite('resources/js/app.js')
</body>
</html>
