$(function(){
    $('a.galery').bind('click', function(){
        var img = $(this).find('img').attr('src');

        $('.div-box img').attr('src', img);

        $('.bg-box, .div-box').fadeIn();
    });

    $('.bg-box, .div-box button').bind('click', function(){
        
        $('.bg-box, .div-box').fadeOut('fast');
    })
});