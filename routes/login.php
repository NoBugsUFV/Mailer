<?php

    use \Api\Page;
    use Api\Controller\User;

    $app->get('/login', function(){
            
        $page = new Page([
            'header'=> false,
            'footer' => false,
        ]);
        $page->setTpl('login');
    });

    $app->post('/login', function(){
        User::login($_POST["email"], $_POST["password"]);
        $_SESSION["user"] = "teste";
        header("Location: /templates");
        exit;
    });

    $app->get('/logout', function(){
        User::logout();
        header("Location: /login");
        exit;
    });