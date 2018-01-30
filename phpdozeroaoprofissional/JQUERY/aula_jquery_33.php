<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>jQuery - Aula 33</title>
        <style>
            *{margin: 0; padding: 0;}
            .placar{width: 100px; height: 100px; position: fixed; top: 0; left: 0; background-color: #ddd; text-align: center;}
            #placar{font-size: 50px;} 
            .bola{width: 50px; height: 50px; border-radius: 25px; background-color: #000; position: absolute;}
        </style>
    </head>
    <body>
        <div class = "placar">
        Bolas Estouradas: <br />
            <span id = "placar">0</span>
            <button id = "comecar">Começar o Jogo</button>
        </div>

        <script src = "./js/jquery-3.3.1.min.js"></script>
        <script src = "./js/script_33.js"></script>
    </body>

</html>