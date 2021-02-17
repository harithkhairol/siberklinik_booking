<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <div class="relative bg-white">
        <!-- <div class="max-w-7xl mx-auto px-4 sm:px-6"> -->
        <div class="max-w-full mx-auto px-4 sm:px-6">

            @include('layouts.header')
            
        </div>
    </div>

        @include('layouts.header-mobile')
        
    <body>

        <div class="bg-gray-50 md:flex min-h-screen w-full">

            @include('layouts.sidebar')

            <div class="w-full">

                @include('layouts.notification')

                @yield('content')   

            </div>             


        </div>

    </body>
    
</html>

<script>

feather.replace();

$("#navBtn").click(function(){
  $("#navMobile").toggle();
});

$("#navMobileClose").click(function(){
  $("#navMobile").toggle();
});

$("#navUserOpen").click(function(){
  $("#navUser").toggle();
});

// if click outside user menu, close the user modal
$(document).on("click", function(event){

var $trigger = $("#navUserOpen");

if($trigger !== event.target && !$trigger.has(event.target).length){
    $("#navUser").hide();
}            

});


$(".nav-side-btn").click(function(){

    $(this).next().toggle('fast', function(){

        if ($(this).is(':visible')) {

            $(this).prev().find(".chevron-down").hide();
            $(this).prev().find(".chevron-up").show();

        } 

        else {

            $(this).prev().find(".chevron-down").show();
            $(this).prev().find(".chevron-up").hide();

        }    

    });

});

$("#close-notification").click(function() {
        $("#notification").remove();
});


</script>

