<?php
    require_once "vendor/autoload.php";
    
    $app = new \Slim\App();

    $app->get('/', function ($req, $res) {
        $res->write("Teste!");
    });

    $app->run();
?>
