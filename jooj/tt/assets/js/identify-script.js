$("#login").focus(function(){
	$(".placeholderLogin").addClass("placeNum");
	$(".form-control-message").hide();
	$("h6").hide();
});
$("#login").focusout(function(){
    $(".placeholderLogin").removeClass("placeNum");
});
