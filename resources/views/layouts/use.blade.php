<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Uses | Atlas Template</title>

    <meta property="og:title" content="Uses | Atlas Template" />

    <meta property="og:locale" content="en_US" />

    <link rel="canonical" href="https://atlas.tailwindmade.com/uses" />

    <meta property="og:url" content="https://atlas.tailwindmade.com/uses" />

    <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />

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

    <link crossorigin="anonymous" href="/assets/styles/main.min.css" media="screen" rel="stylesheet" />

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
        <div class="container mx-auto">
            <div class="flex items-center justify-between py-6 lg:py-10">
                <a href="/" class="flex items-center">
                    <span href="/" class="mr-2">
                        <img src="/assets/img/logo.svg" alt="logo" />
                    </span>
                    <p class="font-body text-primary hidden text-2xl font-bold dark:text-white lg:block">
                        John Doe
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
            <div class="container mx-auto">
                <div class="py-16 lg:py-20">
                    <div>
                        <img src="/assets/img/icon-uses.png" alt="icon uses" />
                    </div>
                    <h1
                        class="font-body text-primary pt-5 text-4xl font-semibold dark:text-white md:text-5xl lg:text-6xl">
                        /uses
                    </h1>
                    <div class="pr-2 pt-3">
                        <span class="font-body text-primary text-xl font-light dark:text-white">
                            Inspired by
                            <a href="https://uses.tech/" target="_blank" class="border-green border-b">
                                <span
                                    class="text-green hover:text-secondary dark:text-green-light dark:hover:text-secondary font-medium">Wes
                                    Bos</span>
                                and his project,
                                <span
                                    class="text-green hover:text-secondary dark:text-green-light dark:hover:text-secondary font-medium">uses.tech</span>.
                            </a>
                        </span>
                    </div>

                    <div class="pt-16 lg:pt-20">
                        <h3 class="font-body text-primary pb-8 text-2xl font-semibold dark:text-white">
                            Computer + Workspace
                        </h3>
                        <ul class="list-disc pl-10">
                            <li class="font-body text-primary text-lg font-light dark:text-white">
                                <span class="font-medium">Computer:</span>
                                I use a 2019 16"
                                <a href="/"
                                    class="text-green hover:text-secondary dark:text-green-light dark:hover:text-secondary font-medium underline">MacBook
                                    Pro</a>
                                (i9/32GB/512gb) for everything (work + personal). The physical escape
                                key and fixed keyboard is amazing.
                            </li>
                            <li class="font-body text-primary pt-5 text-lg font-light dark:text-white">
                                <span class="font-medium">Chair:</span>
                                When I sit, I sit on an
                                <a href="/"
                                    class="text-green hover:text-secondary dark:text-green-light dark:hover:text-secondary font-medium underline">Herman
                                    Miller Mirra 2</a>, but I stand almost 100% of the time, so the chair doesn’t do me
                                much good.
                            </li>
                            <li class="font-body text-primary pt-5 text-lg font-light dark:text-white">
                                <span class="font-medium">Desk:</span>
                                My desk is a
                                <a href="/"
                                    class="text-green hover:text-secondary dark:text-green-light dark:hover:text-secondary font-medium underline">Fully
                                    Jarvis standing desk</a>
                                (which I love) with the Bamboo top (which I don't recommend). If
                                you're looking for a great sit-stand desk, I highly recommend Jarvis.
                                Also, purchase directly from Fully vs. Amazon. Fully's customer
                                support is incredible.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div
                class="border-grey-lighter flex flex-col items-center justify-between border-t py-10 sm:flex-row sm:py-12">
                <div class="mr-auto flex flex-col items-center sm:flex-row">
                    <a href="/" class="mr-auto sm:mr-6">
                        <img src="/assets/img/logo.svg" alt="logo" />
                    </a>
                    <p class="font-body text-primary pt-5 font-light dark:text-white sm:pt-0">
                        ©2020 John Doe.
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

    <script src="/assets/js/main.js"></script>

</body>

</html>
