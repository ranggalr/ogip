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
                            <img class="object-cover object-center mx-auto rounded-lg" alt="hero"
                                src="{{ asset('img/logo lomba/Pre-event/VOC-01.png') }}">
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
      "> Video Of Ogip Challenge</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-gray-300"> MAXIMIZING THE SOCIAL MEDIA USAGE FOR
                    PETROLEUM INDUSTRY BRANDING </p>
                <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
                    <div class="mt-3 rounded-lg sm:mt-0">
                        <a href="{{ route('event.voc.registration') }}" class="
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
                <p class="mb-8 text-base leading-relaxed text-left text-gray-500">VOC (Video of OGIP Challange),
                    participants will be asked to make a promotional video for OGIP 2022 as creative and interesting as
                    possible. The best 3 participants will get prizes and the video will be shown on all of the official
                    social media of OGIP 2022.
                    <span class="font-bold">Upload Rules</span>
                    <ol class="list-decimal text-gray-500 leading-relaxed text-base">
                        <li>Follow ig (@ogip_2022) & tiktok (@hmtm,ogip)</li>
                        <li>Upload reels + tiktok according to the theme, </li>
                        <li>The video is prohibited from containing elements of SARA (Ethnicity, Religion, Race and
                            Intergroup), pornography, or hate speech.</li>
                        <li>Upload tiktok, reels, and Instagram stories by tagging all ogip accounts post to Instagram
                            stories by tagging ogip as well.</li>
                        <li>Use this hashtag:
                            <ul class="list-disc">
                                <li>#OGIP2022 </li>
                                <li>#IMREADYFOROGIP2022</li>
                                <li>#OGIP2022_BeyondtheBoundary</li>
                            </ul>
                        </li>
                        <li>Winner Category
                            <ul class="list-disc">
                                <li>1st Place in VOC (Champion)</li>
                                <li>2nd Place in VOC (1st Runner Up) </li>
                                <li>3rd place in VOC (2nd Runner Up) </li>
                            </ul>
                        </li>
                        <li>Please rename your video in the following format : <br />OGIP2022_ SUBTOPIC_ NAME
                            <br />Example : OGIP2022 _PETROLEUM INDUSTRY_NAOMI</li>
                        <li>Don???t forget to submit your video via this link : <a
                                href="http://bit.ly/UPLOADVOC">http://bit.ly/UPLOADVOC</a> </li>
                        <li>Fail to obey the rules may receive reduction of points or disqualification.</li>
                    </ol>
                    <span class="font-bold">Subtopic</span>
                    <ol class="list-disc text-gray-500 leading-relaxed text-base">
                        <li>Petroleum Industry</li>
                        <li>OGIP Branding</li>
                    </ol>
                    <span class="font-bold">Keydates</span>
                    <ol class="list-disc text-gray-500 leading-relaxed text-base">
                        <li>Open Registration : November 22nd, 2021</li>
                        <li>Close Registration : December 2nd, 2021</li>
                        <li>Upload Video : December 4th, 2021</li>
                        <li>Last Day Uploading Video : December 16th, 2021</li>
                        <li>Winner Announcement : December 19th, 2021</li>
                    </ol>
                    <span class="font-bold">Contact Person</span>
                    <ol class="list-disc text-gray-500 leading-relaxed text-base">
                        <li>Nadia Intan Maharani
                            <ul>
                                <li>WA : 087839416556</li>
                                <li>Email : nadiaaintan48@gmail.com </li>
                            </ul>
                        </li>
                        <li>Ahsha Nuha Rasyidah
                            <ul>
                                <li>WA : 081299436682</li>
                                <li>Email : asarsydh@gmail.com </li>
                            </ul>
                        </li>
                    </ol>
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
                            <img class="object-cover object-center mx-auto rounded-lg" alt="hero"
                                src="{{ asset('img/question.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
