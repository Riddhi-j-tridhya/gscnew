

function submit_me(){
jQuery.post(the_ajax_script.ajaxurl, jQuery("#theForm").serialize()
,
function displayResponse(response_from_the_action_function) {
    var responseArea = jQuery("#response_area");
    
    if (response_from_the_action_function == "") {
        responseArea.html("Sorry Currently we don’t have any offers in this category");
    } else {
        responseArea.html(response_from_the_action_function);
    }
}

);
}
document.addEventListener("DOMContentLoaded", submit_me); //this submit_me function is called on page load.


jQuery(document).ready(function($){
   // alert('Hello World!');
	$(function () {
    $(".loader").slice(0, 3).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".loader:hidden").slice(0, 3).slideDown();
        if ($(".loader:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1000);
    });
});
});