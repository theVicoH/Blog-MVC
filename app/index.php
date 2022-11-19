<?php

// mettre session start(); ici

// moment login mettre ça au bon endroit
// $_SESSION['id'] = user->getId();
// user === mon objet

use App\Entity\Users;

require_once "vendor/autoload.php";

switch ($_SERVER["REQUEST_URI"]) {

    case "/":
        break;

    case "/login":
        $method = new \App\Controller\UsersController();
        $method->login();
        break;


    case "/register":
        $method = new \App\Controller\UsersController();
        $method->register();
        break;


    case "/homepage":
        $method = new \App\Controller\PostsController();
        $method->homepage();
        break;

    case "/homepage-admin":
        $method = new \App\Controller\PostsController();
        $method->homepageAdmin();
        break;

    case "/voir-post":
        // voir une autre manière
        // /voir-post?id=1
        break;

    case "/ajouter-post":
        $method = new \App\Controller\PostsController();
        $method->ajouterPost();
        break;

    case "/show-users":
        $method = new \App\Controller\UsersController();
        $method->afficherUsers();
        break;

    default:
        echo 'ça existe po cette page chef ...';
}