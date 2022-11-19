<?php
namespace PHPHttpServerRouter\Controller;

use PHPHttpServerRouter\Router\Attributes\Route;

class HomeController
{
    #[Route("/")]
    public function home(): void
    {
        include dirname(__DIR__) . "/View/home.php";
    }

    #[Route("/about")]
    public function about(): void
    {
        echo "about";
    }
}