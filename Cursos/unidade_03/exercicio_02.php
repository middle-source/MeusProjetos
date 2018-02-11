<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <style>
        
        </style>

    </head>

    <body>
        <div id = "nome"></div>

        <script src = "./jquery.js"></script>
        <script>
            $.ajax({
                url: 'nome.php'
            }).then(sucesso, falha);

            function sucesso(nome) {
                $('div#nome').html(nome);
            }   

            function falha() {
                $('div#nome').html('Falha no carregamento ! ');
            }
        </script>
    </body>
</html>