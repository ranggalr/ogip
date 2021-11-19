@extends('layouts.ogip')

@section('body')


<section class="bg-cover h-screen" style="background-image: url('{{ asset('img/bg-hero.svg') }}')">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
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
                <img class="object-cover object-center mx-auto rounded-lg" alt="hero" src="{{ asset('img/logo lomba/Pre-event/Company visit-01.png') }}">
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
          <span class="mb-8 text-xs font-bold tracking-widest text-ogip-3 uppercase"> Event </span>
          <h1 class="
        mb-8
        text-4xl
        font-bold
        leading-none
        tracking-tighter
        text-gray-200
        md:text-7xl
        lg:text-5xl
      "> Virtual Company Visit</h1>
          <p class="mb-8 text-base leading-relaxed text-left text-gray-300"> PREPARE OUR KNOWLEDGE TO THE  WORLD OF OIL AND GAS INDUSTRIES </p>
          <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
            <div class="mt-3 rounded-lg sm:mt-0">
              <a  class="
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
          "> Register now </a>
            </div>
            <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
              <button class="
            items-center
            block
            px-10
            py-3.5
            text-base
            font-medium
            text-center text-gray-200
            transition
            duration-500
            ease-in-out
            transform
            border-2 border-ogip-1
            shadow-md
            rounded-xl
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-gray-500
          "> Download inlet </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="details">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
      <div class="flex flex-wrap items-center mx-auto max-w-7xl">
        <div class="
      flex flex-col
      items-start
      mb-16
      text-left
      lg:flex-grow lg:w-1/2 lg:pr-24
      md:mb-0
    ">
          <span class="mb-8 text-xs font-bold tracking-widest text-ogip-3 uppercase"> Information </span>
          <h1 class="
        mb-8
        text-4xl
        font-bold
        leading-none
        tracking-tighter
        text-neutral-600
        md:text-7xl
        lg:text-5xl
      "> Details </h1>
          <p class="mb-8 text-base leading-relaxed text-left text-gray-500">Bring knowledge  to the participants about the company structures, regulations, work programs, achievement, and etc.</p>
        </div>
        <div class="w-full mt-12 lg:w-5/6 lg:max-w-lg rounded-xl xl:mt-0">
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
                <img class="object-cover object-center mx-auto rounded-lg" alt="hero" src="{{ asset('img/question.png') }}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection
