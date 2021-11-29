<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? 'OGIP 2022' }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
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
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.grand-opening') }}">Grand Opening</a>
                            <a class="block px-4 py-2 mt-2 text-sm text-ogip-2 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline"
                                href="{{ route('event.awarding-night') }}">Awarding Night</a>
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


    <footer aria-labelledby="footer-heading">
        <div class="
      px-5
      py-12
      mx-auto
      {{ $footerColor ?? 'bg-gray-50' }}
      max-w-full
      sm:px-6
      md:flex md:items-center md:justify-between
      lg:px-20
    ">
          <div class="flex justify-center mb-8 space-x-6 md:order-last md:mb-0">
            <a href="https://www.tiktok.com/@hmtm.ogip" class="{{ $footerTextColor ?? 'text-gray-400' }} hover:text-gray-300">
              <span class="sr-only">Tiktok</span>
              <img src="{{ asset('img/tik-tok.png') }}" class="w-6 h-6" alt="Tiktok">
            </a>
            <a href="https://www.instagram.com/ogip_2022/" class="{{ $footerTextColor ?? 'text-gray-400' }} hover:text-gray-300">
              <span class="sr-only">Instagram</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="https://line.me/ti/p/~@ogip" class="{{ $footerTextColor ?? 'text-gray-400' }} hover:text-gray-300">
              <span class="sr-only">Line@</span>
              <img src="{{ asset('img/line.png') }}" class="w-6 h-6" alt="Line@">
            </a>
            <a href="https://www.linkedin.com/company/ogip-upn-v-yogyakarta/" class="{{ $footerTextColor ?? 'text-gray-400' }} hover:text-gray-300">
              <span class="sr-only">LinkedIn</span>
              <svg class="h-6 w-6"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />  <rect x="2" y="9" width="4" height="12" />  <circle cx="4" cy="4" r="2" /></svg>
            </a>
            <a href="mailto:hmtm.ogip@upnyk.ac.id" class="{{ $footerTextColor ?? 'text-gray-400' }} hover:text-gray-300">
              <span class="sr-only">Email</span>
              <img src="{{ asset('img/email.png') }}" class="w-6 h-6" alt="Email">
            </a>
          </div>
          <div class="mt-8 md:mt-0 md:order-1">
            <span class="mt-2 text-sm font-light {{ $footerTextColor ?? 'text-gray-300' }}"> Copyright © 2020 - 2021 <a href="https://ogipupnyk.com" class="mx-2 text-wickedblue {{ $footerTextColor ?? 'text-gray-300' }}" rel="noopener noreferrer">OGIP 2022</a>. </span>
          </div>
        </div>
    </footer>


          <!-- This example requires Tailwind CSS v2.0+
    -->



    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
