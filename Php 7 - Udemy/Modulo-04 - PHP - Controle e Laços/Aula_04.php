
<form>
    <input type = "text" name = "Nome" />
    <input type = "date" name = "Nascimento" />
    <input type = "submit" value = "OK" />
</form>

<?php

    // $Meses = array(
    //     "Janeiro",
    //     "Fevereiro",
    //     "Março",
    //     "Abril",
    //     "Maio",
    //     "Junho",
    //     "Julho",
    //     "Agosto",
    //     "Setembro",
    //     "Outubro",
    //     "Novembro",
    //     "Dezembro"
    // );

    // foreach($Meses as $index => $mes) {
    //     echo "Indice é: " . $index . "<br />";
    //     echo "O mês é: " . $mes . "<br />";
    // }


    if(isset($_GET)){
        foreach($_GET as $key => $value) {
            echo "Nome do campo: " . $key . "<br />";
            echo "Valor do Campo: " . $value . "<br />";
            echo "<hr>";
        }
    }

?>