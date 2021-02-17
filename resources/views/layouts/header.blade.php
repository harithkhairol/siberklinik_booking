<div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
    <div class="flex justify-start lg:w-0 lg:flex-1">
        <a class="text-blue-500 font-bold" href="#">
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
    </nav>

    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

        <div class="ml-3 relative">
            <div>
                <button class="max-w-xs rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 bg-gray-100 border-gray-300 border-solid border" id="user-menu" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <!-- <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> -->
                <div id="navUserOpen" class="h-8 w-8 rounded-full flex items-center justify-center">
                    <i class="text-gray-500 text-blue-500 font-bold" data-feather="user"></i>
                </div>
                </button>
            </div>
            <!--
                Profile dropdown panel, show/hide based on dropdown state.

                Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div id="navUser" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="flex items-center w-full bg-gray-100 p-4 rounded-lg">

                        <div>
                            <h3 class="text-gray-900 font-semibold">John Doe</h3>
                            <h4 class="text-sm text-gray-700 mt-1">johndoe@gmail.com</h4>
                            
                        </div>
                    </div>
                <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit Profile</a> -->

                <a href="#" class="flex items-center text-gray-600 py-2 cursor-pointer hover:bg-gray-100 text-gray-500 hover:text-gray-900 pl-2 pr-6 rounded-lg" role="menuitem">
                
                    <span class="w-8 h-8 p-1 mr-4">
                        <i data-feather="power"></i>
                    </span> 
                
                <span>Log Out</span> </a>
                
            </div>
        </div>
    </div>

</div>