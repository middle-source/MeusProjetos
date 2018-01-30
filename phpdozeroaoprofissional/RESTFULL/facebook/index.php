<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0" />
        <meta name = "X-UA-Compatible" content = "ie=edge" />
        <title>RestFull - Facebook</title>
    </head>

    <body>
    
    
    
    </body>
</html> -->

<?php
    require 'fb.php';
    if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_tokem'])) {
        echo "Logado ! ";
    } else{
        header("Location: login.php");
    }
?>