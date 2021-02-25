@extends('layouts.app')
@section('title', "Schedule" )
@section('content')
<div class="w-full sm:w-11/12 md:w-7/12 xl:w-full md:p-8 p-3 space-y-7">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>Schedule</li>
        </ol>
    </nav>


    <div class="w-full flex-wrap md:flex-none flex bg-gray-50 space-y-2 lg:space-y-0 lg:space-x-2">

        <div class="w-full xl:w-1/3 space-y-1 xl:space-y-0 xl:flex xl:space-x-2">

            <div class="w-full lg:w-1/2 shadow flex-initial rounded-md py-5 bg-white space-y-3 p-3 md:p-6 min-h-28 text-gray-900">
                <h1 class="font-semibold text-xl">Today</h1>

                
                
                @forelse ($appointment_today as $appointment)

                    <div class="flex space-x-6">

                        <div class="flex-initial">
                            <h2>{{ $appointment->title }}</h2>
                        </div>

                        <div class="flex-initial">
                            <h2>{{ date('G:i', strtotime($appointment->time)) }}</h2>
                        </div>

                    </div>

                @empty

                    <div class="flex space-x-6">

                        <div class="flex-initial">
                            <h2>No appointment..</h2>
                        </div>

            
                    </div>

                @endforelse

                

            </div>

            <div class="w-full lg:w-1/2 shadow flex-initial rounded-md py-5 bg-white space-y-3 p-3 md:p-6 min-h-28 text-gray-900">
                <h1 class="font-semibold text-xl">Next</h1>

                <div class="flex space-x-6">


                    <div class="flex-initial">
                        <h2>

                        @if(isset($appointment_next))

                            <!-- {{ date('d/m/Y', strtotime($appointment_next_date->date)) }} -->
                            {{ $appointment_next_date->date}}
                        
                        @else

                            No Upcoming Appointment

                        @endif
                        
                        </h2>
                    </div>

        
                    
                </div>

                @if(isset($appointment_next))

                    @forelse ($appointment_next as $appointment)

                        <div class="flex space-x-6">

                            <div class="flex-initial">
                                <h2>{{ $appointment->title }}</h2>
                            </div>

                            <div class="flex-initial">
                                <h2>{{ date('G:i', strtotime($appointment->time)) }}</h2>
                            </div>

                        </div>

                    @empty

                        <div class="flex space-x-6">

                            <div class="flex-initial">
                                <h2>No appointment..</h2>
                            </div>

                
                        </div>

                    @endforelse


                @endif


            </div>

        </div>        
        

    </div>


    <!--  -->

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">
        <div class="w-full px-0 mb-2">
            <div class="w-full lg:w-1/3">
                <div class="mt-1 relative rounded-md shadow-sm">
                    <form class="form-header" action="{{ route('appointment.schedule') }}" method="GET">
                        <input type="text" name="search" id="search" value="{{  Request::get('search') ? Request::get('search') : '' }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" placeholder="Search..">
                        <button type="submit" class="bg-blue-500 text-white absolute inset-y-0 right-0 flex items-center z-10 rounded-r-md p-3">
                            <label for="search" class="sr-only">Search</label>
                            <i data-feather="search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">Upcoming Schedule</h1>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                    
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead >
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Siberdoctor
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">


                            @forelse ($appointment_upcoming as $appointment)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $loop->iteration + (($appointment_upcoming->currentPage()-1) * $appointment_upcoming->perPage()) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <!-- {{ date('d/m/Y', strtotime($appointment->date)) }} -->
                                        {{ $appointment->date }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ date('G:i', strtotime($appointment->time))}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">                                    
                                            <div>
                                                <div class="text-sm text-gray-900">
                                                    {{ $appointment->doctor_name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $appointment->phone_no }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $appointment->type }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                        <div class="text-sm text-gray-900">{{ $appointment->title }}</div>
                                        <div class="text-sm text-gray-500">{{ $appointment->category }}</div>
                                    </td>
                                    <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                        <a href="{{ route('appointment.show', [$appointment->id, $appointment->title]) }}" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                        <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                        
                                    </td>
                                
                                </tr>

                            @empty

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        No Upcoming Appointment
                                    </td>
                                </tr>

                            @endforelse


                        <!-- More items... -->
                    </tbody>
                    </table>

                    <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                        {{ $appointment_upcoming->links() }}
                    </div>
                </div>
            </div>
            </div>
        


    </div>
</div>

@endsection