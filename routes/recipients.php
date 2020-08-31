<?php

    use \Api\Page;
    use Api\Controller\User;

    $app->get('/recipients', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('recipients');
    });

    $app->get('/recipients/new', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('newRecipient');
    });