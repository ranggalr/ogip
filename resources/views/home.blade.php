@extends('layouts.ogip', ['footerColor' => 'bg-white', 'footerTextColor' => 'text-gray-900'])

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
        "> It's coming next year, be prepare!
                    </p>
                    <div class="flex justify-center w-full max-w-2xl gap-2 mx-auto mt-6">
                        <div class="mt-3 rounded-lg sm:mt-0">
                            <button class="
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
            "> See more </button>
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



<section class="md:overflow-x-scroll bg-ogip-1 h-screen md:pt-0 pt-2">
    <div class="flex justify-center mt-10">
        <span class="mb-8 text-xl font-bold tracking-widest text-gray-200 uppercase bg-ogip-2 py-2 px-4 rounded-3xl">
            Events </span>
    </div>
    <div class="container p-5 py-12 mx-auto md:p-20 max-w-7xl">
        <div class="flex flex-wrap mx-auto md:flex-nowrap">
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/VOC-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">VOC
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/Petroleum Insight-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Petroleum Insight
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/Social Activity-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Pascal
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/Company visit-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Virtual Company Visit
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/CEO Talk-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">CEO Talk
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/Grand Opening-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Grand Opening
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/Awarding-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Awarding Night
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Pre-event/OGIP Cup-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">OGIP Cup
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>



<section class="md:overflow-x-scroll bg-ogip-2 h-screen">
    <div class="flex justify-center mt-10">
        <span class="mb-8 text-xl font-bold tracking-widest text-gray-200 uppercase bg-ogip-3 py-2 px-4 rounded-3xl">
            Competitions </span>
    </div>
    <div class="container p-5 py-12 mx-auto md:p-20 max-w-7xl">
        <div class="flex flex-wrap mx-auto md:flex-nowrap">
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Smart Competition-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class=""><br />Smart Competition
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/ORD-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Oil Rig Design Competition
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Geothermal-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Geothermal Case Study Competition
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Paper-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Paper Poster Competition
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/POD-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Plan Of Development Competition
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="flex w-full">
                    <div
                        class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:hover:-translate-x-16 md:hover:-translate-y-8">
                        <img class="object-cover object-center w-full rounded-t-xl lg:h-80 md:h-36"
                            src="{{ asset('img/logo lomba/Simulasi reservoir-01.png') }}" alt="blog">
                        <div class="px-6 py-2">
                            <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                                <span class="">Reservoir Simulation Competition
                                </span></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>


<section>
    <div class="container px-5 py-24 mx-auto lg:px-16">
        <div class="flex flex-col w-full mb-8 text-center">
            <span class="mb-4 text-sm font-medium tracking-wide text-gray-500 uppercase">Our sponsors
            </span>
        </div>
        <div class="mx-auto text-center">
            <div class="grid grid-cols-5 gap-4 mx-auto lg:grid-cols-5">
                <div>
                    <img class="h-4 mx-auto lg:h-12"
                        src="https://d33wubrfki0l68.cloudfront.net/5a364f2e7cfeadd0f603cdfeda83f5cd0509770d/3f0ae/images/logos/logoone.svg"
                        alt="Figma">
                </div>
                <div>
                    <img class="h-4 mx-auto lg:h-12"
                        src="https://d33wubrfki0l68.cloudfront.net/ab0d1eeefb9cddb55f05f1601b2ae3fbae9317a9/5bfbe/images/logos/logotwo.svg"
                        alt="Framer">
                </div>
                <div>
                    <img class="h-4 mx-auto lg:h-12"
                        src="https://d33wubrfki0l68.cloudfront.net/2fea2d550675d7cf3bb77a515487bce6c086051b/951f5/images/logos/logothree.svg"
                        alt="Sketch ">
                </div>
                <div>
                    <img class="h-4 mx-auto lg:h-12"
                        src="https://d33wubrfki0l68.cloudfront.net/f9b8da8b1442382848d30275dc2d0337d14a04c9/dc8f4/images/logos/logofour.svg"
                        alt="Sketch ">
                </div>
                <div>
                    <img class="h-4 mx-auto lg:h-12"
                        src="https://d33wubrfki0l68.cloudfront.net/07ddf740e29509004147c6a83c09f299366546c9/03a26/images/logos/logofive.svg"
                        alt="Invision">
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
