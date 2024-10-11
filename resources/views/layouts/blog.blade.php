<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Blog | Atlas Template</title>

    <meta property="og:title" content="Blog | Atlas Template" />

    <meta property="og:locale" content="en_US" />

    <link rel="canonical" href="https://atlas.tailwindmade.com/blog" />

    <meta property="og:url" content="https://atlas.tailwindmade.com/blog" />

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
                {{-- Blog Start --}}
                <div class="py-16 lg:py-20">
                    <div>
                        <img src="/assets/img/icon-blog.png" alt="icon envelope" />
                    </div>

                    <h1
                        class="font-body text-primary pt-5 text-4xl font-semibold dark:text-white md:text-5xl lg:text-6xl">
                        Blog
                    </h1>

                    <div class="pt-3 sm:w-3/4">
                        <p class="font-body text-primary text-xl font-light dark:text-white">
                            Articles, tutorials, snippets, rants, and everything else. Subscribe for
                            updates as they happen.
                        </p>
                    </div>

                    <form class="flex flex-col py-12 sm:flex-row">
                        <input type="email" id="subscribe" placeholder="Drop that email here…"
                            class="border-primary bg-grey-lightest font-body text-primary placeholder-primary focus:border-secondary focus:ring-secondary dark:border-secondary w-full border px-5 py-4 font-light transition-colors focus:outline-none focus:ring-2 sm:w-1/2" />
                        <button type="submit"
                            class="bg-secondary font-body hover:bg-green mt-5 px-10 py-4 text-xl font-semibold text-white sm:mt-0 md:text-2xl">
                            Subscribe
                        </button>
                    </form>

                    <div class="pt-8 lg:pt-12">
                        <div class="border-grey-lighter border-b pb-8">
                            <span
                                class="bg-green-light font-body text-green mb-4 inline-block rounded-full px-2 py-1 text-sm">category</span>
                            <a href="/post"
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Vulputate
                                ut pharetra sit amet aliquam id diam maecenas ultricies</a>
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
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Diam
                                sit amet nisl suscipit adipiscing bibendum est ultricies
                                integer</a>
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
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">In
                                eu mi bibendum neque egestas congue quisque egestas diam</a>
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
                        <div class="border-grey-lighter border-b pb-8 pt-10">
                            <span
                                class="bg-green-light font-body text-green mb-4 inline-block rounded-full px-2 py-1 text-sm">category</span>
                            <a href="/post"
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Elit
                                eget gravida cum sociis natoque penatibus et magnis dis</a>
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
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Ut
                                tellus elementum sagittis vitae et leo duis ut diam</a>
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
                                class="font-body text-primary hover:text-green dark:hover:text-secondary block text-lg font-semibold transition-colors dark:text-white">Etiam
                                tempor orci eu lobortis elementum nibh tellus molestie nunc</a>
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

                    <div class="flex pt-8 lg:pt-16">
                        <span
                            class="border-secondary font-body text-secondary cursor-pointer border-2 px-3 py-1 font-medium">1</span>
                        <span
                            class="border-primary font-body text-primary hover:border-secondary hover:text-secondary dark:border-green-light dark:hover:border-secondary dark:hover:text-secondary ml-3 cursor-pointer border-2 px-3 py-1 font-medium transition-colors dark:text-white">2</span>
                        <span
                            class="border-primary font-body text-primary hover:border-secondary hover:text-secondary dark:border-green-light dark:hover:border-secondary dark:hover:text-secondary ml-3 cursor-pointer border-2 px-3 py-1 font-medium transition-colors dark:text-white">3</span>
                        <span
                            class="border-primary font-body text-primary hover:border-secondary hover:text-secondary dark:border-green-light dark:hover:border-secondary dark:hover:text-secondary group ml-3 flex cursor-pointer items-center border-2 px-3 py-1 font-medium transition-colors dark:text-white">Next
                            <i
                                class="bx bx-right-arrow-alt text-primary group-hover:text-secondary ml-1 transition-colors dark:text-white"></i></span>
                    </div>
                </div>
                {{-- Blog End --}}
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
