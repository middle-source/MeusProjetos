$(function(){
    // $('button').click(function(){
    //     //$('button').addClass('fundoVermelho');
    //         // if($(this).hasClass('fundoVermelho')){
    //         //     $(this).removeClass('fundoVermelho');
    //         // } else{
    //         //     $(this).addClass('fundoVermelho');
    //         // }

    //        // $(this).toggleClass('fundoVermelho'); // Toggle Class Apertar aplicar apertar remover
           
    // });
        // /* Mouse Over */
        // $('button').mouseover(function(){
        //     $(this).addClass('fundoVermelho');
        // });

        // /* Mouse Out */
        // $('button').mouseout(function(){
        //     $(this).removeClass('fundoVermelho');
        // });


    /* Eventos Auxiliar */
        $('button').hover(function(){
            $(this).addClass('fundoVermelho');
        }, function(){
            $(this).removeClass('fundoVermelho');
        });
});