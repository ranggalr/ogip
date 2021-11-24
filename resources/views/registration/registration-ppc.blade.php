@extends('layouts.ogip-form', ['title' => 'Smart Competition Registration'])

@section('body')
<div x-data="ppc_app()">

    <section class="overflow-hidden">
        <div class="flex min-h-screen overflow-hidden">
            <div class="relative flex-1 hidden w-0 overflow-hidden lg:block">
                <img class="absolute inset-0 object-contain object-center w-full h-full bg-gray-100 px-6"
                    src="{{ asset('img/logo ogip.png') }}" alt="">
            </div>
            <div class="flex flex-col justify-center flex-1 px-4 py-12 overflow-hidden sm:px-6 lg:flex-none lg:px-20 xl:px-24 ">
                <div class="w-full max-w-xl mx-auto lg:w-96 overflow-y-auto h-screen">
                    <div>
                        <a href="{{ route('competition.paper-poster') }}" class="text-ogip-3 text-medium">International Paper and Poster
                            Competition</a>
                        <h2 class="mt-6 text-3xl font-extrabold text-neutral-600">Registration</h2>
                    </div>
                    <div class="xl:w-11/12 lg:w-5/6">
                        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                            x-text="`Step ${currentStep} of ${totalSteps}`">
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div class="text-lg font-bold text-gray-700 leading-tight" x-show="currentStep == 1">
                                    General information</div>
                                <div class="text-lg font-bold text-gray-700 leading-tight" x-show="currentStep == 2">
                                    Leader information</div>
                                <div class="text-lg font-bold text-gray-700 leading-tight" x-show="currentStep == 3">
                                    Member information</div>
                                <div class="text-lg font-bold text-gray-700 leading-tight" x-show="currentStep == 4">
                                    Member information</div>
                                <div class="text-lg font-bold text-gray-700 leading-tight" x-show="currentStep == 5">
                                    Validating</div>
                            </div>
                            <div class="flex items-center md:w-64">
                                <div class="w-full rounded-full mr-2">
                                    <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center w-1/2"
                                        :style="'width: '+ parseInt(currentStep / totalSteps * 100) +'%'"></div>
                                </div>
                                <div class="text-xs w-10 text-gray-600"
                                    x-text="parseInt(currentStep / totalSteps * 100) +'%'"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="mt-6">
                            <form action="#" method="POST" class="space-y-6" @submit.prevent="submitForm">
                                <div x-show="currentStep == 1">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-neutral-600"> Team Name </label>
                                        <div class="mt-1">
                                            <input id="teamName" name="teamName" type="teamName" autocomplete="teamName" required=""
                                                placeholder="Your team name" x-model="state.teamName"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                </div>
                                <div x-show="currentStep == 2">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-neutral-600"> Email
                                            address </label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email" required=""
                                                placeholder="Your Email" x-model="state.members[0].email"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-neutral-600"> Name </label>
                                        <div class="mt-1">
                                            <input id="name" name="name" type="text" autocomplete="name" required=""
                                                placeholder="Your name" x-model="state.members[0].name"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-neutral-600"> Phone </label>
                                        <div class="mt-1">
                                            <input id="phone" name="phone" type="text" autocomplete="phone" required=""
                                                placeholder="Your phone" x-model="state.members[0].phone"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="university" class="block text-sm font-medium text-neutral-600"> University </label>
                                        <div class="mt-1">
                                            <input id="university" name="university" type="text" autocomplete="university" required=""
                                                placeholder="Your university" x-model="state.members[0].university"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="major" class="block text-sm font-medium text-neutral-600"> Major </label>
                                        <div class="mt-1">
                                            <input id="major" name="major" type="text" autocomplete="major" required=""
                                                placeholder="Your major" x-model="state.members[0].major"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="studentId" class="block text-sm font-medium text-neutral-600"> Student ID </label>
                                        <div class="mt-1">
                                            <input id="studentId" name="studentId" type="text" autocomplete="studentId" required=""
                                                placeholder="Your studentId" x-model="state.members[0].studentId"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                </div>
                                <div x-show="currentStep == 3">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-neutral-600"> Email
                                            address </label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email" required=""
                                                placeholder="Your Email" x-model="state.members[1].email"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-neutral-600"> Name </label>
                                        <div class="mt-1">
                                            <input id="name" name="name" type="text" autocomplete="name" required=""
                                                placeholder="Your name" x-model="state.members[1].name"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-neutral-600"> Phone </label>
                                        <div class="mt-1">
                                            <input id="phone" name="phone" type="text" autocomplete="phone" required=""
                                                placeholder="Your phone" x-model="state.members[1].phone"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="university" class="block text-sm font-medium text-neutral-600"> University </label>
                                        <div class="mt-1">
                                            <input id="university" name="university" type="text" autocomplete="university" required=""
                                                placeholder="Your university" x-model="state.members[1].university"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="major" class="block text-sm font-medium text-neutral-600"> Major </label>
                                        <div class="mt-1">
                                            <input id="major" name="major" type="text" autocomplete="major" required=""
                                                placeholder="Your major" x-model="state.members[1].major"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="studentId" class="block text-sm font-medium text-neutral-600"> Student ID </label>
                                        <div class="mt-1">
                                            <input id="studentId" name="studentId" type="text" autocomplete="studentId" required=""
                                                placeholder="Your studentId" x-model="state.members[1].studentId"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                </div>
                                <div x-show="currentStep == 4">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-neutral-600"> Email
                                            address </label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email" required=""
                                                placeholder="Your Email" x-model="state.members[2].email"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-neutral-600"> Name </label>
                                        <div class="mt-1">
                                            <input id="name" name="name" type="text" autocomplete="name" required=""
                                                placeholder="Your name" x-model="state.members[2].name"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-neutral-600"> Phone </label>
                                        <div class="mt-1">
                                            <input id="phone" name="phone" type="text" autocomplete="phone" required=""
                                                placeholder="Your phone" x-model="state.members[2].phone"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="university" class="block text-sm font-medium text-neutral-600"> University </label>
                                        <div class="mt-1">
                                            <input id="university" name="university" type="text" autocomplete="university" required=""
                                                placeholder="Your university" x-model="state.members[2].university"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="major" class="block text-sm font-medium text-neutral-600"> Major </label>
                                        <div class="mt-1">
                                            <input id="major" name="major" type="text" autocomplete="major" required=""
                                                placeholder="Your major" x-model="state.members[2].major"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="studentId" class="block text-sm font-medium text-neutral-600"> Student ID </label>
                                        <div class="mt-1">
                                            <input id="studentId" name="studentId" type="text" autocomplete="studentId" required=""
                                                placeholder="Your studentId" x-model="state.members[2].studentId"
                                                class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                </div>
                                <div x-show="currentStep == 5">
                                    <p class="leading-relaxed text-base">Please make sure you already fill all the form correctly before submitting</p>
                                </div>


                        <div>
                            <button type="button" x-show="currentStep == totalSteps" :disabled="loadingState"
                                class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                x-text="loadingState ? 'Loading' : 'Submit'" @click="submitForm"></button>
                            <button type="button" @click="currentStep++"
                                x-show="totalSteps >= currentStep && totalSteps != currentStep"
                                class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Next</button>
                            <button type="button" @click="currentStep--" x-show="currentStep > 1 && currentStep != 5+1"
                                class="mt-4 flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Previous</button>
                        </div>
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
