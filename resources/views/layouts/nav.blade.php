<nav  x-data="{ open: false }">
    {{-- NAV Menu Start --}}
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

            <svg width="24" height="15" xmlns="http://www.w3.org/2000/svg" @click="isMobileMenuOpen = true"
                class="text-primary fill-current dark:text-white">
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
                        class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Info</a>
                </li>

                <li class="group relative mb-1 mr-6">
                    <div
                        class="group-hover:bg-yellow absolute bottom-0 left-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2">
                    </div>
                    <a href="/experiences"
                        class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Experience</a>
                </li>

                <li class="group relative mb-1 mr-6">
                    <div
                        class="group-hover:bg-yellow absolute bottom-0 left-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2">
                    </div>
                    <a href="/projects"
                        class="font-body text-primary group-hover:text-green dark:group-hover:text-secondary relative z-30 block px-2 text-lg font-medium transition-colors dark:text-white">Project</a>
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
{{-- NAV Menu End --}}
{{-- Mobile Menu Start --}}
<div class="pointer-events-none fixed inset-0 z-50 flex bg-black bg-opacity-80 opacity-0 transition-opacity lg:hidden"
    :class="isMobileMenuOpen ? 'opacity-100 pointer-events-auto' : ''">
    <div class="bg-green ml-auto w-2/3 p-4 md:w-1/3">
        <i class="bx bx-x absolute right-0 top-0 mr-4 mt-4 text-4xl text-white" @click="isMobileMenuOpen = false"></i>
        <ul class="mt-8 flex flex-col">

            <li class="">
                <a href="/" class="font-body mb-3 block px-2 text-lg font-medium text-white">Info</a>
            </li>

            <li class="">
                <a href="/experiences" class="font-body mb-3 block px-2 text-lg font-medium text-white">Experience</a>
            </li>

            <li class="">
                <a href="/projects" class="font-body mb-3 block px-2 text-lg font-medium text-white">Project</a>
            </li>

            <li class="">
                <a href="/contact" class="font-body mb-3 block px-2 text-lg font-medium text-white">Contact</a>
            </li>

        </ul>
    </div>
{{-- Mobile Menu End --}}

</nav>
