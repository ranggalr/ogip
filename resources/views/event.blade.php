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
                <img class="object-cover object-center mx-auto rounded-lg" alt="hero" src="{{ asset('img/logo lomba/Geothermal-01.png') }}">
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
      "> Geothermal competition</h1>
          <p class="mb-8 text-base leading-relaxed text-left text-gray-300"> asdasdas </p>
          <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
            <div class="mt-3 rounded-lg sm:mt-0">
              <a href="{{ route('registration') }}" class="
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



  <section>
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
      "> Huhh? </h1>
          <p class="mb-8 text-base leading-relaxed text-left text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, architecto voluptatibus. Nulla ut architecto placeat illo, odit earum dignissimos voluptate officiis laboriosam facilis, vitae qui id, blanditiis veniam nobis quae!</p>
          <dl class="grid grid-cols-1 gap-12 md:grid-cols-2">
            <div>
              <dt class="
            inline-flex
            items-center
            justify-center
            flex-shrink-0
            w-12
            h-12
            mb-5
            text-blue-400
            rounded-full
            bg-blue-50
          ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 icon icon-tabler icon-tabler-aperture" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="12" r="9"></circle>
                  <line x1="3.6" y1="15" x2="14.15" y2="15"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(72 12 12)"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(144 12 12)"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(216 12 12)"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(288 12 12)"></line>
                </svg>
              </dt>
              <dd class="flex-grow">
                <h2 class="
              mb-3
              text-lg
              font-medium
              tracking-tighter
              text-neutral-600
            "> samting </h2>
                <p class="text-base leading-relaxed text-gray-400"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ut iure deleniti libero maiores aut, perspiciatis sit nesciunt tempore pariatur fugit soluta tempora. Eum, nam doloribus sed voluptatum ipsum corrupti! </p>
                <a href="#" class="
              inline-flex
              items-center
              mt-6
              font-semibold
              text-blue-500
              md:mb-2
              lg:mb-0
              hover:text-neutral-600
            " title="read more"> Learn More <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                  </svg>
                </a>
              </dd>
            </div>
            <div>
              <dt class="
            inline-flex
            items-center
            justify-center
            flex-shrink-0
            w-12
            h-12
            mb-5
            text-blue-400
            rounded-full
            bg-blue-50
          ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 icon icon-tabler icon-tabler-aperture" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="12" r="9"></circle>
                  <line x1="3.6" y1="15" x2="14.15" y2="15"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(72 12 12)"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(144 12 12)"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(216 12 12)"></line>
                  <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(288 12 12)"></line>
                </svg>
              </dt>
              <dd class="flex-grow">
                <h2 class="
              mb-3
              text-lg
              font-medium
              tracking-tighter
              text-neutral-600
            "> samting </h2>
                <p class="text-base leading-relaxed text-gray-400"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cupiditate saepe fuga quasi eaque. Accusantium reprehenderit laudantium harum numquam libero totam quos doloremque laborum veniam asperiores ea, itaque, officia voluptatum. </p>
                <a href="#" class="
              inline-flex
              items-center
              mt-6
              font-semibold
              text-blue-500
              md:mb-2
              lg:mb-0
              hover:text-neutral-600
            " title="read more"> Learn More <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                  </svg>
                </a>
              </dd>
            </div>
          </dl>
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
