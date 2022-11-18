<?php

use App\Entity\Users;

require_once "vendor/autoload.php";

$user = new Users();
// var_dump($user);

switch ($_SERVER["REQUEST_URI"]) {

    case "/bonjour":
        $method = new \App\Controller\BjrController();
        $method->bonjour();
        break;

    case "/":
        break;

    case "/login":
        $method = new \App\Controller\LoginController();
        $method->login();
        break;


    case "/register":
        $method = new \App\Controller\RegisterController();
        $method->register();
        break;


    case "/homepage":
        $method = new \App\Controller\HomePageController();
        $method->homepage();
        break;

    case "/homepage-admin":
        $method = new \App\Controller\HomePageAdminController();
        $method->homepageAdmin();
        break;

    case "/voir-post":
        // voir une autre manière
        // /voir-post?id=1
        break;

    case "/ajouter-post":
        break;

    case "/show-users":
        break;

    default:
        echo 'ça existe po cette page chef ...';
}

// faire un controlleur.php
// faire méthod pour aficher du contenue depuis les views
// faire une view -->