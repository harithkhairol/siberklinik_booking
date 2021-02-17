@extends('layouts.guest')
@section('title', 'Welcome' )
@section('content')

<div class="mx-auto max-w-7xl md:flex">

    <div class="py-28 sm:py-36 md:py-44 sm:text-center lg:text-left sm:w-full lg:w-1/2 px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-5xl lg:text-6xl">
        <span class="block xl:inline">One stop centre for</span>
        <span class="block text-blue-400 xl:inline">cyber security incidents</span>
        </h1>
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
        Our services including consultation, training, talk, and digital screening.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
            Get started
            </a>
        </div>
        <!-- <div class="mt-3 sm:mt-0 sm:ml-3">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10">
            Live demo
            </a>
        </div> -->
        </div>
    </div>

    <!-- <div class="sm:text-center lg:text-left lg:w-1/2"> -->
    <div class="hidden md:block lg:w-1/2 my-auto">
        <!-- <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt=""> -->
        <img class="w-full lg:w-5/6 mx-auto" src="{{ asset('image/bg-13.png') }}" alt="" width="85%">
    </div>


</div>

@endsection

