<?php

namespace App\Controller;

use App\Manager\PostManager;
use App\Factory\PDOFactory;
use App\Entity\Post;

class PostController extends AbstractController
{

    public function ajouterPost()
    {
        include dirname(__DIR__, 1) . '/views/ajt-post.php';
    }

    public function homepage()
    {
        $manager = new PostManager(new PDOFactory());
        $Post = $manager->getAllPost();
        $this->render("homepage.php", ["Post" => $Post], "Tous les Post");
        // include dirname(__DIR__, 1) . '/views/homepage.php';
    }

    public function homepageAdmin()
    {
        include dirname(__DIR__, 1) . '/views/homepage-admin.php';
    }
}
