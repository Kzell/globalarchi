/* Script Reference */

$(document).ready(function(){
    widthDecalage = $('.banner_show_hide').width();

    $('.single_reference .btn_show_hide_description_reference').on('click',function(){

        if($(this).hasClass('opened')){
            $('.banner_show_hide').stop().animate({'margin-left' : -widthDecalage},400,function(){
                $(this).css('background', "image-url('sprite.png') no-repeat -222px 112px rgba(255, 255, 255, 0.9)");
                $('.btn_show_hide_description_reference').removeClass('opened');
            });
        }else{
            $('.banner_show_hide').stop().animate({'margin-left' : 0},400,function(){
                $(this).css('background', "image-url('sprite.png') no-repeat -462px 112px rgba(255, 255, 255, 0.9)");
                $('.btn_show_hide_description_reference').addClass('opened');
            });
        }
    });
});