$(document).ready(function(){ 

 // $(window).on('scroll', function(){
  setTimeout(function(){ 
    $(".preloader").addClass("complete");
  }, 1500);

  $(window).on('scroll', function(){
    var scroll = $(window).scrollTop();
    // console.log(scroll);
    if(scroll >= 50)
    {
      $(".sticky").addClass("stickyadd");
    }
    else
    {
      $(".sticky").removeClass("stickyadd");
    }
  });

    var typed = new Typed(".element", {
    strings: ['Peter', 'SEO Expert', 'a Designer', 'a Manager', 'a Business Specialist'],
    smartBackspace: true,
    typeSpeed: 80,
    backSpeed: 100,
    loop: true,
    loopCount: Infinity,
    startDelay: 1000
  });

  var waypoint = new Waypoint({
    element: document.getElementById('exp-id'),
    handler: function() {
      var p = document.querySelectorAll('.progress-bar');
      p[0].setAttribute("style", "width:95%; transition:1s all");
      p[1].setAttribute("style", "width:90%; transition:1.5s all");
      p[2].setAttribute("style", "width:98%; transition:2s all");
      p[3].setAttribute("style", "width:95%; transition:2.3s all");
      p[4].setAttribute("style", "width:90%; transition:2.5s all");
    },
    offset: '90%'
  });

  $('a').smoothScroll({
    speed:2000,
  });

});