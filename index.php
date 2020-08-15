<?php
    require 'vendor/autoload.php';

    $app = new \Slim\App();

    $app->get('/', function($req, $res){
        $res->write("Hello!");
    });
    $app->run();    
?>