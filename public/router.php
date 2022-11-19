<?php
ini_set("display_errors", 1);
chdir(__DIR__);

require "../vendor/autoload.php";

if (is_file($_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"]))
{
    if (array_slice(explode('.', $_SERVER["REQUEST_URI"]), -1)[0] == "css")
        header("Content-type: text/css; charset: UTF-8");
    else
        header("Content-type: ". mime_content_type($_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"]) .";");

    include $_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"];
}
else
    \PHPHttpServerRouter\Router\RouterInitializer::getInstance()->listen();

