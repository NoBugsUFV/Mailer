<?php
    session_start();
    require_once "vendor/autoload.php";

    use Api\Page;
    use Api\Controller\User;

    //-------- Configuração de produção ---------

    $configuration = [
        'settings' => [
            'displayErrorDetails' => true,
            'determineRouteBeforeAppMiddleware' => true,
            'displayErrorDetails' => true,
            'addContentLengthHeader' => false,
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

    $app->get('/templates/new', function () {
        User::verifyLogin();
        $page = new Page();
        $page->setTpl('uploadFile');
    });

    $app->run();
?>
