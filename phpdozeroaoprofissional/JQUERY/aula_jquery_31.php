<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>jQuery - Aula 31</title>
        <style>
            body{margin: 0;}
            .horaescolha{width: 100px; height: 100px; background-color: #999; color: #fff; position: absolute; display: none; }
        </style>
    </head>
    <body>
        Selecione uma hora disponivel: <br />
        Hora 01: <input type = "text" name = "hora1" /><br /><br />
        Hora 02: <input type = "text" name = "hora2" /><br /><br />
        Hora 03: <input type = "text" name = "hora3" /><br /><br />
        Hora 04: <input type = "text" name = "hora4" />

        <div class = "horaescolha">
            <button>12:00</button>
            <button>13:00</button>
            <button>14:00</button>
            <button>15:00</button>
        </div>

        <script src = "./js/jquery-3.3.1.min.js"></script>
        <script src = "./js/script_31.js"></script>
    </body>

</html>