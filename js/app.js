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

    var typed = new Typed(".telement", {
    strings: ['Peter', 'SEO Expert', 'a Designer', 'a Manager', 'a Business Specialist'],
    smartBackspace: true,
    typeSpeed: 80,
    backSpeed: 100,
    loop: true,
    loopCount: Infinity,
    startDelay: 1000
  });

});