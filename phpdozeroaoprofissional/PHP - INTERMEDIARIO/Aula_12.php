
<form method = "post">
    <input type = "text" name = "usuario" />
    <input type = "submit" name = "btn" />
</form>
<?php

    if(isset($_POST['btn'])){
        $autor = $_POST['usuario'];
        $autor = addslashes($autor);
        $sql = "SELECT * FROM posts WHERE autor = '{$autor}' or 1=1";

        echo $sql;
    }
?>