$(".mail-login").focus(function(){
	$("#placeholderLogin").addClass("placeNum");
});
$(".mail-login").focusout(function(){
    $("#placeholderLogin").removeClass("placeNum");
});