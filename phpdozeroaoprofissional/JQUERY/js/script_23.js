// $(function(){
//     $('.botao').bind('click', function(){
//         $('.div').animate({
//             'top':80,
//             'left':400,
//             'height' : 50,
//             'width' : 50
//         }, {
//             duration : 1500,
//             complete : function(){
//                $('.div').animate({
//                     'top':43,
//                     'left':7,
//                     'height': 150,
//                     'width' : 150
//                }, 1500);
//             }
//         });
//     });
// });



// , {
//     duration: 1500,
//     step:function(){
//         console.log('Nova Etapa...');
//     },

//     complete:function(){
//         console.log('Animação finalizada ! ');
//     },

//     start: function(){
//         console.log("Animação Começou ! ");
//     }
// });

/* Aula FAQ Pausar Animate */
// $(function(){
//     $('#btn').bind('click', function(){
//         $('.div').animate({
//             'margin-left' : 500
//         }, 2000);
//     });


//     $('#btn-2').bind('click', function(){
//         $('.div').stop();
//     });


// });

/* FIM Aula FAQ Pausar Animate */


$('#btn').bind('click', function(){
    $('.div').animate({
        'margin-left' : "+=50"
    }, 1000);
});
