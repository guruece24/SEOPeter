$(document).ready(function(){ 

  $(window).on('scroll', function(){
    var scroll = $(window).scrollTop();
    console.log(scroll);
    if(scroll >= 50)
    {
      $(".sticky").addClass("stickyadd");
    }
    else
    {
      $(".sticky").removeClass("stickyadd");
    }
  });   

});