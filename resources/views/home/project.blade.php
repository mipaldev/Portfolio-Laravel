<section class="relative dark:bg-gray-900" id="project">
    <span class="absolute floating right-[45%] top-[16%] z-10 hidden lg:block">
        <svg fill="#f05252" height="80px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <g>
                    <g>
                        <path
                            d="M460.8,256c-18.62,0-34.782,10.095-43.75,24.994l-110.387-32.469c0.145-1.784,0.538-3.499,0.538-5.325 c0-30.908-22.025-56.755-51.2-62.703v-79.915c22.025-5.726,38.4-25.6,38.4-49.382c0-28.228-22.963-51.2-51.2-51.2 C214.972,0,192,22.972,192,51.2c0,23.782,16.384,43.657,38.4,49.382v79.915c-29.09,5.931-51.046,31.659-51.174,62.447 l-82.116,16.427C88.798,242.295,71.433,230.4,51.2,230.4C22.972,230.4,0,253.372,0,281.6c0,28.228,22.972,51.2,51.2,51.2 c27.247,0,49.382-21.453,50.91-48.333l82.116-16.427c6.938,16.401,20.625,29.107,37.47,35.166l-4.224,29.602 C168.124,332.885,128,373.043,128,422.4c0,49.408,40.192,89.6,89.6,89.6c49.408,0,89.6-40.192,89.6-89.6 c0-40.61-27.332-74.607-64.444-85.564l4.292-30.029c22.784-1.382,42.206-14.626,52.403-33.732l110.319,32.444 c-0.017,0.58-0.171,1.109-0.171,1.681c0,28.228,22.972,51.2,51.2,51.2c28.237,0,51.2-22.972,51.2-51.2S489.037,256,460.8,256z M51.2,307.2c-14.14,0-25.6-11.46-25.6-25.6c0-14.14,11.46-25.6,25.6-25.6c14.14,0,25.6,11.46,25.6,25.6 C76.8,295.74,65.34,307.2,51.2,307.2z M217.6,51.2c0-14.14,11.46-25.6,25.6-25.6s25.6,11.46,25.6,25.6 c0,14.14-11.46,25.6-25.6,25.6S217.6,65.34,217.6,51.2z M281.6,422.4c0,35.345-28.655,64-64,64c-35.345,0-64-28.655-64-64 s28.655-64,64-64C252.945,358.4,281.6,387.055,281.6,422.4z M243.2,281.6c-21.205,0-38.4-17.195-38.4-38.4s17.195-38.4,38.4-38.4 s38.4,17.195,38.4,38.4S264.405,281.6,243.2,281.6z M460.8,332.8c-14.14,0-25.6-11.46-25.6-25.6s11.46-25.6,25.6-25.6 c14.14,0,25.6,11.46,25.6,25.6S474.94,332.8,460.8,332.8z">
                        </path>
                    </g>
                </g>
            </g>
        </svg>
    </span>

    <div class="grid max-w-screen-xl gap-6 px-5 pt-16 pb-24 mx-auto md:pt-24 lg:grid-cols-2 lg:pt-48 lg:pb-64">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-64 overflow-hidden rounded-lg md:h-96" id="carousel-wrapper">
                @foreach ($projects as $project)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="assets/img/projects/{{ $project['image'] }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 border top-1/2 left-1/2 border-slate-200"
                            alt="...">
                    </div>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button"class="hidden" data-carousel-next> </button>
        </div>

        <script>
            const nextButton = document.querySelector('[data-carousel-next]');

            setInterval(() => {
                nextButton.click();
            }, 2500);
        </script>


        <div class="relative flex items-center justify-center lg:justify-end">
            <div class="sm:max-w-md">
                <h2 class="mt-8 text-4xl font-bold dark:text-white">Explore My Latest Projects</h2>
                <p class="mt-4 text-sm leading-relaxed text-gray-700 dark:text-gray-400">Explore my portfolio to see my latest projects.
                    From innovative web apps to cutting-edge software, each project reflects my passion for development.
                    Get inspired by my creations and see how I bring ideas to life.</p>
                <a class="relative inline-flex mt-8 border px-5 py-2.5 text-sm font-bold text-red-500 uppercase bg-white hover:bg-red-100 border-red-500 group focus:outline-none dark:bg-transparent dark:hover:text-white transition"
                    href="/projects">
                    Explore More Projects
                </a>
            </div>
        </div>
    </div>
</section>
