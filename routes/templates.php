<?php

    use \Api\Page;
    use Api\Controller\User;

    $app->get('/', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('templates');
    });

    $app->get('/templates', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('templates');
    });

    $app->get('/templates/new', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('uploadFile');
    });