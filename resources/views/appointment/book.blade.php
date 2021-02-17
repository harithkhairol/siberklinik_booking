@extends('layouts.app')
@section('title', "Booking")
@section('content')
<div class="w-full xl:w-5/12 md:p-8 p-3 space-y-4">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>Book Appointment</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">

        <div class="flex flex-col lg:flex-row w-full">
            <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">Book Appointment</h1>
        </div>

        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                    <form action="{{ route('appointment.book.date') }}">

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-5">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="type" class="block text-sm font-medium text-gray-700 pb-1">Type</label>

                                    <div class="relative">

                                        <select id="type" name="type" autocomplete="type" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none" required>
                                            <option>Cyber Practice</option>
                                            <option>Cyber Awareness</option>
                                        </select>
                                    
                                    </div>

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category" class="block text-sm font-medium text-gray-700 pb-1">Category</label>

                                    <div class="relative">

                                        <select id="category" name="category" autocomplete="category" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none" required>
                                            <option>Consultation</option>
                                            <option>Training</option>
                                            <option>Talk</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                        <label for="title" class="block text-sm font-medium text-gray-700 pb-1">Title</label>
                                        <input type="text" name="title" id="title" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" required>
                                    </div>

                                <div class="col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700 pb-1">Description</label>
                                    <textarea type="text" name="description" id="description" autocomplete="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base h-60" required></textarea>
                                </div>

                    
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Continue
                            </button>
                        </div>

                    </form>


            
                
            </div>
            </div>
        </div>

    </div>
</div>

@endsection