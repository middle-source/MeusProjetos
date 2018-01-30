<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <meta name = "X-UA-Compatible" content = "ie-edge" />
        <title>Aula 02 - PHP 7</title>
    </head>
    <body>
        <form method = "POST">
            <input type = "text" name = "lblName" />
            <input type = "submit" name = "btnSubmit" value = "Entrar"/>
        </form>
        <br />
        <?php
            if(isset($_POST['lblName'])){
                echo "Bem vindo (a) " . $_POST['lblName'];
            }        
            
        ?>
    </body>
</html>

