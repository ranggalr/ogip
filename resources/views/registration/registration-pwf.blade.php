@extends('layouts.ogip-form', ['title' => 'PWF Registration'])

@section('body')
<div x-data="pwf_app()">

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
                <a href="{{ route('event.petroleum-insight') }}" class="text-ogip-3 text-medium">Petroleum Workshop Field</a>
                <h2 class="mt-6 text-3xl font-extrabold text-neutral-600">Registration</h2>
              </div>
              <div class="mt-8">
                <div class="mt-6">
                  <form action="#" method="POST" class="space-y-6" @submit.prevent="submitForm">
                    <div>
                      <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                      <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required="" placeholder="Your Email" x-model="state.email" class="
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
                      <label for="name" class="block text-sm font-medium text-neutral-600"> Name </label>
                      <div class="mt-1">
                        <input id="name" name="name" type="text" autocomplete="current-name" required="" x-model="state.name" placeholder="Your name" class="
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
                      <label for="university" class="block text-sm font-medium text-neutral-600"> University </label>
                      <div class="mt-1">
                        <input id="university" name="university" type="text" autocomplete="current-university" x-model="state.university" required="" placeholder="Your University" class="
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
                      <label for="major" class="block text-sm font-medium text-neutral-600"> Major </label>
                      <div class="mt-1">
                        <input id="major" name="major" type="text" autocomplete="current-major" required="" x-model="state.major" placeholder="Your major" class="
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
                      <label for="phone" class="block text-sm font-medium text-neutral-600"> Phone Number </label>
                      <div class="mt-1">
                        <input id="phone" name="phone" type="text" autocomplete="current-phone" required="" x-model="state.phone" placeholder="Your phone number" class="
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
                        <label for="category" class="block text-sm font-medium text-neutral-600"> Category </label>
                        <div class="mt-1">
                          <select x-model="state.category" class="block
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
                          focus:ring-offset-gray-300">
                              <option disabled>Please choose</option>
                              <option value="hands on">Hands On</option>
                              <option value="theory and demo">Theory and Demo</option>
                          </select>
                        </div>
                      </div>
                    <div class="space-y-1">
                        <label for="team_name" class="block text-sm font-medium text-neutral-600"> Payment Proof </label>
                        <div class="mt-1">
                          <input id="team_name" name="team_name" type="file" required="" x-ref="payment_proof" @change="handlePaymentProof()" placeholder="Your team name" class="
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
                        <p class=" text-base text-italic text-neutral-600">
                          The payment can be made via: <br /><br />

                          BNI 0696068909<br />
                          on behalf of??Tasya??Ria Finola<br />
                        </p>
                      </div>


                    <div>
                      <button type="submit" :disabled="loadingState" class="
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
