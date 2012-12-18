/* Scripts */
var window_width;
var window_height;

var currentPage = window.location.pathname.split('/');
currentPage = currentPage[currentPage.length-1];

init();

$(window).resize(init);

function init(){
    window_width = $(window).width();
    window_height = $(window).height();

    

    if($('body').hasClass('references')){
        heightReferences = window_height - $('header').height() - 20;
        $('.box-wrap').css('height',heightReferences);
        $('.box').css('height',heightReferences);
        $('.antiscroll-inner').css('height',heightReferences);

        $('.box-wrap').antiscroll().data('antiscroll');
        $('.antiscroll-scrollbar-vertical').clone().appendTo('.description_projet');
    }

}

$(window).load(function(){
    $('body').css({'top' : 2*window_height});
    $('.bg_fullscreen').css('position', 'absolute');
    $('body').animate({'top' : '0px'}, 800,function(){
        $('.bg_fullscreen').css('position', 'fixed');
        if($('body').hasClass('home')){
            $('#wrapper').css('height',$(window).height());
            $('.description_projet').stop().animate({'opacity' : 1},500);
        }
    });
       // pattern fullscreen fluid
    $('.fullscreen_pattern').css({
        "height" : window_height,
        "width"  : window_width
    });
});

$(document).ready(function(){
    $('.panel').hover(function(){
        $(this).addClass('flip');
    },function(){
        $(this).removeClass('flip');
    });
});

$(document).ready(function(){

    //Animation Transition Link
    $('a').on('click',function(){
        var a = $(this);
        if(a.attr('href') == "#" || a.attr('href') == currentPage){
            return false;
        }

        $('.bg_fullscreen').css('position', 'absolute');
        $('body').animate({
            'top' : - (2*window_height)
        }, 800, function(){
            $(location).attr('href',a.attr('href'));
        });
        return false;
    });
  	
  	//Footer hide / show
  	$('#btn_footer a').on('click',function(){
  		if($(this).hasClass('opened')){
			$('header').stop().animate({bottom:0});
			$('footer').stop().animate({bottom:-36});

            //Arrow Top
            $(this).css('background-position','0px 0px');

  		}else{
  			$('header').stop().animate({bottom:36});
			$('footer').stop().animate({bottom:0});

            //Arrow Down
            $(this).css('background-position','0px -18px');
  		}
  		$(this).toggleClass('opened');
  	});

    //Antiscroll JS
    if($('body').hasClass('references')){
        heightReferences = window_height - $('header').height() - 20;
        $('.box-wrap').css('height',heightReferences);
        $('.box').css('height',heightReferences);

        $('.antiscroll-inner').css('height',heightReferences);
        $('.box-wrap').antiscroll().data('antiscroll');
    }
});  
