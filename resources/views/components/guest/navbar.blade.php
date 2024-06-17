<header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-7">
    <nav class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 mx-auto"
        aria-label="Global">
        <div class="md:col-span-3">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold">HANDYMAN</a>
            <!-- End Logo -->
        </div>

        <!-- Button Group -->
        <div class="flex items-center gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white">
                        Sign in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth

                <a href="{{ url('/add-job') }}" type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-brightRed hover:bg-brightRedLight transition disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-brightRedLight">
                        Post a job
                    </a>
            @endif

            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700"
                    data-hs-collapse="#navbar-collapse-with-animation"
                    aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- End Button Group -->

        <!-- Collapse -->
        <div id="navbar-collapse-with-animation"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
                <div>
                    <a class="relative inline-block text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-brightRed dark:text-white"
                        href="/" aria-current="page">Home</a>
                </div>
                <div>
                    <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                        href="#">Services</a>
                </div>
                <div>
                    <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                        href="#">About</a>
                </div>
                <div>
                    <a class="inline-block text-black hover:text-gray-600 dark:text-white dark:hover:text-neutral-300"
                        href="#">Contact</a>
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>