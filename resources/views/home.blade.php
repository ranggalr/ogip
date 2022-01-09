@extends('layouts.ogip', ['footerColor' => 'bg-white', 'footerTextColor' => 'text-gray-700'])

@section('body')

<section class="w-full h-screen flex bg-cover bg-center"
    style="background-image: url('{{ asset('img/bg-hero.svg') }}')">
    <div class="
  relative
  items-center
  w-full
  px-5
  py-12
  m-auto
  md:px-12
  lg:px-16
  max-w-7xl
  lg:py-24
">
        <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="text-center">
                    <img src="{{ asset('img/logo ogip.png') }}" class="w-96 h-56" alt="">
                    <p class="
          max-w-xl
          mx-auto
          mt-8
          text-base
          leading-relaxed
          text-white
        "> What are you waiting for? Sign up yourself now!
                    </p>
                    <div class="flex justify-center w-full max-w-2xl gap-2 mx-auto mt-6">
                        <div class="mt-3 rounded-lg sm:mt-0">
                            <a href="#events" class="
              items-center
              block
              px-5
              py-4
              text-base
              font-medium
              text-center text-white
              transition
              duration-500
              ease-in-out
              transform
              bg-ogip-3
              lg:px-10
              rounded-xl
              hover:bg-ogip-1
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-blue-500
            "> See more </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="h-screen flex justify-center md:my-0 my-10">
    <div class="px-4 py-12 m-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
        <div class="flex flex-wrap items-center mx-auto max-w-7xl">
            <div class="w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                <div>
                    <div class="relative w-full max-w-lg">
                        <div class="
            absolute
            top-0
            rounded-full
            bg-violet-300
            -left-4
            w-72
            h-72
            mix-blend-multiply
            filter
            blur-xl
            opacity-70
            animate-blob
          "></div>
                        <div class="
            absolute
            rounded-full
            bg-fuchsia-300
            -bottom-24
            right-20
            w-72
            h-72
            mix-blend-multiply
            filter
            blur-xl
            opacity-70
            animate-blob
            animation-delay-4000
          "></div>
                        <div class="relative">
                            <img class="object-cover object-center mx-auto rounded-lg" alt="hero"
                                src="{{ asset('img/logo ogip.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="
      flex flex-col
      items-start
      mt-12
      mb-16
      text-left
      lg:flex-grow lg:w-1/2 lg:pl-6
      xl:pl-24
      md:mb-0
      xl:mt-0
    ">
                <span class="mb-8 text-xs font-bold tracking-widest text-ogip-3 uppercase"> Coming Soon </span>
                <h1 class="
        mb-8
        text-4xl
        font-bold
        leading-none
        tracking-tighter
        text-ogip-2
        md:text-7xl
        lg:text-5xl
      "> We're pleased to welcome you</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-gray-900"> The greatest event all the time!</p>
                <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
                    <div class="mt-3 rounded-lg sm:mt-0">
                        <button class="
            items-center
            block
            px-10
            py-4
            text-base
            font-medium
            text-center text-white
            transition
            duration-500
            ease-in-out
            transform
            bg-ogip-3
            rounded-xl
            hover:bg-ogip-1
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-blue-500
          "> Check our events </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- component -->




