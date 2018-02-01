<?php
// Enteroperavel
    spl_autoload_register(function($nameClass){
        $dirClass = "class";
        $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".class.php";
        if(file_exists($fileName)) {
            require_once($fileName);
        }
    });

?>