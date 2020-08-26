<?php
    require_once "vendor/autoload.php";
    
    $app = new \Slim\App();

    /* $app->get('/login', function(){

    }); */

    $app->get('/templates', function ($req, $res) {
        $res->write("Templates");
    });

    $app->get('/recipients', function ($req, $res) {
        $res->write("Endereços");
    });

    $app->run();
?>
