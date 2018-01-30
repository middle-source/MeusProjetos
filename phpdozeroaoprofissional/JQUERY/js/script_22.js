$(function(){
    $('.botao').bind('click', function(){
        $('.div').animate({
            'margin-left' : 100,
            'margin-top' : 20,
            'border-radius' : 75
        }, 1000);
    });

})