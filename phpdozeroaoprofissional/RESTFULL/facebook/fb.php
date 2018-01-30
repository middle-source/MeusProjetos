<?php 
    session_start();
    require 'Facebook/autoload.php';

    $fb = new Facebook\Facebook([
        'app_id' => '142031726467147',
        'app_secret' => '89308c69f1356ea3ec18073a0ff98ad3',
        'default_graph_version' => 'v2.11'
    ]);
?>