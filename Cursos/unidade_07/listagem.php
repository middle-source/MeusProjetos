<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
     
    </head>

    <body>


        <script>
            function retornarProdutos(data) {
                console.log(data[0]);
            }
        </script>
        <script src = "http://localhost/cursos/Cursos/unidade_07/gerar_json.php?callback=retornarProdutos" ></script>
    </body>
</html>