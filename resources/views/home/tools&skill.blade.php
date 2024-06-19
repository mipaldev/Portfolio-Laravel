<section class="relative dark:bg-slate-900">

    <div class="max-w-screen-xl px-5 pt-16 pb-24 mx-auto md:pt-24 lg:pt-28">
        <h2 class="max-w-5xl mx-auto text-4xl font-bold text-center md:text-5xl dark:text-white">
            Leveraging Frameworks and Cutting-Edge Tools for Innovation.
        </h2>
        <div class="mt-16">
            @foreach ($technologies as $category => $items)
                <h3 class="mt-5 mb-2 dark:text-slate-50">{{ $category }}s</h3>
                <ul class="relative grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($items as $technology)
                        <li>
                            <div class="flex items-center p-4 border border-gray-200 sm:justify-center border-opacity-60 dark:bg-gray-800 dark:border-gray-700">
                                <div
                                    class="relative flex items-center justify-center w-12 h-12 overflow-hidden rounded-md shrink-0">
                                    <span class="absolute inset-0 w-full h-full bg-slate-100 dark:bg-gray-900"></span>
                                    <img src="assets/svg/{{ $technology['icon'] }}" class="relative w-8 h-8 "
                                        alt="laracon" loading="lazy" />
                                </div>
                                <div class="ml-4 leading-5">
                                    <div class="dark:text-white">{{ $technology['title'] }}</div>
                                    <div class="mt-1 text-sm text-gray-700 dark:text-slate-400 ">
                                        {{ $technology['tagline'] }}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>

</section>
