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