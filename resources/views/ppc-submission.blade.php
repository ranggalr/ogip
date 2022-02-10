@extends('layouts.ogip-form', ['title' => 'PPC Submission'])
@section('body')
<div x-data="ppc_submission_app()">

<section class="overflow-hidden">
    <div class="flex min-h-screen overflow-hidden">
      <div class="relative flex-1 hidden w-0 overflow-hidden lg:block">
        <img class="absolute inset-0 object-contain object-center w-full h-full bg-gray-100 px-6" src="{{ asset('img/logo ogip.png') }}" alt="">
      </div>
      <div class="
    flex flex-col
    justify-center
    flex-1
    px-4
    py-12
    overflow-hidden
    sm:px-6
    lg:flex-none lg:px-20
    xl:px-24
  ">
        <div class="w-full max-w-xl mx-auto lg:w-96 overflow-y-auto h-screen">
          <div>
            <h2 class="mt-6 text-3xl font-extrabold text-neutral-600">Paper Poster Competition</h2>
          </div>
          <div class="mt-8">
            <div class="mt-6">
              <form action="#" method="POST" class="space-y-6" @submit.prevent="submitForm">

                <div class="space-y-1">
                  <label for="team_name" class="block text-sm font-medium text-neutral-600"> Team Name </label>
                  <div class="mt-1">
                    <input id="team_name" name="team_name" type="text" autocomplete="team_name" required="" x-model="state.teamName" placeholder="Your team name" class="
                  block
                  w-full
                  px-5
                  py-3
                  text-base text-neutral-600
                  placeholder-gray-300
                  transition
                  duration-500
                  ease-in-out
                  transform
                  border border-transparent
                  rounded-lg
                  bg-gray-50
                  focus:outline-none
                  focus:border-transparent
                  focus:ring-2
                  focus:ring-white
                  focus:ring-offset-2
                  focus:ring-offset-gray-300
                ">
                  </div>
                </div>
                <div class="space-y-1">
                  <label for="team_name" class="block text-sm font-medium text-neutral-600"> University </label>
                  <div class="mt-1">
                    <input id="team_name" name="team_name" type="text" autocomplete="team_name" required="" x-model="state.university" placeholder="University" class="
                  block
                  w-full
                  px-5
                  py-3
                  text-base text-neutral-600
                  placeholder-gray-300
                  transition
                  duration-500
                  ease-in-out
                  transform
                  border border-transparent
                  rounded-lg
                  bg-gray-50
                  focus:outline-none
                  focus:border-transparent
                  focus:ring-2
                  focus:ring-white
                  focus:ring-offset-2
                  focus:ring-offset-gray-300
                ">
                  </div>
                </div>

                <div class="space-y-1">
                    <label for="team_name" class="block text-sm font-medium text-neutral-600"> Full Paper </label>
                    <div class="mt-1">
                      <input id="team_name" name="team_name" type="file" required="" x-ref="full_paper" @change="handleFullPaper()" placeholder="Your team name" class="
                    block
                    w-full
                    px-5
                    py-3
                    text-base text-neutral-600
                    placeholder-gray-300
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border border-transparent
                    rounded-lg
                    bg-gray-50
                    focus:outline-none
                    focus:border-transparent
                    focus:ring-2
                    focus:ring-white
                    focus:ring-offset-2
                    focus:ring-offset-gray-300
                  ">
                    </div>
                  </div>
                <div class="space-y-1">
                    <label for="team_name" class="block text-sm font-medium text-neutral-600"> PowerPoint </label>
                    <div class="mt-1">
                      <input id="team_name" name="team_name" type="file" required="" x-ref="powerpoint" @change="handlePowerPoint()" placeholder="Your team name" class="
                    block
                    w-full
                    px-5
                    py-3
                    text-base text-neutral-600
                    placeholder-gray-300
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border border-transparent
                    rounded-lg
                    bg-gray-50
                    focus:outline-none
                    focus:border-transparent
                    focus:ring-2
                    focus:ring-white
                    focus:ring-offset-2
                    focus:ring-offset-gray-300
                  ">
                    </div>
                  </div>
                <div class="space-y-1">
                    <label for="team_name" class="block text-sm font-medium text-neutral-600"> Poster </label>
                    <div class="mt-1">
                      <input id="team_name" name="team_name" type="file" required="" x-ref="poster" @change="handlePoster()" placeholder="Your team name" class="
                    block
                    w-full
                    px-5
                    py-3
                    text-base text-neutral-600
                    placeholder-gray-300
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border border-transparent
                    rounded-lg
                    bg-gray-50
                    focus:outline-none
                    focus:border-transparent
                    focus:ring-2
                    focus:ring-white
                    focus:ring-offset-2
                    focus:ring-offset-gray-300
                  ">
                    </div>
                  </div>
                <div>
                  <button @click="submitForm" type="button" :disabled="loadingState" class="
                flex
                items-center
                justify-center
                w-full
                px-10
                py-4
                text-base
                font-medium
                text-center text-white
                transition
                duration-500
                ease-in-out
                transform
                bg-blue-400
                rounded-xl
                hover:bg-blue-500
                focus:outline-none
                focus:ring-2
                focus:ring-offset-2
                focus:ring-blue-500
              " x-text="loadingState ? 'Loading' : 'Submit'"></button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
