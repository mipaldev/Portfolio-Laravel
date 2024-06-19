<aside>
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform duration-300 -translate-x-full bg-white dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <div class="p-3">
            <a href="/" class="inline-flex items-center">
                <img src="assets/img/logo.png" alt="" class="w-10 lg:w-12">
                <span
                    class="ml-3.5 lg:text-3xl text-2xl font-bold tracking-wide text-slate-900 dark:text-white">Valkyrie</span>
            </a>
        </div>
        <div class="flex flex-col justify-between py-4 overflow-y-auto" style=" height: calc(100% - 80px); ">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/"
                        class="flex items-center p-3 rounded-lg text-slate-500 hover:text-slate-700 dark:text-white hover:bg-slate-100 dark:hover:bg-gray-700 group">
                        <i class="text-xl fa-solid fa-house"></i>
                        <span class="ms-4">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/about"
                        class="flex items-center p-3 rounded-lg text-slate-500 hover:text-slate-700 dark:text-white hover:bg-slate-100 dark:hover:bg-gray-700 group">
                        <i class="text-xl fa-solid fa-user"></i>
                        <span class="ms-4">About</span>
                    </a>
                </li>
                <li>
                    <a href="/projects"
                        class="flex items-center p-3 rounded-lg text-slate-500 hover:text-slate-700 dark:text-white hover:bg-slate-100 dark:hover:bg-gray-700 group">
                        <i class="text-xl fa-solid fa-tag"></i>
                        <span class="ms-4">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="/contact"
                        class="flex items-center p-3 rounded-lg text-slate-500 hover:text-slate-700 dark:text-white hover:bg-slate-100 dark:hover:bg-gray-700 group">
                        <i class="text-2xl fa-solid fa-phone"></i>
                        <span class="ms-4">Portfolio</span>
                    </a>
                </li>
            </ul>

            <div>
                <button id="toggle-mode" class="w-full bg-slate-900 py-1.5 px-5 rounded-md">
                    <div>
                        <label for="toggle-mode"
                            class="flex items-center w-full h-12 text-xl bg-transparent">
                            <span class="flex items-center">
                                <i class="block mr-3 text-orange-500 fa-solid fa-sun dark:hidden"></i>
                                <i class="hidden mr-3 fa-solid fa-moon dark:block text-slate-200"></i>

                                <p class="text-base text-white whitespace-normal">Change Mode</p>
                            </span>
                        </label>
                        <input class="hidden" type="checkbox" id="toggle-mode">
                        </input>
                    </div>
                </button>
            </div>
        </div>
    </div>
</aside>
