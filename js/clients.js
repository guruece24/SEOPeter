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

  $('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    items: 1,
    mouseDrag: true,
    touchDrag: true,
    pullDrag: true,
    dots: true,
    autoplayHoverPause: false,
    dotsEach: true,
  });

});