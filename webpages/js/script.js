$(document).ready(function(){

$("h1").hide();
$(".btn").click(function(){
    $(".ok").animate({
      height:'toggle',
      width:"toggle",
},5000)
})
$('.id4').click(function()
{
    $('.id3').slideToggle(5000)
})


$('.showbtn').hover(function(){

    $('.show').slideToggle()
    })

    $('.dropdown').hover(function(){

        $(this).find('.dropdown-menu').stop(true).slideToggle()
        })
    



})