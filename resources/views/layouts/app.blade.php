<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>infoAlRazi</title>

    <meta property="og:title" content="Homepage | Atlas Template" />

    <meta property="og:locale" content="en_US" />

    <link rel="canonical" href="https://atlas.tailwindmade.com/" />

    <meta property="og:url" content="https://atlas.tailwindmade.com/" />

    <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <meta property="og:site_name" content="Atlas Template" />

    <meta property="og:image" content="https://atlas.tailwindmade.com/assets/img/social.jpg" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:site" content="@tailwindmade" />

    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />

    <link as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="preload" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    <link crossorigin="anonymous" href="{{ asset('assets/styles/main.min.css') }}" media="screen" rel="stylesheet" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/atom-one-dark.min.css" />

    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <!--Alpine Js V3-->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body x-data="global()" x-init="themeInit()"
    :class="isMobileMenuOpen ? 'max-h-screen overflow-hidden relative' : ''" class="dark:bg-primary">

    <div id="main">
        {{-- Header Start --}}
        <div class="container mx-auto">
            @include('layouts.nav')
        </div>
        {{-- Header End --}}

        <div>
            {{-- Body Start --}}
            <div class="container mx-auto">
                {{-- Content Start --}}
                @yield('content')
                {{-- Content End --}}
            </div>
            {{-- Body End --}}
        </div>
        {{-- Footer Start --}}
        <div class="container mx-auto">
            <div
                class="border-grey-lighter flex flex-col items-center justify-between border-t py-10 sm:flex-row sm:py-12">
                <div class="mr-auto flex flex-col items-center sm:flex-row">
                    <a href="/" class="mr-auto sm:mr-6">
                        <img src="{{ asset('assets/img/logo.svg') }}" alt="logo" />
                    </a>
                    <p class="font-body text-primary pt-5 font-light dark:text-white sm:pt-0">
                        ©2024 Al Razi.
                    </p>
                </div>
                <div class="mr-auto flex items-center pt-5 sm:mr-0 sm:pt-0">

                    <a href="https://github.com/ " target="_blank">
                        <i
                            class="text-primary hover:text-secondary dark:hover:text-secondary bx bxl-github pl-5 text-4xl transition-colors dark:text-white"></i>
                    </a>

                    <a href="https://codepen.io/ " target="_blank">
                        <i
                            class="text-primary hover:text-secondary dark:hover:text-secondary bx bxl-codepen pl-5 text-4xl transition-colors dark:text-white"></i>
                    </a>

                    <a href="https://www.linkedin.com/ " target="_blank">
                        <i
                            class="text-primary hover:text-secondary dark:hover:text-secondary bx bxl-linkedin pl-5 text-4xl transition-colors dark:text-white"></i>
                    </a>

                </div>
            </div>
        </div>

    </div>
    {{-- Footer End --}}
    <script src="{{ asset('assets//js/main.js') }}"></script>

</body>

</html>
