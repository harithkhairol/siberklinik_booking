@extends('layouts.app')
@section('title', "Booking Date")
@section('content')

<div class="w-full md:p-8 p-3 space-y-4">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>{{ $appointment->title }}</li>
        </ol>
    </nav>

    <div class="w-full">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col mb-1">

            <div class="w-full xl:flex flex-row xl:space-x-7 space-y-4 xl:space-y-0">

                <div class="w-full xl:w-5/12">

                    <!-- <h1 class="font-semibold text-xl px-1 py-2 lg:py-3 mb-2 ml-2 flex-auto pt-1.5">{{ $appointment->title }}</h1> -->

                    <div class="lg:flex lg:items-center lg:justify-between px-1 py-2 lg:py-3 mb-2 ml-2 pt-1.5">
                        <div class="flex-1 min-w-0">
                            <h2 class="text-xl font-bold leading-7 text-gray-900">
                            {{ $appointment->title }}
                            </h2>

                        </div>
                       
                    </div>

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-5">

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="type" class="block text-sm font-medium text-gray-700 pb-1">Date</label>

                                            <div class="relative">

                                                <input type="text" value="{{ date('D', strtotime($appointment->date)).', '.date('d/m/Y', strtotime($appointment->date)) }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base bg-gray-100" disabled>
                                                
                                            </div>

                                        </div>

                                    
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="category" class="block text-sm font-medium text-gray-700 pb-1">Time</label>

                                            <div class="relative">

                                            <input type="time" value="{{ $appointment->time }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base bg-gray-100" disabled>

                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="type" class="block text-sm font-medium text-gray-700 pb-1">Type</label>

                                            <div class="relative">

                                                <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none bg-gray-100" disabled>
                                                    <option value="Cyber Practice" {{ $appointment->type == ('Cyber Practice') ? 'selected' : '' }}>Cyber Practice</option>
                                                    <option value="Cyber Awareness" {{ $appointment->type == ('Cyber Awareness') ? 'selected' : '' }}>Cyber Awareness</option>
                                                </select>
                                            
                                            </div>

                                        </div>

                                    
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="category" class="block text-sm font-medium text-gray-700 pb-1">Category</label>

                                            <div class="relative">

                                                <select id="category" name="category" autocomplete="category" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none sm:text-base rounded-none relative text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-base appearance-none bg-gray-100" disabled>
                                                    <option value="Consultation" {{ $appointment->category == ('Consultation') ? 'selected' : '' }}>Consultation</option>
                                                    <option value="Training" {{ $appointment->category == ('Training') ? 'selected' : '' }}>Training</option>
                                                    <option value="Talk" {{ $appointment->category == ('Talk') ? 'selected' : '' }}>Talk</option>
                                                </select>

                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="title" class="block text-sm font-medium text-gray-700 pb-1">Title</label>
                                            <input type="text" value="{{ $appointment->title }}" name="title" id="title" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base bg-gray-100" disabled>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="description" class="block text-sm font-medium text-gray-700 pb-1">Description</label>
                                            <textarea type="text" value="{{ $appointment->description }}" name="description" id="description" autocomplete="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base h-60 bg-gray-100" disabled>{{ $appointment->description }}</textarea>
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

                
            </div>
            
        </div>
    </div>

   

</div>

<script>

$("#more").click(function(){

    $("#more-menu").toggle();    

});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".delete-modal").on("click", function() {

let id = $(this).data('id');
let title = $(this).data('title');

$("#modal").removeClass("hidden");
$("#modal-headline").text("Delete appointment "+title+"?");
$("#modal-content").text("Are you sure you want to delete appointment "+title+"?");
$('#modal-button').val(id);

});

$("#modal-button").on("click", function() {

let id = $('#modal-button').val();

$('#modal-action').attr("action", '/appointment/'+id+'/delete');

});


$(".close-modal").on("click", function() {
$("#modal").addClass("hidden");
});


</script>

@endsection