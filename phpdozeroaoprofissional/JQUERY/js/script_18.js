$(function(){



    // $('#form').bind('submit', function(e){
    //     e.preventDefault();
    //     console.log("O Formulario foi submitado ! ");

    // });

    // $('#nome').bind('select', function(){
    //     console.log('Algo foi selecionado ! ');
    // });
    
    /* Focando Elemento 
    $('#nome, #email').bind('focus', function(){
        $(this).addClass('focado');
    });
    */
    /* Desfoque no elemento */
    
    /*$('#nome, #email').bind('blur', function(){
        $(this).removeClass('focado');
    });
    */
    /* Evento Change Mudança no select */
    // $('#idade').bind('change', function(){
    //    console.log( $(this).val() );
    // });

    // $('#nome').bind('keydown', function(){
    //     console.log('Apertou');
    // });

    // $('#email').bind('keyup', function(e){
    //     console.log(e.keyCode);
    // }); 

    $('#txt').bind('keydown', function(e){
        if(e.keyCode == 13){
            var txt = $(this).val();
            console.log(txt);
            $(this).val('');
        }
    });
});