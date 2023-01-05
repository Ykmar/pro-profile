<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="antialiased bg-white">
    @include('cookie-consent::index')
    <nav class="flex sticky z-20 top-0 absolute items-center justify-between flex-wrap bg-white text-[#082159] p-4">
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded border-teal-400 navbar-burger">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>{{ __('global.menu') }}</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:w-auto navbar-menu hidden">
            <div class="hidden lg:block mt-2 lg:w-2/12">
                <div class="h-11 w-28 logo"></div>
            </div>
            <div class="lg:text-xl lg:flex-grow lg:flex lg:justify-center mt-3 lg:w-8/12">
                <a data-href="{{ route('resume.index') . '#about' }}" data-target="about" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                    {{ __('resume.index.about') }}
                </a>
                <a data-href="{{ route('resume.index') . '#skills' }}" data-target="skills" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                    {{ __('resume.index.skills.title') }}
                </a>
                <a data-href="{{ route('resume.index') . '#experiences' }}" data-target="experiences" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                    {{ __('resume.index.experiences.title') }}
                </a>
                <a data-href="{{ route('resume.index') . '#contact' }}" data-target="contact" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                    {{ __('resume.index.contact.title') }}
                </a>
            </div>
            <div class="mt-1 lg:text-right lg:w-2/12">
                <a href="{{ route('resume.download') }}" class="inline-block text-xs px-2 py-4 leading-none border rounded font-bold text-white bg-[#1747B5] hover:border-transparent hover:bg-[#103283] lg:mt-0">
                    {{ __('resume.index.download_resume') }}
                </a>
            </div>
        </div>
        <div id="logo-burger" class="block text-3xl lg:hidden">
            <div class="h-11 w-28 logo"></div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-[#082159] text-center lg:text-left">
        <div class="text-white text-center p-4">
            <a class="hover:text-gray-200" href="{{ route('legals.index') }}">{{ __('resume.index.legals') }}</a>
            |
            <a class="hover:text-gray-200" href="#">{{ __('resume.index.rgpd') }}</a>
        </div>
    </footer>
</body>
</html>
@yield('scripts')
