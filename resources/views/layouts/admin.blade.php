<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>OGIP Admin</title>
</head>
<body>

    <div class="flex h-screen overflow-hidden bg-white rounded-r-3xl">
        <div class="hidden md:flex md:flex-shrink-0">
          <div class="flex flex-col w-64">
            <div class="
          flex flex-col flex-grow
          pt-5
          overflow-y-auto
          bg-indigo-700
          border-r
        ">
              <div class="flex flex-col items-center flex-shrink-0 px-4">
                <a href="/" class="px-8 text-left focus:outline-none">
                  <h2 class="
                block
                p-2
                text-xl
                font-medium
                tracking-tighter
                text-white
                transition
                duration-500
                ease-in-out
                transform
                cursor-pointer
                hover:text-white
              "> OGIP </h2>
                </a>
                <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                  <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
              <div class="flex flex-col flex-grow px-4 mt-5">
                <nav class="flex-1 space-y-1 bg-indigo-700">
                  <ul>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    rounded-lg
                    focus:shadow-outline
                  " white="" 70="" href="{{ route('admin.dashboard') }}">
                  <svg class="h-4 w-4"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />  <polyline points="9 22 9 12 15 12 15 22" /></svg>
                        <span class="ml-4"> Dashboard</span>
                      </a>
                    </li>
                    <li x-data="{}">
                      <a @click="$refs.logoutForm.submit()" class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    rounded-lg
                    focus:shadow-outline
                  " white="" 70="" href="#">
                        <span class="ml-4"> Logout</span>
                      </a>
                      <form action="{{ route('logout') }}" x-ref="logoutForm" method="post">
                        @csrf
                    </form>
                    </li>



                  </ul>
                  <p class="px-4 pt-4 font-medium text-white uppercase">Competitions</p>
                  <ul>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.smart-competition') }}">
                        <span class="ml-4"> Smart Competition</span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="#">
                        <span class="ml-4"> Smart Competition</span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.oil-rig-design') }}">
                        <span class="ml-4"> Oil Rig Design </span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.geothermal') }}">
                        <span class="ml-4"> Geothermal Case Study</span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.ppc') }}">
                        <span class="ml-4"> Paper and Poster</span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.pod') }}">
                        <span class="ml-4"> Plan of Development</span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.simres') }}">
                        <span class="ml-4"> Reservoir Simulation</span>
                      </a>
                    </li>
                  </ul>
                  <p class="px-4 pt-4 font-medium text-white uppercase">Events</p>
                  <ul>

                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.pi') }}">
                        <span class="ml-4"> Petroleum Insight</span>
                      </a>
                    </li>
                    <li>
                      <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.voc') }}">
                        <span class="ml-4"> Video of OGIP</span>
                      </a>
                    </li>
                  </ul>
                  <p class="px-4 pt-4 font-medium text-white uppercase">Others</p>
                  <ul>
                    <li>
                        <a class="
                    inline-flex
                    items-center
                    w-full
                    px-4
                    py-2
                    mt-1
                    text-base text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border-indigo-800
                    rounded-lg
                    hover:border-indigo-800
                    focus:shadow-outline
                    hover:bg-indigo-600
                  " white="" 70="" href="{{ route('admin.payment') }}">
                        <span class="ml-4"> Payments</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="flex flex-shrink-0 p-4 px-4 bg-indigo-600">
                <a href="#" class="flex-shrink-0 block w-full group">
                  <div class="flex items-center">
                    <div>
                      <img class="inline-block rounded-full h-9 w-9" src="{{ asset('img/logo ogip.png') }}" alt="">
                    </div>
                    <div class="ml-3">
                      <p class="text-sm font-medium text-white">{{ Auth::user()->name ?? 'OGIP 2022' }}</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
          <main class="relative flex-1 overflow-y-auto focus:outline-none">
            <div class="py-6">
              <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                @yield('header' , 'Dashboard')
              </div>
              <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                <!-- Put your content here -->
                <div class="py-4">
                  <div class="rounded-lg bg-gray-50 h-96">
                      @yield('body')
                  </div>
                </div>
                <!-- Do not cross the closing tag underneath this coment-->
              </div>
            </div>
          </main>
        </div>
      </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
