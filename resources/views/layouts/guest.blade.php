<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>@yield('title')</title> 
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
        
        <!-- Fonts -->

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a class="text-blue-500 font-bold" href="/">
                <span class="sr-only">Workflow</span>
                <!-- <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt=""> -->
                Siberklinik Booking System
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button id="navBtn" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
             
<!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                How It Works
                </a>
                <!-- <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                Faqs
                </a> -->

                <div class="relative">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <span>About Us</span>
                    <!--
                    Heroicon name: chevron-down

                    Item active: "text-gray-600", Item inactive: "text-gray-400"
                    -->

                </button>

        
                </div>
            </nav>

            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

                @if (Route::has('login'))
                    
                        @auth
                            <a href="{{ url('/schedule') }}" class="text-sm text-gray-500 hover:text-gray-900">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            Log In
                        </a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                                Register
                            </a>
                            @endif
                        @endauth
                    
                @endif

                
            </div>
            </div>
        </div>

         <!--
            Mobile menu, show/hide based on mobile menu state.

            Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->

        <div id="navMobile" class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                <div>
                <a class="text-blue-500 font-bold" href="#">
                <span class="sr-only">Workflow</span>
                <!-- <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt=""> -->
                    Siberklinik Booking System
                </a>
                </div>
                <div class="-mr-2">
                    <button id="navMobileClose" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                </div>
                <div class="mt-6">
                <nav class="grid gap-y-8">
                    <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                    <!-- <svg class="flex-shrink-0 h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg> -->
                    <i class="text-blue-500" data-feather="thumbs-up"></i>
                    <span class="ml-3 text-base font-medium text-gray-900">
                        How It Works
                    </span>
                    </a>

                    <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                    <i class="text-blue-500" data-feather="info"></i>
                    <span class="ml-3 text-base font-medium text-gray-900">
                        About Us
                    </span>
                    </a>

                </nav>
                </div>
            </div>

            <div class="py-6 px-5 space-y-6">
              
                <div>

                @if (Route::has('login'))
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                            Sign up
                        </a>
                        @endif

                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Existing customer?
                            <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300">
                            Sign in
                            </a>
                        </p>

                    @endauth
                
                @endif

                
                

                
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <body>

    <main class="bg-gray-50 pb-14 min-h-screen">


        @if($errors->any())
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div id=notification class="bg-blue-600">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <span class="flex p-2 rounded-lg bg-blue-800">
                    <!-- Heroicon name: outline/speakerphone -->
                    <!-- <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> -->
                        <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" /> -->
                        <i class="h-6 w-6 text-white" data-feather="alert-circle"></i>
                    <!-- </svg> -->

                    
                    </span>
                    <p class="ml-3 font-medium text-white truncate">
                    <span class="md:inline">
                    @foreach ($errors->all() as $error)
                        {{ $error }} 
                        <!-- <br> -->
                    @endforeach
                    </span>
                    </p>
                </div>

                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button id="close-notification" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                </div>
            </div>
            </div>
        @endif

        @if(session('status'))
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div id=notification class="bg-blue-600">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <span class="flex p-2 rounded-lg bg-blue-800">
                    <!-- Heroicon name: outline/speakerphone -->
                    <!-- <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"> -->
                        <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" /> -->
                        <i class="h-6 w-6 text-white" data-feather="bar-chart-2"></i>
                    <!-- </svg> -->

                    
                    </span>
                    <p class="ml-3 font-medium text-white truncate">
                    <span class="md:inline">
                        {{ session('status') }} 
                        <!-- <br> -->
                    </span>
                    </p>
                </div>

                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button id="close-notification" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                </div>
            </div>
            </div>
        @endif

        <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset

    </main>
    
    <footer class="bg-gray-50 bottom-0 p-2 py-4 text-sm text-gray-600 text-sm text-center">
        &#169; Siberklinik 2021
    </footer>
    
    

    </body>
    
</html>


<script src="{{ asset('js/guest-footer.js') }}"></script>