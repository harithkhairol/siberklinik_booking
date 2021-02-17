@extends('layouts.app')
@section('title', "History" )
@section('content')
<div class="w-full sm:w-11/12 md:w-7/12 xl:w-full md:p-8 p-3 space-y-7">

    <nav class="bg-grey-light rounded font-sans w-full text-blue-500 mb-7 ml-2 mt-1">
        <ol class="list-reset flex text-grey-dark space-x-2">
            <!-- <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li class="pt-0.45"><span ><i data-feather="chevron-right"></i></span></li> -->
            <li><a href="#" class="text-blue font-bold">Appointment</a></li>
            <li><span ><i data-feather="chevron-right"></i></span></li>
            <li>History</li>
        </ol>
    </nav>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mb-1">
        <div class="w-full px-0 mb-2">
            <div class="w-full lg:w-1/3">
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input type="text" name="price" id="price" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-base" placeholder="Search..">
                    <button class="bg-blue-500 text-white absolute inset-y-0 right-0 flex items-center z-10 rounded-r-md p-3">
                        <label for="currency" class="sr-only">Currency</label>
                        <i data-feather="search"></i>
                        <!-- <select id="currency" name="currency" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                        <option>USD</option>
                        <option>CAD</option>
                        <option>EUR</option>
                        </select> -->
                    </button>
                </div>
            </div>
        </div>
        <h1 class="font-semibold text-xl px-1 py-3 mb-2 ml-2">History</h1>
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

                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    9:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    2
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    10:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    3
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    11:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    4
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    5
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    13:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    6
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    14:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    7
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    15:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    8
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    16:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    9
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    13/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    16:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    10
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    13/04/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    16:00
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">                                    
                                        <div>
                                            <div class="text-sm text-gray-900">
                                                Jane Cooper
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                01X-XXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Cyber Practice
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <!-- <div class="text-sm text-gray-500">Virus Data Lost</div> -->
                                    <div class="text-sm text-gray-900">Virus Data Lost</div>
                                    <div class="text-sm text-gray-500">Consultation</div>
                                </td>

                                <td class="flex px-6 py-6 whitespace-nowrap text-right text-sm font-medium space-x-3 items-center">
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="edit"></i></a>
                                    <a href="#" class="text-blue-500 hover:text-blue-900"><i data-feather="x-circle"></i></a>
                    
                                </td>
                            
                            </tr>

                        <!-- More items... -->
                    </tbody>
                    </table>

                    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                        Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                        Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">10</span>
                            of
                            <span class="font-medium">97</span>
                            results
                        </p>
                        </div>
                        <div>
                        <nav class="relative z-0 inline-flex shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            1
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            2
                            </a>
                            <a href="#" class="hidden md:inline-flex relative items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            3
                            </a>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                            </span>
                            <a href="#" class="hidden md:inline-flex relative items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            8
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            9
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            10
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            </a>
                        </nav>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        


    </div>
</div>
@endsection