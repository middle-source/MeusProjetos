<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>jQuery - Aula 18</title>
        <style>
            .fundoVermelho{background-color: #f00;}
            .focado{background-color: #4d9;}
        </style>
    </head>
    <body>

    <form method = "POST" id = "form">
        Nome: <br />
        <input type = "text" id = "nome" name = "nome" /> <br /><br />
        E-mail: <br />
        <input type = "email" id = "email" name = "email" /><br /><br />
        Idade: <br />
        <select id = "idade" name = "idade">
            <option value = "10">10 Anos</option>
            <option value = "20">20 Anos</option>
            <option value = "30">30 Anos</option>
            <option value = "50">50 Anos</option>
        </select>

        <input type = "submit" value = "Enviar" />
    </form>

        <input type = "text" id = "txt" />

        <script src = "./js/jquery-3.3.1.min.js"></script>
        <script src = "./js/script_18.js"></script>
    </body>
</html>
