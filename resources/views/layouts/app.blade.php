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
    <nav class="block lg:flex sticky z-20 top-0 absolute items-center justify-between flex-wrap bg-white text-[#082159] p-4">
        <div class="flex justify-between lg:hidden">
            <div class="text-3xl">
                <a href="{{ route('resume.index') }}">
                    <div class="h-11 w-28 logo"></div>
                </a>
            </div>
            <div>
                <button class="flex items-center px-3 py-2 border rounded border-teal-400 navbar-burger">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>{{ __('global.menu') }}</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full block navbar-menu hidden lg:text-xl lg:flex lg:justify-center lg:items-center mt-3">
            <div class="hidden lg:block lg:w-32">
                <div class="h-11 w-28 logo"></div>
            </div>
            <a data-href="{{ route('resume.index') . '#about' }}" data-target="about" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                {{ __('views.layouts.header.about') }}
            </a>
            <a data-href="{{ route('resume.index') . '#skills' }}" data-target="skills" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                {{ __('views.layouts.header.skills') }}
            </a>
            <a data-href="{{ route('resume.index') . '#experiences' }}" data-target="experiences" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                {{ __('views.layouts.header.experiences') }}
            </a>
            <a data-href="{{ route('resume.index') . '#contact' }}" data-target="contact" class="anchor block font-bold cursor-pointer lg:inline-block lg:mt-0 hover:text-[#1747B5] mr-5">
                {{ __('views.layouts.header.contact') }}
            </a>
            <div class="lg:text-right lg:w-40">
                <a href="{{ route('resume.download') }}" class="inline-block text-xs px-2 py-4 leading-none border rounded font-bold text-white bg-[#1747B5] hover:border-transparent hover:bg-[#103283]">
                    {{ __('views.layouts.header.download_resume') }}
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-[#082159] text-center lg:text-left">
        <div class="text-white text-center p-4">
            <a class="hover:text-gray-200" href="{{ route('legals.index') }}">{{ __('views.layouts.footer.legals') }}</a>
            |
            <a class="hover:text-gray-200" href="{{ route('privacy-policy.index') }}">{{ __('views.layouts.footer.privacy-policy') }}</a>
        </div>
    </footer>
</body>
</html>
@yield('scripts')
