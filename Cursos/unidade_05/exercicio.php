<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link rel = "stylesheet" href = "./_css/estilo.css" />
    </head>

    <body>
        <button id = "btn">Carregar JSON</button>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>

            $('button#btn').click(function(){
                $('#listagem').css('display', 'block');
                carregarDados();
            });


        function carregarDados() {
 

            $.getJSON('_json/produtos.json', function(valor){
                // console.log(valor);

                elemento = "<ul>";

                $.each(valor, function(i, valor) {
                    // console.log(valor.nomeproduto);
                    elemento += "<li class = 'nome'>" + valor.nomeproduto + "</li>";
                    elemento += "<li class = 'preco' >" + valor.precounitario + "</li>";
                
                });
                elemento += "</ul>";

                $('div#listagem').html(elemento);
            });
        }
        </script>
    </body>
</html>