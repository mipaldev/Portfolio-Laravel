@extends('master')

@section('title', 'About')

@section('content')
    <section class="dark:bg-gray-900">
        <x-section-header></x-section-header>

        <div class="relative grid max-w-screen-xl grid-cols-1 px-5 pt-1 mx-auto lg:py-16 lg:gap-12 lg:grid-cols-3">
            <div
                class="w-full dark:bg-white p-5 pb-12 z-10 border border-gray-200 lg:max-h-[658.25px] lg:max-w-sm rounded-xl lg:px-12 lg:border-red-600">
                <div class="px-8 py-16 md:py-24 lg:px-5 lg:py-8">
                    <img src="assets/img/about-ilust.png"
                        class="lg:max-w-[218px] max-w-[240px] md:max-w-[270px] w-full mx-auto" alt="laracon" />
                </div>
                <h3 class="mt-8 text-xs font-bold text-red-700 uppercase ">junior Web developer</h3>
                <h2 class="mt-3 text-3xl font-bold">Muhammad Ipal</h2>
                <p class="max-w-xl mt-4 text-sm leading-relaxed text-gray-700">
                    Junior web developer and software engineering student. Passionate about crafting innovative, quality
                    websites.
                </p>
                <div class="flex max-w-sm gap-x-4">
                    <a class="relative inline-flex whitespace-nowrap mt-8 border justify-center w-full py-2.5 text-sm font-bold text-white uppercase bg-red-500 hover:bg-red-400 transition duration-200 border-red-500"
                        href="/contact">
                        Get in touch
                    </a>

                    <button
                        class="relative whitespace-nowrap transition duration-200 inline-flex mt-8 border justify-center w-full py-2.5 text-sm font-bold bg-white uppercase text-red-500 hover:bg-red-100 border-red-500 clipboard"
                        type="button" data-clipboard-text="muhamadipal@smkwikrama.sch.id">
                        <i class="mr-2 fa-solid fa-copy"></i>copy email

                        <span
                            class="absolute py-0.5 px-2 transition rounded-full  text-[11px] text-white -translate-x-1/2 tip left-1/2 bg-slate-800 -top-7 font-medium hidden">Copied
                            to clipboard</span>
                    </button>
                </div>

                <div class="flex gap-2 mt-8">
                    <a href="https://youtube.com/@muhamadipalsch?si=0irS20RUpxBtfVf-"
                        class="flex items-center justify-center w-10 h-10 text-xl text-center transition bg-transparent border rounded-lg border-slate-200 text-slate-600 ">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://github.com/Muhammad-Ipal"
                        class="flex items-center justify-center w-10 h-10 text-xl text-center transition bg-transparent border rounded-lg border-slate-200 text-slate-600 ">
                        <i class="fa-brands fa-github"></i>
                    </a><a href="https://www.linkedin.com/"
                        class="flex items-center justify-center w-10 h-10 text-xl text-center transition bg-transparent border rounded-lg border-slate-200 text-slate-600 ">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="relative col-span-2 mt-12 lg:mt-0">
                <h1 class="text-3xl font-bold lg:text-4xl text-slate-900 dark:text-white">From Student to Developer</h1>
                <p class="max-w-screen-sm mt-4 text-sm leading-relaxed text-gray-700 dark:text-gray-400">
                    Uncover the story behind my journey as a software engineering student and passionate junior web
                    developer. Learn more about my skills and experiences.
                </p>
                <div class="grid max-w-[600px] grid-cols-3 gap-10 mt-2 ">
                    <div>
                        <span class="block mb-3 text-2xl font-semibold text-red-500 lg:text-4xl">1</span>
                        <span class="block text-sm text-slate-600 dark:text-gray-300 md:text-base">Year of Experience</span>
                    </div>
                    <div>
                        <span class="block mb-3 text-2xl font-semibold text-red-500 lg:text-4xl">4+</span>
                        <span class="block text-sm text-slate-600 dark:text-gray-300 md:text-base">Project Completed</span>
                    </div>
                    <div>
                        <span class="block mb-3 text-2xl font-semibold text-red-500 lg:text-4xl">3</span>
                        <span class="block text-sm text-slate-600 dark:text-gray-300 md:text-base">Certificates</span>
                    </div>
                </div>

                {{-- Timeline --}}

                <ol class="relative border-gray-200 mt-14 border-s dark:border-gray-700">
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-red-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-red-900">
                            <i class="text-sm text-red-700 fa-solid fa-briefcase "></i>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                            SMK WIKRAMA BOGOR
                            <span
                                class="bg-red-100 text-red-800 text-sm font-medium me-2 px-4 py-0.5 rounded dark:bg-red-900 dark:text-red-300 ms-3">Now
                            </span>
                        </h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            <i class="text-xs fa-solid fa-code"></i> Software Engineering
                        </time>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                            At SMK Wikrama Bogor, I am specializing in Software Engineering and beginning my journey in the
                            field of programming, exploring various languages and development methodologies.
                        </p>
                        <a href="/projects"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-red-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            My Projects</a>
                    </li>
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-red-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-red-900">
                            <i class="text-sm text-red-700 fa-solid fa-briefcase "></i>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">SMPN 2 MEGAMENDUNG</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            2020 - 2023
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components
                            I continued to develop myself, exploring interests and talents, and deepening my understanding
                            of the world around me.
                        </p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-red-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-red-900">
                            <i class="text-sm text-red-700 fa-solid fa-briefcase "></i>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">SD NEGERI GADOG 03</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            2014 - 2020
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            enthusiastically learned the basics of education, exploring various knowledge and forming a
                            strong foundation for the future.
                        </p>
                    </li>
                    <li class="ms-6">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-red-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-red-900">
                            <i class="text-sm text-red-700 fa-solid fa-briefcase "></i>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">PAUD TPQ AL-FURQONIYYAH</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            2012 - 2014
                        </time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                            I began to explore the world of learning with joy, discovering wonders around me, and
                            experiencing the warmth of a fun learning environment.
                        </p>
                    </li>
                </ol>

                {{-- Tools & Skill --}}

                <div class="relative mt-14">
                    <h2 class="text-2xl font-semibold text-slate-900">Tools & Skill</h2>

                    <div class="grid grid-cols-5 gap-3 mt-5 md:grid-cols-7 lg:grid-cols-8 place-items-center place">
                        @foreach ($technologies as $category => $items)
                            @foreach ($items as $technology)
                                <div
                                    class="relative flex items-center justify-center w-full h-20 overflow-hidden rounded-md shrink-0">
                                    <span class="absolute inset-0 w-full h-full bg-slate-100 dark:bg-gray-800"></span>
                                    <img src="assets/svg/{{ $technology['icon'] }}" class="relative w-8 h-8"
                                        alt="laracon" />
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>

                {{-- Certificates --}}

                <div class="relative mt-14">
                    <h2 class="text-2xl font-semibold text-slate-900">Certificates</h2>

                    <div class="mt-5 space-y-3">
                        <div
                            class="relative flex items-center justify-between w-full p-6 transition rounded-lg dark:bg-gray-800 bg-slate-100 hover:bg-slate-200">
                            <div class="flex">
                                <div class="relative flex items-center justify-center w-12 h-12 overflow-hidden rounded-md">
                                    <span class="absolute inset-0 w-full h-full bg-white dark:bg-gray-900"></span>
                                    <img src="https://pbs.twimg.com/profile_images/1544955480816369664/tbdn5Cc8_400x400.jpg"
                                        class="relative w-8 h-8" alt="laracon" />
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-base font-medium md:text-lg text-slate-600 dark:text-slate-200">Belajar Membuat Front-End
                                        Web Untuk
                                        Pemula</h3>
                                    <span class="text-sm text-slate-500 md:text-base dark:text-slate-400">Dicoding, November 2023</span>
                                </div>
                            </div>

                            <button
                                class="px-4 py-1 text-sm transition bg-white rounded-sm dark:bg-slate-900 dark:text-white text-slate-700 hover:text-red-500 whitespace-nowrap md:text-base">
                                <a href="https://www.dicoding.com/certificates/N9ZO5861DPG5" target="_blank"> View
                                    &rarr;</a>
                            </button>
                        </div>


                        <div
                            class="relative flex items-center justify-between w-full p-6 transition rounded-lg dark:bg-gray-800 bg-slate-100 hover:bg-slate-200">
                            <div class="flex">
                                <div class="relative flex items-center justify-center w-12 h-12 overflow-hidden rounded-md">
                                    <span class="absolute inset-0 w-full h-full bg-white dark:bg-gray-900"></span>
                                    <img src="https://pbs.twimg.com/profile_images/1544955480816369664/tbdn5Cc8_400x400.jpg"
                                        class="relative w-8 h-8" alt="laracon" />
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-base font-medium md:text-lg text-slate-600 dark:text-slate-200">Belajar Dasar Pemrograman
                                        Web</h3>
                                    <span class="text-sm text-slate-500 md:text-base dark:text-slate-400">Dicoding, October 2023</span>
                                </div>
                            </div>

                            <button
                                class="px-4 py-1 text-sm transition bg-white rounded-sm dark:bg-slate-900 dark:text-white text-slate-700 hover:text-red-500 whitespace-nowrap md:text-base">
                                <a href="https://www.dicoding.com/certificates/GRX52E8RVX0M" target="_blank"> View
                                    &rarr;</a>
                            </button>
                        </div>

                        <div
                            class="relative flex items-center justify-between w-full p-6 transition rounded-lg dark:bg-gray-800 bg-slate-100 hover:bg-slate-200">
                            <div class="flex">
                                <div
                                    class="relative flex items-center justify-center w-12 h-12 overflow-hidden rounded-md">
                                    <span class="absolute inset-0 w-full h-full bg-white dark:bg-gray-900"></span>
                                    <img src="https://media.licdn.com/dms/image/C4E0BAQGLKj3JHcof0w/company-logo_200_200/0/1630639684997/free_code_camp_logo?e=2147483647&v=beta&t=HCCfUkLJTs0zcfS0j9sxAuK87SxqcqCa7bm8puCpLr8"
                                        class="relative w-8 h-8" alt="laracon" />
                                </div>
                                <div class="ml-5">
                                    <h3 class="text-base font-medium md:text-lg text-slate-600 dark:text-slate-200">Responsive Web Design</h3>
                                    <span class="text-sm text-slate-500 md:text-base dark:text-slate-400">FreeCodeCamp, October 2023</span>
                                </div>
                            </div>

                            <button
                                class="px-4 py-1 text-sm transition bg-white rounded-sm dark:bg-slate-900 dark:text-white text-slate-700 hover:text-red-500 whitespace-nowrap md:text-base">
                                <a href="https://www.freecodecamp.org/certification/valkyriedev/responsive-web-design"
                                    target="_blank"> View
                                    &rarr;</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
