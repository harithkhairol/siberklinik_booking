<div class="hidden md:block md:flex-none min-h-full">
    <aside class="relative h-full inline-flex flex-col justify-between items-center bg-white shadow p-6">
        <nav class=" inline-flex flex-col space-y-2">
            <a class="nav-side-btn flex items-center text-base font-medium text-gray-500 hover:text-gray-900 py-2 cursor-pointer hover:bg-gray-100 pl-2 pr-6 rounded-lg">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="calendar"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    Appointment
                </span>

                <span class="chevron-down w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-down"></i>
                </span>

                <span class="chevron-up hidden w-8 h-8 p-1 pl-4">
                    <i data-feather="chevron-up"></i>
                </span>

            </a>

            <div class="nav-children hidden space-y-2">
                
                <a href="{{ route('appointment.schedule') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.schedule') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        Schedule
                    </span>
                </a>

                <a href="{{ route('appointment.history') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.history') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                    <span class="font-medium select-none">
                        History
                    </span>
                </a>
            
            </div>

        
            
            
            <!-- <a class="flex items-center text-gray-600 py-2 cursor-pointer bg-blue-100 text-blue-500 pl-2 pr-6 rounded-lg">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="plus"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    Book Appointment
                </span>
            </a> -->
        
            <a href="{{ route('appointment.book') }}" class="flex items-center text-base font-medium py-2 cursor-pointer pl-2 pr-6 rounded-lg {{ Route::is('appointment.book') ? 'text-blue-500 bg-blue-100' : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100' }}">
                <span class="w-8 h-8 p-1 mr-4">
                    <i data-feather="plus"></i>
                </span> 
                
                <span class="w-full font-medium select-none">
                    Book Appointment
                </span>
            </a>

            <!-- <div class="flex items-center w-full bg-gray-100 p-4 rounded-lg">
                <div>
                    <h3 class="text-gray-900 font-semibold">John Doe</h3>
                    <h4 class="text-sm text-gray-700 mt-1">johndoe@gmail.com</h4>
                </div>
            </div> -->

            <hr class="flex w-full items-center text-gray-500 pl-2 pr-6">

            <div class="space-y-2 space-x-2 w-40">

                <!-- first link must have pl-2 -->
                <!-- <a href="#" class="pl-2 text-xs font-medium text-gray-500 hover:text-gray-900">
                    How It Works
                </a>

                <a href="#" class="text-xs font-medium text-gray-500 hover:text-gray-900">
                    About Us
                </a>

                <br> -->

                <span class="text-xs font-medium text-gray-500">
                    &#169; 2021 Siberklinik
                </span>

            </div>

        </nav> 

    </aside>

</div>