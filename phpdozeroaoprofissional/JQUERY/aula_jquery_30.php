<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>jQuery - Aula 30</title>
        <style>
            *{margin: 0; padding: 0;}
            .menu{height: 40px; background-color: #000; color: #fff;}
            ul{margin: 0; padding: 0; list-style: none;}
            li{float: left; padding: 0px 20px; line-height: 40px; cursor: pointer;}
            .menu-1{height: 40px;}
            .menu-2{position: absolute; display: none; width: 150px; height: 120px; background-color: #000;}
        </style>
    </head>
    <body>

        <div class = "menu">
            <ul>
                <li>
                    <div class = "menu-1">Home</div>
                        <div class = "menu-2">
                            Opção 01 <br />
                            Opção 02 <br />
                            Opção 03
                        </div>
                </li>
                <li>
                    <div class = "menu-1">Menu 1</div>
                    <div class = "menu-2">
                        Opção 01 <br />
                        Opção 02 <br />
                        Opção 03 
                    </div>
                </li>
                <li>  
                    <div class = "menu-1">Menu 2</div>
                    <div class = "menu-2">
                        Opção 01 <br />
                        Opção 02 <br />
                        Opção 03 
                    </div>
                </li>
                <li>Menu 3</li>
                <li>Menu 4</li>
            </ul>

        </div>


        <script src = "./js/jquery-3.3.1.min.js"></script>
        <script src = "./js/script_30.js"></script>
    </body>

</html>