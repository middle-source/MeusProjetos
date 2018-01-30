<?php
    function Ola($Nome) {
        echo "Meu nome $Nome <br />";
    }

    ola("Allan");
    ola("Jeniffer");
    ola("Daniela");
    ola("Lethycia");
    ola("Ana Raquel");


    echo "<br />";
    echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
    echo "<br />";

    function salario() {
        return 946.00;
    }

    echo "José recebeu 3 salarios: " . (salario() * 3 ); 
    
?>