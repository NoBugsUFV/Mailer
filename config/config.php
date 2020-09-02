<?php

    $configuration = [
        'settings' => [
            'displayErrorDetails' => true,
            'determineRouteBeforeAppMiddleware' => true,
            'displayErrorDetails' => true,
            'addContentLengthHeader' => false,
        ],
    ];
    $c = new \Slim\Container($configuration);