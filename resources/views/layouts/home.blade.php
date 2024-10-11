<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Homepage | Atlas Template</title>

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
            <div class="flex items-center justify-between py-6 lg:py-10">
                <a href="/" class="flex items-center">
                    <span href="/" class="mr-2">
                        <img src="{{ asset('assets/img/logo.svg') }}" alt="logo" />
                    </span>
                    <p class="font-body text-primary hidden text-2xl font-bold dark:text-white lg:block">
                        Al Razi
                    </p>
                </a>
                <div class="flex items-center lg:hidden">
                    <i class="bx text-primary mr-8 cursor-pointer text-3xl dark:text-white" @click="themeSwitch()"
                        :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>

                    <svg width="24" height="15" xmlns="http://www.w3.org/2000/svg"
                        @click="isMobileMenuOpen = true" class="text-primary fill-current dark:text-white">
                        <g fill-rule="evenodd">
                            <rect width="24" height="3" rx="1.5" />
                            <rect x="8" y="6" width="16" height="3" rx="1.5" />
                            <rect x="4" y="12" width="20" height="3" rx="1.5" />
                        </g>
                    </svg>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex items-center">

                        <li class="group relative mb-1 mr-6">
                            <div
                                class="group-hover:bg-yellow absolute bottom-0 left-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2">
                            </div>
                            <a href="/"
                                class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Intro</a>
                        </li>

                        <li class="group relative mb-1 mr-6">
                            <div
                                class="group-hover:bg-yellow absolute bottom-0 left-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2">
                            </div>
                            <a href="/blog"
                                class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Blog</a>
                        </li>

                        <li class="group relative mb-1 mr-6">
                            <div
                                class="group-hover:bg-yellow absolute bottom-0 left-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2">
                            </div>
                            <a href="/uses"
                                class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Uses</a>
                        </li>

                        <li class="group relative mb-1 mr-6">
                            <div
                                class="group-hover:bg-yellow absolute bottom-0 left-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2">
                            </div>
                            <a href="/contact"
                                class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Contact</a>
                        </li>

                        <li>
                            <i class="bx text-primary cursor-pointer text-3xl dark:text-white" @click="themeSwitch()"
                                :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Header End --}}

        <div class="pointer-events-none fixed inset-0 z-50 flex bg-black bg-opacity-80 opacity-0 transition-opacity lg:hidden"
            :class="isMobileMenuOpen ? 'opacity-100 pointer-events-auto' : ''">
            <div class="bg-green ml-auto w-2/3 p-4 md:w-1/3">
                <i class="bx bx-x absolute right-0 top-0 mr-4 mt-4 text-4xl text-white"
                    @click="isMobileMenuOpen = false"></i>
                <ul class="mt-8 flex flex-col">

                    <li class="">
                        <a href="/" class="font-body mb-3 block px-2 text-lg font-medium text-white">Intro</a>
                    </li>

                    <li class="">
                        <a href="/blog" class="font-body mb-3 block px-2 text-lg font-medium text-white">Blog</a>
                    </li>

                    <li class="">
                        <a href="/uses" class="font-body mb-3 block px-2 text-lg font-medium text-white">Uses</a>
                    </li>

                    <li class="">
                        <a href="/contact"
                            class="font-body mb-3 block px-2 text-lg font-medium text-white">Contact</a>
                    </li>

                </ul>
            </div>
        </div>

        <div>
            {{-- Body Start --}}
            <div class="container mx-auto">
                {{-- Hello Start --}}
                <div class="border-grey-lighter border-b py-16 lg:py-20">
                    <div>
                        <img src="{{ asset('assets/img/author.png') }}" class="h-16 w-16" alt="author" />
                    </div>
                    <h1
                        class="font-body text-primary pt-3 text-4xl font-semibold dark:text-white md:text-5xl lg:text-6xl">
                        Hi, I’m Al Razi.
                    </h1>
                    <p class="font-body text-primary pt-3 text-xl font-light dark:text-white">
                        A software engineer and open-source advocate enjoying the sunny life in Barcelona, Spain.
                    </p>
                    <a href="/"
                        class="bg-secondary font-body hover:bg-green mt-12 block px-10 py-4 text-center text-xl font-semibold text-white transition-colors sm:inline-block sm:text-left sm:text-2xl">
                        Say Hello!
                    </a>
                </div>
                {{-- Hello End --}}

                {{-- Story Start --}}
                <div class="border-grey-lighter border-b py-16 lg:py-20">
                    <div class="flex items-center pb-6">
                        <img src="{{ asset('assets/img/icon-story.png') }}" alt="icon story" />
                        <h3 class="font-body text-primary ml-3 text-2xl font-semibold dark:text-white">
                            My Story
                        </h3>
                    </div>
                    <div>
                        <p class="font-body text-primary font-light dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Nibh mauris cursus
                            mattis molestie. Et leo duis ut diam. Sit amet tellus cras adipiscing
                            enim eu turpis. Adipiscing at in tellus integer feugiat.
                            <br />
                            <br />
                            Maecenas accumsan lacus vel facilisis. Eget egestas purus viverra
                            accumsan in nisl nisi scelerisque eu. Non tellus orci ac auctor augue
                            mauris augue neque gravida. Auctor augue mauris augue neque gravida in
                            fermentum et sollicitudin. Tempus urna et pharetra pharetra massa massa
                            ultricies mi quis. Amet mauris commodo quis imperdiet massa. Integer
                            vitae justo eget magna fermentum iaculis eu non.
                        </p>
                    </div>
                </div>
                {{-- Story End --}}

                {{-- Stories Start --}}
                <div class="py-16 lg:py-20">
                    <div class="flex items-center pb-6">
                        <img src="{{ asset('assets/img/icon-story.png') }}" alt="icon story" />
                        <h3 class="font-body text-primary ml-3 text-2xl font-semibold dark:text-white">
                            My Story
                        </h3>
                        <a href="/blog"
                            class="font-body text-green hover:text-secondary dark:text-green-light dark:hover:text-secondary flex items-center pl-10 italic transition-colors">
                            All posts
                            <img src="{{ asset('assets/img/long-arrow-right.png') }}" class="ml-3"
                                alt="arrow right" />
                        </a>
                    </div>
                    <div class="pt-8">
                        <div class="border-grey-lighter border-b pb-8">
                            <span
                                class="bg-green-light font-body text-green mb-4 inline-block rounded-full px-2 py-1 text-sm">category</span>
                            <a href="/post"
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Quis
                                hendrerit dolor magna eget est lorem ipsum dolor sit</a>
                            <div class="flex items-center pt-4">
                                <p class="font-body text-primary pr-2 font-light dark:text-white">
                                    July 19, 2020
                                </p>
                                <span class="font-body text-grey dark:text-white">//</span>
                                <p class="font-body text-primary pl-2 font-light dark:text-white">
                                    4 min read
                                </p>
                            </div>
                        </div>
                        <div class="border-grey-lighter border-b pb-8 pt-10">
                            <div class="flex items-center">
                                <span
                                    class="bg-grey-light font-body text-blue-dark mb-4 inline-block rounded-full px-2 py-1 text-sm">category</span>
                                <span
                                    class="bg-yellow-light font-body text-yellow-dark mb-4 ml-4 inline-block rounded-full px-2 py-1 text-sm">category</span>
                            </div>
                            <a href="/post"
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Senectus
                                et netus et malesuada fames ac turpis egestas integer</a>
                            <div class="flex items-center pt-4">
                                <p class="font-body text-primary pr-2 font-light dark:text-white">
                                    June 30, 2020
                                </p>
                                <span class="font-body text-grey dark:text-white">//</span>
                                <p class="font-body text-primary pl-2 font-light dark:text-white">
                                    5 min read
                                </p>
                            </div>
                        </div>
                        <div class="border-grey-lighter border-b pb-8 pt-10">
                            <span
                                class="bg-blue-light font-body text-blue mb-4 inline-block rounded-full px-2 py-1 text-sm">category</span>
                            <a href="/post"
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Vulputate
                                ut pharetra sit amet aliquam id diam maecenas ultricies</a>
                            <div class="flex items-center pt-4">
                                <p class="font-body text-primary pr-2 font-light dark:text-white">
                                    June 26, 2020
                                </p>
                                <span class="font-body text-grey dark:text-white">//</span>
                                <p class="font-body text-primary pl-2 font-light dark:text-white">
                                    3 min read
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Stories End --}}

                {{-- Project Start --}}
                <div class="pb-16 lg:pb-20">
                    <div class="flex items-center pb-6">
                        <img src="{{ asset('assets/img/icon-project.png') }}" alt="icon story" />
                        <h3 class="font-body text-primary ml-3 text-2xl font-semibold dark:text-white">
                            My Projects
                        </h3>
                    </div>
                    <div>

                        <a href=" / "
                            class="border-grey-lighter mb-6 flex items-center justify-between border px-4 py-4 sm:px-6">
                            <span class="w-9/10 pr-8">
                                <h4 class="font-body text-primary text-lg font-semibold dark:text-white">
                                    TailwindCSS
                                </h4>
                                <p class="font-body text-primary font-light dark:text-white">
                                    Rapidly build modern websites without ever leaving your HTML.
                                </p>
                            </span>
                            <span class="w-1/10">
                                <img src="{{ asset('assets/img/chevron-right.png') }}" class="mx-auto"
                                    alt="chevron right" />
                            </span>
                        </a>

                        <a href=" / "
                            class="border-grey-lighter mb-6 flex items-center justify-between border px-4 py-4 sm:px-6">
                            <span class="w-9/10 pr-8">
                                <h4 class="font-body text-primary text-lg font-semibold dark:text-white">
                                    Maizzle
                                </h4>
                                <p class="font-body text-primary font-light dark:text-white">
                                    Framework for Rapid Email Prototyping
                                </p>
                            </span>
                            <span class="w-1/10">
                                <img src="{{ asset('assets/img/chevron-right.png') }}" class="mx-auto"
                                    alt="chevron right" />
                            </span>
                        </a>

                        <a href=" / "
                            class="border-grey-lighter mb-6 flex items-center justify-between border px-4 py-4 sm:px-6">
                            <span class="w-9/10 pr-8">
                                <h4 class="font-body text-primary text-lg font-semibold dark:text-white">
                                    Alpine.js
                                </h4>
                                <p class="font-body text-primary font-light dark:text-white">
                                    Think of it like Tailwind for JavaScript.
                                </p>
                            </span>
                            <span class="w-1/10">
                                <img src="{{ asset('assets/img/chevron-right.png') }}" class="mx-auto"
                                    alt="chevron right" />
                            </span>
                        </a>

                        <a href=" / "
                            class="border-grey-lighter mb-6 flex items-center justify-between border px-4 py-4 sm:px-6">
                            <span class="w-9/10 pr-8">
                                <h4 class="font-body text-primary text-lg font-semibold dark:text-white">
                                    PostCSS
                                </h4>
                                <p class="font-body text-primary font-light dark:text-white">
                                    A tool for transforming CSS with JavaScript
                                </p>
                            </span>
                            <span class="w-1/10">
                                <img src="{{ asset('assets/img/chevron-right.png') }}" class="mx-auto"
                                    alt="chevron right" />
                            </span>
                        </a>

                    </div>
                </div>
                {{-- Project End --}}
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
                        ©2020 Al Razi.
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
