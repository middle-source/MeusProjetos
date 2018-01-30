<?php
    function ola($Nome, $Idade) {
        return "Olá Mundo $Nome. <br /> E tenho $Idade anos. <br /><br />";
    }

    echo ola("Allan", 22);
    echo ola("João", 33);
    echo ola("Matheus", 21);
    echo ola("Jeniffer", 20);

    echo "<br />";
    echo "-------------------------------------";
    echo "<br />";

    function Hello() {
        $Args = func_get_args();
        return $Args;
    }

    var_dump(Hello("Boa Tarde", "Allan Cristian", 10));


?>