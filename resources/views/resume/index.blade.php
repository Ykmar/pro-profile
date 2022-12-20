<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-white">
    <nav class="flex sticky z-20 top-0 absolute items-center justify-between flex-wrap bg-white text-blue-800 p-4">
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded border-teal-400 navbar-burger">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>{{ __('global.menu') }}</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:w-auto navbar-menu hidden">
            <div class="text-3xl hidden lg:block mt-2">MC</div>
            <div class="text-xl lg:flex-grow lg:flex lg:justify-center mt-3">
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.about') }}
                </a>
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.skills') }}
                </a>
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.experiences') }}
                </a>
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.contact') }}
                </a>
            </div>
            <div class="mt-1">
                <a href="{{ route('resume.download') }}" class="inline-block text-sm px-4 py-4 leading-none border rounded text-white bg-blue-800 hover:border-transparent hover:bg-blue-900 lg:mt-0">
                    {{ __('resume.index.download_resume') }}
                </a>
            </div>
        </div>
        <div id="logo-burger" class="block text-3xl lg:hidden">MC</div>
    </nav>
    <header>
        <div class="flex-column w-full h-full">
            <div class="relative z-0 banner"></div>
            <div class="relative block sm:flex md:flex lg:flex justify-around z-10 bottom-8 services m-auto">
                <div class="shadow font-bold lg:text-xl mb-2 sm:mb-0 md:mb-0 lg:mb-0 sm:w-44 md:w-52 lg:w-72 px-4 py-4 lg:px-8 lg:py-8 leading-none border rounded text-blue-800 bg-white text-center m-auto">{!! __('resume.index.services.audit')  !!}</div>
                <div class="shadow font-bold lg:text-xl mb-2 sm:mb-0 md:mb-0 lg:mb-0 sm:w-44 md:w-52 lg:w-72 px-4 py-4 lg:px-8 lg:py-8 leading-none border rounded text-blue-800 bg-white text-center m-auto">{!! __('resume.index.services.dev')  !!}</div>
                <div class="shadow font-bold lg:text-xl sm:w-44 md:w-52 lg:w-72 px-4 py-4 lg:px-8 lg:py-8 leading-none border rounded text-blue-800 bg-white text-center m-auto">{!! __('resume.index.services.project')  !!}</div>
            </div>
        </div>
    </header>
{{--    <div class="container mx-auto grid grid-cols-1">--}}
{{--        <div class="mr-4 ml-4">--}}
{{--            <h2 class="text-2xl text-white font-bold text-center mt-4 mb-4">{{ __('resume.index.experiences') }}</h2>--}}
{{--        </div>--}}
{{--        <div class="mr-4 ml-4">--}}
{{--            <h2 class="text-2xl text-white font-bold text-center mt-4 mb-4">{{ __('resume.index.contact') }}</h2>--}}
{{--            <form class="lg:mx-auto lg:max-w-md " action="{{ route('resume.contact') }}" method="post">--}}
{{--                <div class="mb-4">--}}
{{--                    <label for="name" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.name') }}</label>--}}
{{--                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>--}}
{{--                </div>--}}
{{--                <div class="mb-4">--}}
{{--                    <label for="firstname" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.firstname') }}</label>--}}
{{--                    <input type="text" id="firstname" name="firstname" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>--}}
{{--                </div>--}}
{{--                <div class="mb-4">--}}
{{--                    <label for="email" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.email') }}</label>--}}
{{--                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>--}}
{{--                </div>--}}
{{--                <div class="mb-4">--}}
{{--                    <label for="message" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.message') }}</label>--}}
{{--                    <textarea id="message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>--}}
{{--                </div>--}}
{{--                <div class="mb-4">--}}
{{--                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('global.send') }}</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    @vite('resources/js/app.js')
</body>
</html>
