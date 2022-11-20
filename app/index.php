<?php

use App\Entity\User;

require_once "vendor/autoload.php";

switch ($_SERVER["REQUEST_URI"]) {

    case "/":
        break;

    case "/login":
        $method = new \App\Controller\UserController();
        $method->login();
        break;


    case "/register":
        
        $method = new \App\Controller\UserController();
        $method->register();
        break;

    case "/homepage":
        $method = new \App\Controller\PostController();
        $method->homepage();
        break;

    case "/homepage-admin":
        $method = new \App\Controller\PostController();
        $method->homepageAdmin();
        break;

    case "/voir-post":
        // voir une autre manière
        // /voir-post?id=1
        break;

    case "/ajouter-post":
        $method = new \App\Controller\PostController();
        $method->ajouterPost();
        break;

    case "/show-User":
        $method = new \App\Controller\UserController();
        $method->afficherUser();
        break;

    default:
        echo 'ça existe po cette page chef ...';
}
