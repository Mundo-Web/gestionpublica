@php
  $component = Route::currentRouteName();
@endphp

<!DOCTYPE html>
<html lang="es">

<head>
  @viteReactRefresh
  <meta charset="UTF-8">
  <meta name="language" content="es">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{--  <meta name="description"
    content="Somos especialistas en Wall Panel, mármol UV, piedra PU y otros productos para ti. Confía en la calidad de Deco TAB y dale otro estilo a tu ambiente favorito."> --}}
  <title> Gestion Publica </title>
  <link rel="shortcut icon" href="/images/icon.svg" type="image/x-icon">
  {{--   <meta name="keywords"
    content="Wall Panel, Mármol UV, Piedra PU, Piedra Cincelada, Wall Panel Negro, Pisos SPC, Panel Tipo piedra PU" /> --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  @vite(['resources/js/' . $component, 'resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  {{-- Aqui van los CSS --}}
  @yield('css_importados')

  {{-- Swipper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  {{-- Alpine --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  {{-- Sweet Alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="/js/tippy.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @inertiaHead
</head>

<body class="body">
   <x-public.header />
  @inertia
  {{-- <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
    
    <!-- Sidebar -->
    <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
      <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail UI</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Portfolio</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
            <span>Dropdown</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    
    <!-- Main Content Area -->
    <div class="flex flex-col flex-1 min-h-screen">
      <!-- Header -->
      <x-public.headerTeacher />
      
      <!-- Page Content -->
      <div class="content p-6 flex-1">
        @inertia
      </div>
    </div>
    
  </div>   --}}

  <script src="{{ asset('js/functions.js') }}?v={{ uniqid() }}"></script>
</body>


</html>
