<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? 'OGIP 2022' }}</title>
</head>

<body>
    @routes
    <div class="container w-full max-w-full">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between lg:justify-start">
                <a href="/"
                    class="text-lg font-bold tracking-tighter text-ogip-2 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8">
                    OGIP 2022 </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" style="display: none"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col items-center flex-grow hidden pb-4 border-ogip-2 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2">
                <a class="px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                    href="{{ route('home') }}">Home</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-ogip-2 md:w-auto md:inline md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline">
                        <span>Events</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
                        style="display: none;">
                        <div class="px-2 py-2 bg-white rounded-md shadow">
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.voc') }}">VOC</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.petroleum-insight') }}">Petroleum Insight</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.vcc') }}">Virtual Company Visit</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.pascal') }}">Pascal</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.ceo-talk') }}">CEO Talk</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.ogip-cup') }}">OGIP Cup</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-ogip-2 md:w-auto md:inline md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline">
                        <span>Competitions</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-60"
                        style="display: none;">
                        <div class="px-2 py-2 bg-white rounded-md shadow">
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('competition.smart-competition') }}">International Smart Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('competition.oil-rig-design') }}">International Oil Rig Design
                                Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('competition.geothermal') }}">International Geothermal Case Study
                                Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('competition.paper-poster') }}">International Paper and Poster
                                Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('competition.plan-of-development') }}">International Plan of Development
                                Competition</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('competition.reservoir-simulation') }}">International Reservoir
                                Simulation Competition</a>
                        </div>
                    </div>
                </div>
                <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
                    <button
                        class="items-center block px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-ogip-3 rounded-xl hover:bg-ogip-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        HMTM </button>
                </div>
            </nav>
        </div>
    </div>

    @yield('body')


    <footer class="{{ $footerColor ?? 'bg-gray-50' }}" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-16">
            <div class="flex flex-wrap items-baseline lg:justify-center">
                <span class="mt-2 text-sm font-light {{ $footerTextColor ?? 'text-gray-700' }}"> Copyright © 2021 <a
                        href="https://ogipupnyk.com" class="mx-2 text-wickedblue hover:text-gray-300"
                        rel="noopener noreferrer">OGIP</a></span>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
