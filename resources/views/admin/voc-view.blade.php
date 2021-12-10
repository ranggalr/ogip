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
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> Name</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $voc->name }} </p>
        </div>
        <div class="p-6">
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> Email</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $voc->email }} </p>
        </div>
        <div class="p-6">
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> Institution</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $voc->institution }} </p>
        </div>
        <div class="p-6">
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> Major</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $voc->major }} </p>
        </div>
        <div class="p-6">
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> line</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $voc->line }} </p>
        </div>
        <div class="p-6">
          <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"> phone</h1>
          <p class="mx-auto text-base leading-relaxed text-gray-500"> {{ $voc->phone }} </p>
        </div>
      </div>
    </div>
  </section>

@endsection
