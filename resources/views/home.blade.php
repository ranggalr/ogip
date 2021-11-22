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





<section>
    <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
      <div class="relative mx-auto max-w-7xl">
        <div class="grid max-w-lg gap-5 mx-auto lg:grid-cols-3 lg:max-w-none">
          <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
            <div class="flex-shrink-0">
              <img class="object-cover w-full h-48" src="https://d33wubrfki0l68.cloudfront.net/d75073109edbac6e4c4e3e3e15cdee9f18b2ffe5/bf256/images/ogtwitter.png" alt="">
            </div>
            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
              <div class="flex-1">
                <a href="#" class="block mt-2">
                  <p class="text-xl font-semibold text-neutral-600"> Boost your conversion rate </p>
                  <p class="mt-3 text-base text-gray-300"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum. </p>
                </a>
              </div>
              <div class="flex items-center mt-6">
                <div class="flex-shrink-0">
                  <a href="https://twitter.com/Mike_Andreuzza">
                    <span class="sr-only">Michael Andreuzza</span>
                    <img class="w-10 h-10 rounded-full" src="https://d33wubrfki0l68.cloudfront.net/2f76102fd18a4e095eaed7a836a3f2183a982a4d/91dd4/images/avatar.jpg" alt="">
                  </a>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-neutral-600">
                    <a href="https://twitter.com/Mike_Andreuzza" class="hover:underline"> Michaerl Andreuzza</a>
                  </p>
                  <div class="flex space-x-1 text-sm text-gray-300">
                    <time datetime="2020-03-16"> Mar 16, 2020 </time>
                    <span aria-hidden="true"> · </span>
                    <span> 6 min read </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
            <div class="flex-shrink-0">
              <img class="object-cover w-full h-48" src="https://wickedpopups.com/images/ogTwitter.png" alt="">
            </div>
            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
              <div class="flex-1">
                <a href="https://twitter.com/g_perales" class="block mt-2">
                  <p class="text-xl font-semibold text-neutral-600"> How to use search engine optimization to drive sales </p>
                  <p class="mt-3 text-base text-gray-300"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium. </p>
                </a>
              </div>
              <div class="flex items-center mt-6">
                <div class="flex-shrink-0">
                  <a href="https://twitter.com/g_perales">
                    <span class="sr-only">Gabriel Perales</span>
                    <img class="w-10 h-10 rounded-full" src="https://pbs.twimg.com/profile_images/1442898475218194432/61p-BNsg_400x400.jpg" alt="">
                  </a>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-neutral-600">
                    <a href="#" class="hover:underline"> Gabriel Perales </a>
                  </p>
                  <div class="flex space-x-1 text-sm text-gray-300">
                    <time datetime="2020-03-10"> Mar 10, 2020 </time>
                    <span aria-hidden="true"> · </span>
                    <span> 4 min read </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
            <div class="flex-shrink-0">
              <img class="object-cover w-full h-48" src="https://www.wickedtemplates.com/images/opengraph/openGraphTwitter.png" alt="">
            </div>
            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
              <div class="flex-1">
                <a href="#" class="block mt-2">
                  <p class="text-xl font-semibold text-neutral-600"> Improve your customer experience </p>
                  <p class="mt-3 text-base text-gray-300"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic. </p>
                </a>
              </div>
              <div class="flex items-center mt-6">
                <div class="flex-shrink-0">
                  <a href="https://twitter.com/wickedlabsHQ">
                    <span class="sr-only">Wicked Labs</span>
                    <img class="w-10 h-10 rounded-full" src="https://pbs.twimg.com/profile_images/1426761460357738499/LtQow-mk_400x400.jpg" alt="">
                  </a>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-neutral-600">
                    <a href="https://twitter.com/wickedlabsHQ" class="hover:underline"> Wicked Labs </a>
                  </p>
                  <div class="flex space-x-1 text-sm text-gray-300">
                    <time datetime="2020-02-12"> Feb 12, 2020 </time>
                    <span aria-hidden="true"> · </span>
                    <span> 11 min read </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





{{-- <section>
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
</section> --}}




@endsection
