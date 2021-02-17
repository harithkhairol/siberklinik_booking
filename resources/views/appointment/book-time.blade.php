@extends('layouts.app')
@section('title', "Booking Time")
@section('content')

<div class="w-full md:p-8 p-3 space-y-4">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li><a href="#" class="text-blue font-bold">Book Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li><a href="#" class="text-blue font-bold">Date</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>Time</li>
        </ol>
    </nav>

    <div class="w-full">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col mb-1">

            <div class="w-full xl:flex flex-row xl:space-x-7 space-y-4 xl:space-y-0">

                <div class="w-full xl:w-5/12">

                    <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">Appointment Details</h1>

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-5">

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="type" class="block text-sm font-medium text-gray-700 pb-1">Type</label>

                                            <div class="relative">

                                                <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none bg-gray-100" disabled>
                                                    <option value="Cyber Practice" {{ $type == ('Cyber Practice') ? 'selected' : '' }}>Cyber Practice</option>
                                                    <option value="Cyber Awareness" {{ $type == ('Cyber Awareness') ? 'selected' : '' }}>Cyber Awareness</option>
                                                </select>
                                            
                                            </div>

                                        </div>

                                    
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="category" class="block text-sm font-medium text-gray-700 pb-1">Category</label>

                                            <div class="relative">

                                                <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none bg-gray-100" disabled>
                                                    <option value="Consultation" {{ $category == ('Consultation') ? 'selected' : '' }}>Consultation</option>
                                                    <option value="Training" {{ $category == ('Training') ? 'selected' : '' }}>Training</option>
                                                    <option value="Talk" {{ $category == ('Talk') ? 'selected' : '' }}>Talk</option>
                                                </select>

                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="title" class="block text-sm font-medium text-gray-700 pb-1">Title</label>
                                            <input type="text" value="{{ $title }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base bg-gray-100" disabled>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="description" class="block text-sm font-medium text-gray-700 pb-1">Description</label>
                                            <textarea type="text" value="{{ $description }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base h-60 bg-gray-100" disabled>{{ $description }}</textarea>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                                    <a href="{{ url()->previous() }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 pointer">
                                        Back
                                    </a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                
                </div>

                <div class="w-full xl:w-5/12 flex-col">

                    <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">
                        Choose Date 
                        <span class="text-lg font-light">
                            (Available Day: 
                            @foreach ($available_days as $available_day) 

                                @if($loop->last)
                                    {{  $available_day }}
                                @else
                                    {{  $available_day }},
                                @endif
                            
                            @endforeach 
                            )
                        </span>
                        
                    </h1>

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                                <form action="{{ route('appointment.book.time') }}">

                                    <input type="hidden" name="type" id="type" value="{{ $type }}">
                                    <input type="hidden" id="category" name="category" value="{{ $category }}">
                                    <input type="hidden" name="title" id="title" value="{{ $title }}">
                                    <input type="hidden" name="description" id="description" value="{{ $description }}">

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-5">

                                            <div class="col-span-6 sm:col-span-3">

                                                <div class="relative">

                                                    <div class="col-span-6 sm:col-span-4">
                                                        <label for="title" class="block text-sm font-medium text-gray-700 pb-1">Date Of Appointment</label>
                                                        <input type="date" name="date" id="date" value="{{ $date }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" required>
                                                    </div>
                                                
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                            Search Available Time
                                        </button>
                                    </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>

                    <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5 mt-4">Choose Available Time</h1>

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-5">

                                        <div class="col-span-full">

                                            <div class="flex space-x-2">

                                                @foreach ($timeslots as $timeslot) 

                                                    <button class="rounded-full py-1 px-3 bg-white border border-blue-400 text-blue-400 font-bold hover:bg-blue-700 hover:text-white hover:border-blue-700">
                                                        {{ date('G:i', strtotime($timeslot)) }}
                                                    </button>

                                                @endforeach 

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <!-- <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Continue
                                    </button> -->
                                </div>
                            
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            
        </div>
    </div>

   

</div>



@endsection