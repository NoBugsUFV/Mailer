<?php
    session_start();

    require_once "vendor/autoload.php";
    require_once "config/config.php";
    require_once "./env.php";
    
    use\Slim\App;
    use Api\Page;
    use Api\Controller\User;

    $app = new App($c);

    require_once "utils/functions.php";
    require_once "routes/login.php";
    require_once "routes/templates.php";
    require_once "routes/recipients.php";

    $app->run();
?>
