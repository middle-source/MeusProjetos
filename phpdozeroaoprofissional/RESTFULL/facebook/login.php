<?php
    require 'fb.php';
    $Helper = $fb -> getRedirectLoginHelper();
    $Permissions = array('email');

    $LoginUrl = $Helper -> getLoginUrl('http://localhost/Cursos/phpdozeroaoprofissional/RESTFULL/facebook/callback.php', $Permissions);

?>

<a href = "<?= htmlspecialchars($LoginUrl); ?>">Fazer Login com Facebook</a>