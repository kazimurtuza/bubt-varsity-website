$(document).ready(function(){

    // ///////navbar dropdown lest//////////
    
$('.showbtn').hover(function(){

    $('.show').slideToggle()
    })

    $('.dropdown').hover(function(){

        $(this).find('.dropdown-menu').stop(true).slideToggle()
        })
    
$('.tach').hover(
   function(){
  $('.sidbar').stop(true,false,true).animate({
     
      height:'toggle',
      width:'toggle',
  })
   }

)
$('.sidbar').hover(
   function(){
  $(this).stop(true,false,true).animate({
     
    
      width:'toggle',
  })
   }

)
$('#btn1').click(
    function(){
        $('.post2').slideUp(00)
        $('.post3').slideUp(00)
        $('.post1').slideDown(00)

})
$('#btn2').click(
    function(){
        $('.post1').slideUp(00)
        $('.post3').slideUp(00)
        $('.post2').slideDown(00)

})
$('#btn3').click(
    function(){
        $('.post2').slideUp(00)
        $('.post1').slideUp(00)
        $('.post3').slideDown(00)

})




})





