@extends('layouts.admin')

@section('body')

<section>
    <a href="{{ route('admin.smart-competition') }}">Back</a>
    <div class="
  relative
  items-center
  w-full
  px-5
  py-12
  mx-auto
  md:px-12
  lg:px-24
  max-w-7xl
">
      <div class="grid w-full grid-cols-1 gap-12 mx-auto lg:grid-cols-2">
        <div class="p-6">
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> Team Name</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $smartCompetition->team_name }} </p>
        </div>
      </div>
      @forelse ($smartCompetition->members as $i)
        <div class="grid w-full grid-cols-1 gap-12 mx-auto lg:grid-cols-2">
            <div class="p-6">
                <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> Member {{ $loop->iteration }}</h1>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> Name : {{ $i['name'] }} </p>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> Email : {{ $i['email'] }} </p>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> University : {{ $i['university'] }} </p>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> Major : {{ $i['major'] }} </p>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> Phone : {{ $i['phone'] }} </p>
                <p class="mx-auto text-base leading-relaxed text-gray-500"> Student ID : {{ $i['studentId'] }} </p>
            </div>
        </div>
      @empty

      @endforelse
    </div>
  </section>

@endsection
