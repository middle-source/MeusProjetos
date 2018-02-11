<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <style></style>

    </head>
    <body>
        <div id = "nome"></div>
        <div id = "mensagem"></div>
        <script src = "./jquery.js"></script>
        <script>
            $.ajax({
                url: 'nome.php'
            }).done(function(valor) {
                $('#nome').html(valor);
            }).fail(function(){
                $('#nome').html("Falha no carregamento ! ");
            }).always(function(){  
                $('#mensagem').html("Mensagem de qualquer coisa !" );

            });
        </script>
    </body>


</html>