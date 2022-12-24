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
            <div class="text-3xl hidden lg:block mt-2 lg:w-2/12">MC</div>
            <div class="lg:text-xl lg:flex-grow lg:flex lg:justify-center mt-3 lg:w-8/12">
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.about') }}
                </a>
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.skills.title') }}
                </a>
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.experiences') }}
                </a>
                <a href="" class="block lg:inline-block lg:mt-0 hover:text-blue-900 mr-5">
                    {{ __('resume.index.contact') }}
                </a>
            </div>
            <div class="mt-1 lg:text-right lg:w-2/12">
                <a href="{{ route('resume.download') }}" class="inline-block text-xs px-2 py-4 leading-none border rounded font-bold text-white bg-blue-800 hover:border-transparent hover:bg-blue-900 lg:mt-0">
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
    <div class="w-full mt-60 sm:mt-28 md:mt-36 lg:mt-72">
        <div class="block lg:flex justify-around m-auto">
            <div class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 759.015 489">
                    <g id="illustration_marc" data-name="illustration marc" transform="translate(-22.72 -15.02)">
                        <g id="Background_Simple" data-name="Background Simple" transform="translate(23.365 15.02)">
                            <path id="Tracé_2" data-name="Tracé 2" d="M751.837,284.872S762.612,93.083,599.914,40.287,355.328,26.28,303.61,75.843,234.652,157.731,175.391,164.2,61.18,181.435,33.165,253.625s7.542,129.3,61.416,164.853,116.367-2.155,165.93,20.472S341.321,499.288,442.6,503.6s104.514-24.782,156.233-70.035S742.14,435.718,751.837,284.872Z" transform="translate(-23.354 -15.02)" fill="#e0f3fd"/>
                            <path id="Tracé_3" data-name="Tracé 3" d="M751.837,284.872S762.612,93.083,599.914,40.287,355.328,26.28,303.61,75.843,234.652,157.731,175.391,164.2,61.18,181.435,33.165,253.625s7.542,129.3,61.416,164.853,116.367-2.155,165.93,20.472S341.321,499.288,442.6,503.6s104.514-24.782,156.233-70.035S742.14,435.718,751.837,284.872Z" transform="translate(-23.354 -15.02)" fill="#e0f3fd" opacity="0.7"/>
                        </g>
                        <g id="Plant" transform="translate(625.63 195.424)">
                            <path id="Tracé_4" data-name="Tracé 4" d="M591.673,229.4c4.385,1.918,15.085,1.681,15.085,1.681s-2.306-7.025-2.511-7.456c-2.349-4.924-9.8-13.059-15.86-12.24a7.241,7.241,0,0,0-5.808,9.072C583.613,224.648,587.923,227.772,591.673,229.4Z" transform="translate(-582.318 -180.216)" fill="#263238"/>
                            <path id="Tracé_5" data-name="Tracé 5" d="M595.307,262.775c4.547.657,14.126-2.155,14.891-2.338a128.735,128.735,0,0,0,5.808,16.076c1.314,3.049,2.737,6.077,4.2,9.094-.873-1.271-1.659-2.414-1.789-2.564-3.577-4.127-12.93-10-18.532-7.618a7.23,7.23,0,0,0-3.232,10.279c2.08,3.793,7.057,5.657,11.1,6.249s12.3-1.605,14.47-2.22c.571,1.153,1.131,2.306,1.713,3.459,2.78,5.527,5.57,11.023,8.135,16.5.916,1.939,1.735,3.868,2.564,5.8-.776-1.131-1.444-2.079-1.552-2.22-3.577-4.127-12.93-10.01-18.532-7.618a7.23,7.23,0,0,0-3.232,10.279c2.079,3.782,7.057,5.657,11.1,6.249s11.507-1.4,14.083-2.155c.787,2,1.584,4.008,2.263,5.98.431,1.368.937,2.651,1.293,4.04s.765,2.726,1.077,4.062c.636,2.618,1.293,5.312,1.842,7.866.4,1.789.733,3.491,1.077,5.2-.883-1.929-2.683-5.678-2.877-5.969-2.9-4.622-11.238-11.852-17.164-10.344a7.23,7.23,0,0,0-4.719,9.7c1.476,4.062,6.12,6.659,10.02,7.855,4.31,1.315,13.792.108,14.988,0,.56,2.834,1.078,5.6,1.552,8.232,1.013,5.775,1.789,10.958,2.37,15.343h4.008c-.7-4.536-1.616-9.945-2.823-16.011-.56-2.888-1.228-5.958-1.939-9.115a76.419,76.419,0,0,0,8.361-3.933c3.135,3.394,11.152,7.359,12.186,7.865-1.077,2.683-2.155,5.28-3.232,7.715-2.22,5.107-4.31,9.633-6.185,13.479h4.31c1.605-3.545,3.362-7.542,5.193-12.068,1.077-2.715,2.263-5.646,3.4-8.62,1.153.237,10.559,2.155,14.944,1.153,3.976-.894,8.8-3.146,10.581-7.079a7.23,7.23,0,0,0-4-10c-5.8-1.95-14.643,4.633-17.886,9.029-.183.259-1.95,3.308-3.028,5.247.463-1.239.927-2.435,1.379-3.717.927-2.521,1.778-5.064,2.694-7.79.409-1.336.808-2.694,1.218-4.051s.722-2.812,1.078-4.234c.786-3.308,1.422-6.7,1.993-10.139,2.155.808,10.1,3.556,14.179,3.232s9.18-1.778,11.529-5.387a7.241,7.241,0,0,0-2.424-10.495c-5.441-2.8-15.182,2.37-19.05,6.217-.248.248-2.7,3.319-4.03,5.032.323-2.058.657-4.127.916-6.228.754-6.055,1.325-12.219,1.929-18.317.183-1.886.388-3.76.582-5.635.786.3,10.085,3.76,14.664,3.437,4.073-.28,9.169-1.778,11.529-5.387A7.23,7.23,0,0,0,707.87,275.7c-5.387-2.8-15.171,2.36-19.039,6.217-.291.291-3.836,4.719-4.687,5.894.442-4.137.916-8.243,1.541-12.283a129.122,129.122,0,0,1,3.523-16.162c.366.14,10.064,3.8,14.751,3.469,4.073-.28,9.169-1.778,11.529-5.387a7.23,7.23,0,0,0-2.435-10.484c-5.387-2.8-15.171,2.36-19.039,6.217-.312.3-4.116,5.064-4.741,5.98.086-.3.14-.636.237-.937a93.26,93.26,0,0,1,6.4-15.279c1.39-2.726,2.877-5.247,4.364-7.672,1.745.873,9.7,4.741,14.007,4.913,4.073.162,9.309-.765,12.046-4.094a7.241,7.241,0,0,0-1.261-10.7c-5.1-3.383-15.354.679-19.621,4.084-.226.183-2.381,2.327-3.933,3.911.7-1.077,1.39-2.155,2.08-3.232,2.554-3.857,5.129-7.23,7.445-10.193,1.325-1.67,2.554-3.168,3.728-4.547,2.155,0,10.775-.3,14.578-2.079s7.909-4.967,8.8-9.18a7.23,7.23,0,0,0-6.045-8.911c-6.088-.657-13.307,7.672-15.526,12.66-.194.431-2.424,7.542-2.306,7.542h.129c-1.153,1.3-2.37,2.715-3.674,4.31-2.381,2.92-5.043,6.249-7.693,10.053a129.41,129.41,0,0,0-7.876,12.488,94.817,94.817,0,0,0-6.81,15.332q0,.1,0,.194c0-1.789,0-6.8-.1-7.187-.7-5.387-5.237-15.462-11.249-16.571a7.23,7.23,0,0,0-8.35,6.8c-.356,4.31,2.769,8.62,5.808,11.324,3.426,3.071,12.93,6.034,13.716,6.271a126.778,126.778,0,0,0-4.03,16.615c-.582,3.232-1.078,6.583-1.509,9.913a23.789,23.789,0,0,0-.086-3.135c-.7-5.387-5.236-15.462-11.249-16.571a7.23,7.23,0,0,0-8.35,6.8c-.356,4.31,2.769,8.62,5.808,11.324s11.152,5.452,13.3,6.142c-.151,1.271-.323,2.554-.474,3.825-.733,6.142-1.444,12.272-2.317,18.252-.312,2.155-.69,4.181-1.077,6.249a19.905,19.905,0,0,0-.075-2.7c-.7-5.387-5.236-15.472-11.249-16.582a7.241,7.241,0,0,0-8.35,6.81c-.345,4.31,2.769,8.62,5.818,11.324s10.365,5.183,12.93,6c-.442,2.155-.894,4.224-1.422,6.249-.388,1.368-.668,2.715-1.142,4.073s-.862,2.694-1.293,4.019c-.916,2.532-1.853,5.14-2.812,7.542-.646,1.7-1.3,3.308-1.961,4.935.334-2.155.894-6.217.905-6.573a28.015,28.015,0,0,0-3.771-13.662,7.983,7.983,0,0,0-.1-1.605,7.241,7.241,0,0,0-8.846-6.142c-5.915,1.573-9.7,11.949-9.934,17.4,0,.323.183,3.836.356,6.045-.291-1.282-.571-2.532-.894-3.857-.614-2.607-1.315-5.2-2.047-7.995q-.614-1.982-1.228-4.04c-.377-1.358-.948-2.748-1.422-4.127-1.174-3.232-2.511-6.379-3.933-9.557,2.284-.549,10.376-2.607,13.63-5.107s6.67-6.54,6.637-10.861a7.23,7.23,0,0,0-7.812-7.4c-6.077.657-11.357,10.344-12.466,15.688-.065.334-.42,4.256-.582,6.465-.862-1.907-1.724-3.8-2.672-5.7-2.715-5.474-5.635-10.926-8.523-16.378-.884-1.67-1.746-3.351-2.618-5.021.819-.183,10.495-2.435,14.136-5.226,3.232-2.478,6.659-6.54,6.637-10.861a7.23,7.23,0,0,0-7.822-7.4c-6.077.657-11.357,10.344-12.456,15.688-.086.4-.593,6.055-.657,7.542-1.907-3.685-3.782-7.381-5.484-11.1a128.135,128.135,0,0,1-5.969-15.408c.377-.086,10.484-2.381,14.212-5.247,3.232-2.478,6.67-6.54,6.637-10.861a7.219,7.219,0,0,0-7.812-7.4c-6.077.657-11.357,10.344-12.456,15.688-.086.42-.636,6.465-.657,7.607-.086-.3-.226-.614-.312-.916a92.877,92.877,0,0,1-3.092-16.281c-.345-3.028-.5-5.958-.582-8.8,1.918-.226,10.71-1.4,14.352-3.61s7.348-5.764,7.79-10.064a7.241,7.241,0,0,0-6.95-8.221c-6.12,0-12.423,9.04-14.115,14.233-.086.28-.7,3.232-1.077,5.387,0-1.293-.065-2.618,0-3.847,0-4.622.3-8.857.593-12.606.172-2.155.388-4.051.593-5.851,1.778-1.218,8.846-6.206,11.022-9.773s3.857-8.512,2.273-12.52a7.241,7.241,0,0,0-9.967-4.094c-5.387,2.8-6.853,13.738-5.958,19.125.075.463,2.155,7.607,2.22,7.542l.108-.075c-.237,1.724-.474,3.577-.69,5.6-.377,3.75-.754,7.995-.862,12.639a125.264,125.264,0,0,0,.356,14.988,94.169,94.169,0,0,0,2.608,16.55v.194c-.959-1.519-3.793-5.646-4.04-5.948-3.577-4.127-12.93-10.01-18.532-7.618a7.241,7.241,0,0,0-3.232,10.279C586.288,260.275,591.266,262.139,595.307,262.775Z" transform="translate(-582.256 -182.453)" fill="#263238"/>
                            <path id="Tracé_6" data-name="Tracé 6" d="M692.8,232.241c.1.065,1.961-7.133,2.026-7.542.743-5.387-.98-16.3-6.465-18.963a7.23,7.23,0,0,0-9.837,4.364c-1.476,4.062.388,9.029,2.607,12.456C683.721,226.542,692.8,232.241,692.8,232.241Z" transform="translate(-574.905 -180.698)" fill="#263238"/>
                            <path id="Tracé_7" data-name="Tracé 7" d="M683.585,416.845H624.917L617.59,351.69h73.332Z" transform="translate(-579.585 -169.342)" fill="#fff" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_8" data-name="Tracé 8" d="M618.84,362.76l.711,6.314h69.217l.711-6.314Z" transform="translate(-579.488 -168.485)" fill="#263238"/>
                            <path id="Tracé_9" data-name="Tracé 9" d="M687.093,381.964l.711-6.314H620.29l.711,6.314Z" transform="translate(-579.376 -167.486)" fill="#263238"/>
                        </g>
                        <g id="Gears" transform="translate(55.307 32.895)">
                            <g id="Groupe_1" data-name="Groupe 1" opacity="0.3">
                                <path id="Tracé_10" data-name="Tracé 10" d="M177.868,110.654V91.82l-18.8-2.09a44.693,44.693,0,0,0-4.6-11.206l11.852-14.837L153.021,50.4,138.249,62.254a45.092,45.092,0,0,0-11.173-4.687l-2.09-18.877H106.162l-2.09,18.759A45.124,45.124,0,0,0,92.866,62.06L78.03,50.208,64.723,63.493,76.575,78.276A44.424,44.424,0,0,0,71.9,89.439L53,91.54v18.823l18.8,2.09a44.618,44.618,0,0,0,4.6,11.195L64.55,138.5,77.782,151.8,92.554,139.95a45.07,45.07,0,0,0,11.216,4.665l2.09,18.877h18.823l2.09-18.791a44.726,44.726,0,0,0,11.206-4.612l14.837,11.852L166.134,138.7l-11.852-14.772a44.662,44.662,0,0,0,4.676-11.173Zm-62.439,12.93a22.451,22.451,0,1,0,0-.022Z" transform="translate(-53 -31.062)" fill="none" stroke="#1747b5" stroke-width="1"/>
                                <path id="Tracé_11" data-name="Tracé 11" d="M243.617,73.427l-2.079-12.456-12.682.7a30.051,30.051,0,0,0-4.31-6.907l6.217-11.141L220.494,36.34l-8.469,9.46a30.094,30.094,0,0,0-7.919-1.918l-3.48-12.272L188.17,33.7l.7,12.671a30.05,30.05,0,0,0-6.907,4.31l-11.1-6.217-7.338,10.279,9.417,8.534a30.018,30.018,0,0,0-1.853,7.909l-12.272,3.48,2.09,12.456,12.671-.69a29.986,29.986,0,0,0,4.31,6.9l-6.206,11.141,10.279,7.338,8.48-9.46a30.46,30.46,0,0,0,7.909,1.864l3.48,12.262,12.456-2.08-.69-12.682a29.986,29.986,0,0,0,6.9-4.31l11.141,6.217,7.338-10.29-9.482-8.5a30.569,30.569,0,0,0,1.864-7.909ZM203.75,88.888a13.1,13.1,0,1,0-.043,0Z" transform="translate(-44.802 -31.61)" fill="none" stroke="#1747b5" stroke-width="1"/>
                            </g>
                        </g>
                        <g id="Device" transform="translate(111.874 85.842)">
                            <path id="Tracé_12" data-name="Tracé 12" d="M156.324,80.75H646.217a11.27,11.27,0,0,1,11.26,11.26V413.354H145V92.01a11.27,11.27,0,0,1,11.324-11.26Z" transform="translate(-102.44 -80.75)" fill="#1747b5" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_36" data-name="Rectangle 36" width="352.171" height="17.347" transform="translate(123.92 316.593)" fill="#263238" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_37" data-name="Rectangle 37" width="352.171" height="8.997" transform="translate(123.92 324.943)" fill="#fff" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_13" data-name="Tracé 13" d="M106.59,400.23s5.786,7.068,23.133,12.854H681.107s12.854-3.232,18.64-12.218Z" transform="translate(-105.416 -56)" fill="#263238" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_38" data-name="Rectangle 38" width="595.581" height="13.511" rx="1.89" transform="translate(0 331.57)" fill="#1747b5" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <circle id="Ellipse_6" data-name="Ellipse 6" cx="4.493" cy="4.493" r="4.493" transform="translate(294.224 5.56)" fill="#263238"/>
                            <rect id="Rectangle_39" data-name="Rectangle 39" width="470.854" height="266.092" transform="translate(63.398 25.978)" fill="#fff" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_40" data-name="Rectangle 40" width="470.854" height="16.108" transform="translate(63.398 25.978)" fill="#c9c9c9" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                        <g id="Table" transform="translate(23.22 442.926)">
                            <line id="Ligne_7" data-name="Ligne 7" x2="750.026" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                        <g id="Video" transform="translate(413.953 250.145)">
                            <rect id="Rectangle_41" data-name="Rectangle 41" width="194.472" height="109.88" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_42" data-name="Rectangle 42" width="194.472" height="13.21" transform="translate(0 96.67)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_43" data-name="Rectangle 43" width="194.472" height="3.534" transform="translate(0 101.508)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <circle id="Ellipse_7" data-name="Ellipse 7" cx="20.558" cy="20.558" r="20.558" transform="translate(77.718 28.715)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_14" data-name="Tracé 14" d="M493.632,280.148,467.18,264.88v30.546Z" transform="translate(-379.56 -230.789)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                        <g id="Picture" transform="translate(414.276 147.247)">
                            <rect id="Rectangle_44" data-name="Rectangle 44" width="193.977" height="91.8" transform="translate(0 0)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_15" data-name="Tracé 15" d="M386.16,228.2l70.014-54.6L494.068,194.8l44.963-39.823,41.105,26.333" transform="translate(-386.16 -136.404)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <circle id="Ellipse_8" data-name="Ellipse 8" cx="14.126" cy="14.126" r="14.126" transform="translate(11.572 11.518)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                        <g id="Chart" transform="translate(214.525 254.455)">
                            <rect id="Rectangle_45" data-name="Rectangle 45" width="14.126" height="102.769" transform="translate(0 0)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_46" data-name="Rectangle 46" width="14.126" height="56.524" transform="translate(20.558 46.256)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_47" data-name="Rectangle 47" width="14.126" height="40.47" transform="translate(41.105 62.31)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_48" data-name="Rectangle 48" width="14.126" height="72.578" transform="translate(61.664 30.191)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_49" data-name="Rectangle 49" width="14.126" height="65.51" transform="translate(82.211 37.259)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <rect id="Rectangle_50" data-name="Rectangle 50" width="14.126" height="14.126" transform="translate(102.769 88.643)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_8" data-name="Ligne 8" x2="40.47" transform="translate(125.891 7.715)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_9" data-name="Ligne 9" x2="40.47" transform="translate(125.891 21.205)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_10" data-name="Ligne 10" x2="40.47" transform="translate(125.891 34.684)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_11" data-name="Ligne 11" x2="40.47" transform="translate(125.891 48.174)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_12" data-name="Ligne 12" x2="40.47" transform="translate(125.891 61.664)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_13" data-name="Ligne 13" x2="40.47" transform="translate(125.891 75.153)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_14" data-name="Ligne 14" x2="40.47" transform="translate(125.891 88.643)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_15" data-name="Ligne 15" x2="40.47" transform="translate(125.891 102.133)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                        <g id="Text" transform="translate(212.973 153.421)">
                            <path id="Tracé_16" data-name="Tracé 16" d="M208.144,197.57l-8.814-54.1H205.6l5.818,38.875,7.273-38.67h5.387l7.348,38.875,5.678-39.08h6.142l-8.717,54.1h-5.474L221.515,157.5,213.9,197.57Z" transform="translate(-199.33 -143.47)" fill="#263238"/>
                            <line id="Ligne_16" data-name="Ligne 16" x2="112.057" transform="translate(58.711 2.812)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_17" data-name="Ligne 17" x2="112.057" transform="translate(58.711 14.697)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_18" data-name="Ligne 18" x2="112.057" transform="translate(58.711 26.581)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_19" data-name="Ligne 19" x2="112.057" transform="translate(58.711 38.466)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Ligne_20" data-name="Ligne 20" x2="112.057" transform="translate(58.711 50.35)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                        <g id="Code_3" data-name="Code 3" transform="translate(551.729 226.182)">
                            <path id="Tracé_17" data-name="Tracé 17" d="M585.479,211H520.356c-3.642,0-6.626,3.663-6.626,8.146v43.465c0,4.471,2.985,8.135,6.626,8.135h15.6l-10.2,22.487,27.206-22.487h32.518c3.642,0,6.616-3.663,6.616-8.135V219.156C592.094,214.674,589.12,211,585.479,211Z" transform="translate(-513.73 -211)" fill="#263238" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_18" data-name="Tracé 18" d="M540.6,253.289l-13.695-9.7v-5.129L540.6,228.69v5.183l-9.816,7.133,9.816,7.133Z" transform="translate(-512.709 -209.63)" fill="#1747b5"/>
                            <path id="Tracé_19" data-name="Tracé 19" d="M543.49,255.909l10.441-38.789h4.45L547.9,255.909Z" transform="translate(-511.425 -210.526)" fill="#1747b5"/>
                            <path id="Tracé_20" data-name="Tracé 20" d="M561.18,253.287v-5.129l9.87-7.176-9.87-7.09V228.71l13.749,9.7v5.129Z" transform="translate(-510.054 -209.628)" fill="#1747b5"/>
                        </g>
                        <g id="Code_2" data-name="Code 2" transform="translate(547.549 80.562)">
                            <path id="Tracé_21" data-name="Tracé 21" d="M581.534,75.85H516.476c-3.642,0-6.626,3.663-6.626,8.135v43.454c0,4.482,2.985,8.146,6.626,8.146h15.591l-10.2,22.476,27.217-22.476h32.507c3.642,0,6.626-3.663,6.626-8.146V83.985C588.16,79.513,585.176,75.85,581.534,75.85Z" transform="translate(-509.85 -75.85)" fill="#263238" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_22" data-name="Tracé 22" d="M536.675,118.118l-13.705-9.7V103.3l13.705-9.773V98.7l-9.816,7.187,9.816,7.144Z" transform="translate(-508.834 -74.48)" fill="#1747b5"/>
                            <path id="Tracé_23" data-name="Tracé 23" d="M539.56,120.789,550,82h4.45l-10.484,38.789Z" transform="translate(-507.548 -75.374)" fill="#1747b5"/>
                            <path id="Tracé_24" data-name="Tracé 24" d="M557.25,118.116V113l9.87-7.187-9.87-7.09V93.55l13.749,9.7v5.129Z" transform="translate(-506.178 -74.479)" fill="#1747b5"/>
                        </g>
                        <g id="Code_1" data-name="Code 1" transform="translate(291.596 192.781)">
                            <path id="Tracé_25" data-name="Tracé 25" d="M344.049,180H278.926c-3.642,0-6.626,3.663-6.626,8.135v43.476c0,4.482,2.985,8.146,6.626,8.146h15.6l-10.2,22.476,27.206-22.476h32.518c3.642,0,6.616-3.663,6.616-8.146V188.156C350.632,183.685,347.69,180,344.049,180Z" transform="translate(-272.3 -180)" fill="#263238" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_26" data-name="Tracé 26" d="M299.175,222.288l-13.695-9.7v-5.118l13.695-9.773v5.172L289.359,210l9.816,7.144Z" transform="translate(-271.279 -178.629)" fill="#1747b5"/>
                            <path id="Tracé_27" data-name="Tracé 27" d="M302.06,224.909,312.5,186.12h4.461l-10.495,38.789Z" transform="translate(-269.995 -179.526)" fill="#1747b5"/>
                            <path id="Tracé_28" data-name="Tracé 28" d="M319.75,222.286v-5.118l9.87-7.187-9.87-7.09V197.72l13.749,9.7v5.129Z" transform="translate(-268.624 -178.627)" fill="#1747b5"/>
                        </g>
                        <g id="Mug" transform="translate(159.933 368.182)">
                            <path id="Tracé_29" data-name="Tracé 29" d="M158.213,385.893h-.151c-.625,0-6.131-.657-7.348-4.31-.948-2.834-.97-10.775,1.228-13.285,2.015-2.3,5.118-1.185,6.465-.28a1.616,1.616,0,0,1-1.778,2.694s-1.638-1-2.263-.291c-1.077,1.207-1.433,7.65-.6,10.139.4,1.185,2.974,1.961,4.59,2.155a1.618,1.618,0,0,1-.151,3.232Z" transform="translate(-150.104 -340.919)" fill="#263238"/>
                            <rect id="Rectangle_51" data-name="Rectangle 51" width="19.394" height="23.823" transform="translate(7.194 24.469)" fill="#263238" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_30" data-name="Tracé 30" d="M161.251,363.761a10.107,10.107,0,0,1,1.153-7.6c2.3-3.685,6.907-4.375,6.67-10.775" transform="translate(-149.262 -342.589)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_31" data-name="Tracé 31" d="M172.672,353.26a35.668,35.668,0,0,1-3,4.375,8.8,8.8,0,0,0-1.605,5.517" transform="translate(-148.713 -341.979)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Tracé_32" data-name="Tracé 32" d="M174.26,349.923a14.707,14.707,0,0,0,.927-7.133" transform="translate(-148.232 -342.79)" fill="none" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="w-full text-blue-800 px-4 py-4">
                <h2 class="text-3xl text-center lg:text-left mb-4">{{ __('resume.index.about') }}</h2>
                <p class="text-xl">Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent. hi peragranter et dissimulanter honoratorum circulis adsistendo pervadendoque divites domus egentium habitu quicquid noscere poterant vel audire latenter intromissi per posticas in regiam nuntiabant, id observantes conspiratione concordi, ut fingerent quaedam et cognita duplicarent in peius, laudes vero supprimerent Caesaris, quas invitis conpluribus formido malorum inpendentium exprimebat.</p>
                <button class="inline-block text-sm font-bold px-4 py-4 leading-none border rounded text-white bg-blue-800 hover:border-transparent hover:bg-blue-900 mt-4">
                    {{ __('resume.index.contact') }}
                </button>
            </div>
        </div>
    </div>
    <div class="skills mt-20 sm:mt-16 lg:mt-28 m-auto">
        <h2 class="text-3xl text-blue-800 text-center mb-4">{{ __('resume.index.skills.title') }}</h2>
        <div class="flex text-center justify-around mt-16">
            <x-skill :icon="'fa-brands fa-php'" :skill="'php'"></x-skill>
            <x-skill :icon="'fa-brands fa-laravel'" :skill="'laravel'"></x-skill>
            <x-skill :icon="'fa-brands fa-symfony'" :skill="'symfony'"></x-skill>
            <x-skill :icon="'fa-brands fa-vuejs'" :skill="'vue'"></x-skill>
            <x-skill :icon="'fa-brands fa-node'" :skill="'node'"></x-skill>
        </div>
        <div class="flex text-center justify-around mt-8">
            <x-skill :icon="'fa-solid fa-infinity'" :skill="'cicd'"></x-skill>
            <x-skill :icon="'fa-brands fa-git'" :skill="'versions'"></x-skill>
            <x-skill :icon="'fa-brands fa-linux'" :skill="'linux'"></x-skill>
            <x-skill :icon="'fa-solid fa-code'" :skill="'code_review'"></x-skill>
            <x-skill :icon="'fa-solid fa-magnifying-glass-chart'" :skill="'static_analysis'"></x-skill>
        </div>
    </div>
    <div class="bg-blue-200 mt-20 sm:mt-16 lg:mt-28">
        <h2 class="text-3xl text-blue-800 text-center py-20 sm:py-16 lg:py-28">{{ __('resume.index.experiences') }}</h2>
        <ol class="items-center block lg:flex lg:justify-center sm:w-1/2 md:w-1/2 lg:w-full p-12 m-auto">
            <x-experience :experience="'Diplôme BTS Développement Web'" :time="'Juillet 2017'"></x-experience>
            <x-experience :experience="'Développeur chez Nameshield'" :time="'Novembre 2017'"></x-experience>
            <x-experience :experience="'Responsable d\'applications chez Nameshield'" :time="'Octobre 2020'"></x-experience>
            <x-experience :experience="'Développeur en freelance'" :time="'Depuis Mai 2023'"></x-experience>
        </ol>
    </div>
    <div class="w-full block md:flex lg:flex">
        <div class="w-full md:w-5/12 lg:w-5/12 bg-blue-800 p-6">
            <h2 class="text-3xl text-blue-200 text-center pb-10 pt-20 sm:pt-16 lg:pt-28">MC</h2>
            <p class="text-white pb-10 sm:pb-8 lg:pb-14">Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent. hi peragranter et dissimulanter honoratorum circulis adsistendo pervadendoque divites domus egentium habitu quicquid</p>
            <h2 class="text-3xl text-white text-center pb-10">ME SUIVRE</h2>
            <div class="text-center">
                <a class="text-3xl text-white pb-10" href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="w-full md:w-7/12 lg:w-7/12 p-6">
            <h2 class="text-3xl text-blue-800 text-center pb-10 pt-20 sm:pt-16 lg:pt-28">{{ __('resume.index.contact') }}</h2>
            <form class="lg:mx-auto lg:max-w-md " action="{{ route('resume.contact') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.name') }}</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="firstname" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.firstname') }}</label>
                    <input type="text" id="firstname" name="firstname" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.email') }}</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.phone') }}</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-500 text-sm font-bold mb-2">{{ __('global.message') }}</label>
                    <textarea id="message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('global.send') }}</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="bg-blue-900 text-center lg:text-left">
        <div class="text-white text-center p-4" style="background-color: rgba(0, 0, 0, 0.3);">
            <a class="hover:text-gray-200" href="#">{{ __('resume.index.legal') }}</a>
            |
            <a class="hover:text-gray-200" href="#">{{ __('resume.index.rgpd') }}</a>
        </div>
    </footer>
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
