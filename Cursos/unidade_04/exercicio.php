<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie-edge" />
        <link rel = "stylesheet" href = "./_css/style.css" />
        </head>

    <body>
        <button id = "botao">Carregar</button>
        <button id = "fechar">Fechar</button>

        <div id = "listagem"></div>
        <script src = "./jquery.js"></script>
        <script>
        $('button#botao').click(function() {
            carregaDados();
        });
        
        $('button#fechar').click(function(){
            fecharDados();
        });

        function carregaDados() {
            $('#listagem').css('display', 'block');
            $.ajax({
                url: '_xml/produtos.xml'
            }).then(sucesso, falha);

            function sucesso(arquivo) {
                // console.log($(arquivo).find('produto').find('nomeproduto').text());
            
                var elemento;
                elemento = "<ul>";
                 $(arquivo).find('produto').each(function(){
                     var nome = $(this).find('nomeproduto').text();
                     var preco = $(this).find('precounitario').text();
                     elemento += "<li class = 'nome'>" + nome  + "</li>";
                     elemento += "<li class = 'preco'> R$" + preco + "</li>";
                 });
                elemento += "</ul>";
            
                 $('div#listagem').html(elemento);
            }

            function falha() {

            }
        }

        
        function fecharDados() {
            $('#listagem').css('display', 'none');
        }
        </script>
    </body>
</html>