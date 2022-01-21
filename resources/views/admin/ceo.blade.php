@extends('layouts.admin')

@section('body')

<section class="text-gray-600">
    <div class="container px-5 pb-24 mx-auto">
        <div class="flex flex-col">
          <a href="#" class="p-4 bg-ogip-2 text-gray-200 rounded-xl w-36 mb-4">Export as XLSX</a>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded">
              <table class="min-w-full">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "> ID </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "> Name </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase "> Created At </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Odd row -->
                  @forelse ($ceo as $i)
                    <tr class="bg-white">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900  whitespace-nowrap"> {{ $i->id }} </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap"> {{ $i->name }} </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap"> {{ $i->created_at }} </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap"><a href="{{ route('admin.ceo-talk.view', ['ceo' => $i->id]) }}" class="p-4 rounded-xl bg-ogip-2 text-gray-200">View</a></td>
                    </tr>
                  @empty
                      Tidak ada data yang tersedia
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
