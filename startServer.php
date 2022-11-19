<?php
chdir(__DIR__. "/public/");

require "../vendor/autoload.php";


PHPHttpServerRouter\Router\RouterInitializer::getInstance(autoStart: true);

exec("php -S localhost:8000 -t ./ ./router.php");