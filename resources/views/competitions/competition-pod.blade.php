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
                <img class="object-cover object-center mx-auto rounded-lg" alt="hero" src="{{ asset('img/logo lomba/POD-01.png') }}">
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
          <span class="mb-8 text-xs font-bold tracking-widest text-ogip-3 uppercase"> Competition </span>
          <h1 class="
        mb-8
        text-4xl
        font-bold
        leading-none
        tracking-tighter
        text-gray-200
        md:text-7xl
        lg:text-5xl
      "> International Plan of Development Competition</h1>
          <p class="mb-8 text-base leading-relaxed text-left text-gray-300"> DESIGNING BREAKTHROUGH STRATEGIC, INNOVATIVE AND COMPETITIVE   INTEGRATED FIELD DEVELOPMENT PLAN TO CATCH ONE MILLION  BARREL PRODUCTION TARGET </p>
          <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
            <div class="mt-3 rounded-lg sm:mt-0">
              <a href="{{ route('competition.plan-of-development.registration') }}" class="
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
              <a href="{{ asset('Invitation Letter OGIP.pdf') }}" class="
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
          "> Download inlet </a>
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
          <p class="mb-8 text-base leading-relaxed text-left text-gray-500">A competition where all of the participants will be competing as a team to create an economic and efficient plan to develop oil & gas field which need a creative strategic from the beginning of the exploration until the abandonment based on the data given.
            <br><span class=" font-bold">Things to prepare before filling the form :</span><br>
            1.Screenshot to proof that you have upload a twibbon on your personal instagram feeds and tag @ogip2022 , the caption and twibbon can be downloaded here https://bit.ly/TwibbonOGIP2022????(each team member must upload the twibbon)
            <br>
            2. Scanned documents of ID / Passport for each member of your team
            <br>
            3. Scanned documents of Student ID for each member of your team
            <br>
            ??

            Please compile these pictures above in one Folder:
            <br>
            Format name of Folder : Competition_TeamName
            <br>
            Example : Smart Competiton_Aquifer99
            <br>
            ??

            *Upload the Folder to YOUR OWN GOOGLE DRIVE LINK
            <br>
            ??
            *Make sure that the link is accessible for ogip 2022's committees to see
            <br>
            *Copy and Paste the gdrige link on the registration form that you will fill
            <br>
            *You will get notification email, if you already success registering in OGIP 2022
          </p>
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