<section class="bg-ogip-1" id="events">
    <div class="relative items-center w-full px-5 py-12 mx-auto  md:px-12 lg:px-24 max-w-7xl">
        <div class="pb-5 border-b border-white">
            <h3 class="text-lg font-medium leading-6 text-gray-200"> Our events </h3>
        </div>
        <div class="grid w-full grid-cols-1 gap-6 mx-auto mt-12 lg:grid-cols-3">
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/VOC-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    Video Of OGIP </h1>
                <div class="mt-4">
                    <a href="{{ route('event.voc') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/Petroleum Insight-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    Petroleum Insight </h1>
                <div class="mt-4">
                    <a href="{{ route('event.petroleum-insight') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/CEO Talk-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    CEO Talk </h1>
                <div class="mt-4">
                    <a href="{{ route('event.ceo-talk') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/Social Activity-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    Petroleum Act for Social </h1>
                <div class="mt-4">
                    <a href="{{ route('event.pascal') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/Company visit-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    Virtual Company Visit </h1>
                <div class="mt-4">
                    <a href="{{ route('event.vcc') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/Grand Opening-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    Grand Opening </h1>
                <div class="mt-4">
                    <a href="{{ route('event.grand-opening') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/Awarding-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    Awarding Night </h1>
                <div class="mt-4">
                    <a href="{{ route('event.awarding-night') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Pre-event/OGIP Cup-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Events </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    OGIP Cup </h1>
                <div class="mt-4">
                    <a href="#"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="bg-ogip-1">
    <div class="relative items-center w-full px-5 py-12 mx-auto  md:px-12 lg:px-24 max-w-7xl">
        <div class="pb-5 border-b border-white">
            <h3 class="text-lg font-medium leading-6 text-gray-200"> Our competitions </h3>
        </div>
        <div class="grid w-full grid-cols-1 gap-6 mx-auto mt-12 lg:grid-cols-3">
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Smart Competition-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Competitions </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    International Smart Competition </h1>
                <div class="mt-4">
                    <a href="{{ route('competition.smart-competition') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/ORD-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Competitions </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    International Oil Rig Design Competition </h1>
                <div class="mt-4">
                    <a href="{{ route('competition.oil-rig-design') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Geothermal-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Competitions </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    International Geothermal Case Study Competition </h1>
                <div class="mt-4">
                    <a href="{{ route('competition.geothermal') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Paper-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Competitions </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    International Paper and Poster Competition </h1>
                <div class="mt-4">
                    <a href="{{ route('competition.paper-poster') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/POD-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Competitions </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    International Plan of Development </h1>
                <div class="mt-4">
                    <a href="{{ route('competition.plan-of-development') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
            <div class="p-6 bg-ogip-2 rounded-xl">
                <img class="object-contain object-center w-full mb-8  lg:h-48 md:h-36 rounded-xl"
                    src="{{ asset('img/logo lomba/Simulasi reservoir-01.png') }}" alt="blog">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-ogip-5 uppercase "> Competitions </h2>
                <h1
                    class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter  text-gray-200 lg:text-3xl">
                    International Reservoir Simulation Competition </h1>
                <div class="mt-4">
                    <a href="{{ route('competition.reservoir-simulation') }}"
                        class="inline-flex items-center mt-4 font-semibold text-gray-200  lg:mb-0 hover:text-neutral-600"
                        title="read more"> Read More » </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section>
    <div class="container px-5 py-24 mx-auto lg:px-16">
      <div class="flex flex-col w-full mb-8 text-center">
        <span class="mb-4 text-sm font-medium tracking-wide text-gray-500 uppercase"> Organized by </a>
        </span>
      </div>
      <div class="mx-auto text-center">
        <div class="grid grid-cols-4 gap-4 mx-auto lg:grid-cols-4">
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/HMTM UPNVY.png') }}" alt="HMTM">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/IATMI UPNVY.png') }}" alt="IATMI">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/SPE UPNVY SC.png') }}" alt="SPE ">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/API UPNVY.png') }}" alt="API ">
          </div>
        </div>
      </div>
    </div>
  </section>
<section>
    <div class="container px-5 mx-auto lg:px-16">
      <div class="flex flex-col w-full mb-8 text-center">
        <span class="mb-4 text-sm font-medium tracking-wide text-gray-500 uppercase"> Supported by </a>
        </span>
      </div>
      <div class="mx-auto text-center">
        <div class="grid grid-cols-5 gap-4 mx-auto lg:grid-cols-5">
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/Logo UPN Yogyakarta.png') }}" alt="UPNVY">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/SPE JAVA 1.png') }}" alt="SPE JAVA">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/IATMI PUSAT.png') }}" alt="IATMI PUSAT">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/1200px-Logo_of_SKK_Migas.svg.png') }}" alt="SKK MIGAS">
          </div>
          <div>
            <img class="h-4 mx-auto lg:h-40" src="{{ asset('img/Logo Kementerian Energi dan Sumber Daya Mineral (ESDM) (PNG-1080p) - FileVector69.png') }}" alt="KESDM">
          </div>
        </div>
      </div>
    </div>
  </section>











@endsection
