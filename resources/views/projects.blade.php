@extends('master')

@section('title', 'Projects')

@section('content')
<section class="dark:bg-gray-900">
        <x-section-header></x-section-header>

        <div class="max-w-screen-xl px-5 py-6 mx-auto md:py-12 lg:py-16">
            <div class="sm:max-w-xl">
                <h2 class="text-4xl font-bold md:text-5xl dark:text-white">Innovative Projects with Real-World Impact</h2>
                <p class="mt-6 leading-relaxed text-gray-700 dark:text-gray-400">
                    Discover my meticulously crafted projects designed for scalability and efficiency. Experience the power
                    of innovative solutions that tackle real-world problems and deliver exceptional performance. Explore how
                    I use cutting-edge technologies to bring ideas to life.
                </p>
            </div>

            <div class="relative grid grid-cols-1 gap-6 lg:gap-12 lg:grid-cols-2 mt-14">
                @foreach ($projects as $project)
                    <div class="overflow-hidden border-2 border-gray-100 rounded-t-xl group/card dark:border-gray-700">
                        <div class="relative overflow-hidden ounded-t-xl">
                            <img src="assets/img/projects/{{ $project['image'] }}" alt=""
                                class="transition duration-500 ease-in-out -z-10 group-hover/card:scale-110">
                            <div class="absolute top-0 bottom-0 left-0 right-0 hidden transition duration-500 group-hover/card:block backdrop-blur-sm rounded-t-xl"
                                style="background-color: rgba(0, 0, 0, 0.25);"></div>
                            <button
                                class="absolute hidden -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 group-hover/card:block">
                                <a class="px-5 py-2 text-sm font-semibold text-white bg-gray-700 rounded-full opacity-60"
                                    href="{{ $project['link'] }}" target="_blank">Visit site <span class="ml-1.5"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </button>
                        </div>
                        <div class="h-full p-3 pb-7 dark:bg-gray-800">
                            <div class="flex mt-3 space-x-3">
                                @foreach (json_decode($project->tools) as $tool)
                                    <img src="assets/svg/{{ $tool }}.svg" class="h-7" alt="">
                                @endforeach
                            </div>
                            <h2 class="mt-4 mb-2 text-lg font-semibold text-slate-700 md:text-xl dark:text-white">
                                {{ $project['title'] }}
                            </h2>
                            <p class="text-xs text-slate-500 md:text-sm dark:text-slate-400">
                                {{ $project['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
