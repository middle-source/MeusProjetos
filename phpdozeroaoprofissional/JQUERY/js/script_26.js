$(function(){
    $('#form').bind('submit', function(e){
        e.preventDefault();
        var txt = $(this).serialize();
        console.log(txt);

        $.ajax({
            type: 'POST' , // Existe o Method GET
            url: 'soma_aula_26.php',
            data : txt,
            success: function(resultado){
                $('.div').html("Resultado : " + resultado);
            },
            error : function(){
                alert('Ocorreu um Erro ! ');
            }
        });
    });
});