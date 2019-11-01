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
     
      height:'toggle',
      width:'toggle',
  })
   }

)


})