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
        // comment gérer l'index par exemple quand je met qql chose 

    case "/login":
        break;

    case "/register":
        break;

    case "/homepage":
        break;

    case "/homepage-admin":
        break;

    case "/voir-post":
        // voir une autre manière
        // /voir-post?id=1
        break;

    case "/ajouter-post":
        $method = new \App\Controller\PostsController();
        $method->afficherPage();
        break;

    case "/show-users":
        $method = new \App\Controller\UsersController();
        $method->afficherPage();
        break;

    default:
        echo 'ça existe po cette page chef ...';
}

// faire un controlleur.php
// faire méthod pour aficher du contenue depuis les views
// faire une view -->