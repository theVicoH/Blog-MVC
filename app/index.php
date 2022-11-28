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
    case "/ajouter-commentaire":
        $method = new \App\Controller\CommentController();
        $method->ajouterCommentaire();
        break;

    case "/afficher-users":
        $method = new \App\Controller\UserController();
        $method->afficherUser();
        break;

    case "/edit":
        $method = new \App\Controller\PostController();
        $method->editPost();
        break;
    


    default:
        echo "Cette page n'existe pas ...";
}
