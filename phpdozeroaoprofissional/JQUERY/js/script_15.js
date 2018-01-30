$(function(){
    $('#btn-1').bind('click', function(){
        $('#btn-2').trigger('click');
    });

    $('#btn-2').bind('click', function(){
        alert('Clicou Botão 2');
     });
});