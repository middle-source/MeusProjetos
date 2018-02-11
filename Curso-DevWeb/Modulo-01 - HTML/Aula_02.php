<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <meta name = "author" content = "Allan Cristian" />
        <meta name = "generator" content = "VisualStudio" />
        <meta name = "keywords" content = "HTML5, Curso HTML, Curso Front End, CSS" />
        <meta name = "description" content = "Pagina o curso de HTML5" />
        <meta name = "application-name" content = "Selftech" />
        <meta http-equiv = "refresh" content = "3" />
        <title>Aula - 02</title>
        <style>
            *{margin: 0; padding: 0;}
        </style>
        <script>
            function SorteioNumero() {
                sorteio.innerHTML = Math.round(Math.random() * 50);
            }            

            window.onload = SorteioNumero;
        </script>        
    </head>

    <body>
            <div id = "sorteio"></div>
    </body>

    
</html>