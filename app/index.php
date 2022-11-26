<?php

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

    case "/ajouter-post":
        $method = new \App\Controller\PostController();
        $method->ajouterPost();
        break;

    case "/afficher-users":
        $method = new \App\Controller\UserController();
        $method->afficherUser();
        break;
    
        // case "/change-role":
        // $method = new App\Controller\UserController();
        // $method->changeRole();

    default:
        echo 'ça existe po cette page chef ...';
}
