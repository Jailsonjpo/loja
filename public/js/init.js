//document.addEventListener('DOMContentLoaded', function() {
//    var elems = document.querySelectorAll('.slider');
//    var instances = M.Slider.init(elems, options);
//  });


  $(document).ready(function(){
    $('.slider').slider({
        indicators:false
            });
    $('.materialboxed').materialbox();
  });



//$(document).ready(function () {
//
//    $('.materialboxed').materialbox();
//
//
//
//});

  function sliderPrev(){
      
      $('.slider').slider('pause');
      $('.slider').slider('prev');
      
      
  }
  
function sliderNext(){
      
      $('.slider').slider('pause');
      $('.slider').slider('next');
            
  }
  





//var instance = M.Slider.getInstance();
//
//$('.slider').slider(instance.next());
//
//instance.pause();
//instance.start();
//instance.next();
//instance.prev();
//instance.destroy();




// Next slide
//$('.carousel').carousel('next');
//$('.carousel').carousel('next', 3); // Move next n times.
//
//// Previous slide
//$('.carousel').carousel('prev');
//$('.carousel').carousel('prev', 4); // Move prev n times.
//
//// Set to nth slide
//$('.carousel').carousel('set', 4);
//
//// Destroy carousel
//$('.carousel').carousel('destroy');




//$(document).ready(function(){
//    $('.sidenav').sidenav();
////    $('.slider').slider({full_width:true});
// $('.carousel.carousel-slider').carousel({fullWidth: true});
//    $(".dropdown-trigger").dropdown();
//    $('select').formSelect();
//    
//  });

//  function sliderPrev(){
//      
//      $('.slider').slider('pause');
//      $('.slider').slider('prev');
//      
//      
//  }
//  
//function sliderNext(){
//      
//      $('.slider').slider('pause');
//      $('.slider').slider('next');
//            
//  }

