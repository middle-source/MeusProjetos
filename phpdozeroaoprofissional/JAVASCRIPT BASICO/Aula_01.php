<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title>Aula 01 - JAVASCRIPT BASICO</title>
        <script type = "text/javascript">
            function acao(){
                document.getElementById('area').innerHTML = prompt('Qual seu Nome ? ');
            }

            function owner(){
                this.innerHTML = prompt('Nome Button ? ');
            }
        </script>
    </head>
    <body>
        <div id = "area">Alguma coisa...</div>
        <button onclick = "this.innerHTML = prompt('Nome Button ? ');">Fazer a ação</button>
    </body>
</html>