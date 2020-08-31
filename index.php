<?php
    session_start();

    require_once "vendor/autoload.php";
    require_once "config/config.php";
    
    use\Slim\App;
    use Api\Page;
    use Api\Controller\User;

    $app = new App($c);

    require_once "routes/login.php";
    require_once "routes/templates.php";
    require_once "routes/recipients.php";

    $app->run();
?>
