<?php
    require_once "vendor/autoload.php";

    use Api\Page;

    //-------- Configuração de produção ---------

    $configuration = [
        'settings' => [
            'displayErrorDetails' => true,
        ],
    ];
    $c = new \Slim\Container($configuration);

    //-------------------------------------------

    $app = new \Slim\App($c);

    $app->get('/login', function(){

        $page = new Page([
            'header'=> false,
            'footer' => false,
        ]);
        $page->setTpl('login');
    });

    $app->get('/templates', function () {
        $page = new Page();
        $page->setTpl('templates');
    });

    $app->get('/recipients', function ($req, $res) {
        $page = new Page();
        $page->setTpl('recipients');
    });

    $app->run();
?>
