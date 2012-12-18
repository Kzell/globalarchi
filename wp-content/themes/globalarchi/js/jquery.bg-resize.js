$(document).ready(function(){  
  
/* background resizable */     
function redimensionnement(){  
  
    var image_width = $('.home .bg_fullscreen').width();  
    var image_height = $('.home .bg_fullscreen').height();      
      
    var over = image_width / image_height;  
    var under = image_height / image_width;  
      
    var body_width = $(window).width();  
    var body_height = $(window).height();  
      
    if (body_width / body_height >= over) {  
      $('img.bg_fullscreen').css({  
        'width': body_width + 'px',  
        'height': Math.ceil(under * body_width) + 'px',  
        'left': '0px',  
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px'  
      });  
    }   
      
    else {  
      $('img.bg_fullscreen').css({  
        'width': Math.ceil(over * body_height) + 'px',  
        'height': body_height + 'px',  
        'top': '0px',  
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px'  
      });  
    }  
}  
          
    redimensionnement(); //onload  
      
    $(window).resize(function(){  
        redimensionnement();  
    });  
  
});  