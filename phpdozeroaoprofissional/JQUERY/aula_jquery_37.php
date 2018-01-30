<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8' />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>jQuery - Aula 37</title>
        <style>
            .bg-box{position: fixed; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); display: none; }
            .div-box{position: fixed; left: 50%; top: 50%; width: 500px; height: 400px; background-color: #fff; margin-left: -270px; margin-top: -220px; padding: 20px; display: none; }
        </style>
    </head>
    <body>
        <a href = "javascript:;" class = "galery"><img src = "./img/img-01.png" border = "0" width = "150" /></a>
        <a href = "javascript:;" class = "galery" ><img href = "javascript:;" src = "./img/img-02.png" border = "0" width = "150" /></a>

        <div class = "bg-box"></div>
        <div class = "div-box">
            <img src = "" border = "0" width: "100%" /> <br />
            <button>Fechar</button>
        </div>
        <script src = "./js/jquery-3.3.1.min.js"></script>
        <script src = "./js/script_37.js"></script>
    </body>
</html>