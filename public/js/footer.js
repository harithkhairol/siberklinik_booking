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

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});