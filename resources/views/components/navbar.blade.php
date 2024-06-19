<header class="absolute top-0 w-full ">
    <nav class="relative z-10 text-gray-700 main-header">
        <div
            class="relative w-full py-3 mx-auto transition duration-200 bg-white dark:lg:bg-transparent dark:bg-neutral-950 max-w-screen-2xl lg:bg-transparent lg:py-6">
            <div class="flex items-center justify-between max-w-screen-xl px-5 mx-auto">
                <div class="flex-1">
                    <a href="/" class="inline-flex items-center">
                        <img src="assets/img/logo.png" alt="" class="w-10 lg:w-12">
                        <span
                            class="ml-3.5 lg:text-3xl text-2xl font-bold tracking-wide text-slate-900 dark:text-white">Valkyrie</span>
                    </a>
                </div>

                <ul class="relative items-center justify-center hidden gap-10 text-slate-700 dark:text-white lg:flex">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#project">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>

                <div class="items-center justify-end flex-1 hidden gap-5 lg:flex">
                    <div>
                        <label for="toggle-mode"
                            class="flex items-center justify-center w-12 h-12 text-3xl bg-transparent ">
                            <span>
                                <i class="block text-orange-500 fa-solid fa-sun dark:hidden"></i>
                                <i class="hidden fa-solid fa-moon dark:block text-slate-200"></i>
                            </span>
                        </label>
                        <input class="hidden" type="checkbox" id="toggle-mode">
                        </input>
                    </div>

                    <a href="contact"
                        class="px-5 py-3.5 transition  text-base font-semibold hover:bg-slate-700 rounded-lg bg-slate-900 dark:bg-slate-700 text-white dark:hover:bg-slate-800">
                        <span>Let's Talk</span>
                        <i class="ml-2 fa-regular fa-comments"></i>
                    </a>
                </div>

                {{-- ----  Hamburger Menu  ----- --}}

                <button class="block text-3xl text-slate-900 dark:text-white lg:hidden" type="button"
                    data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>

            </div>
        </div>
    </nav>
</header>
