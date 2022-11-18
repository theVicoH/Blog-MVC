<?php
namespace App\Controller;

use App\Manager\PostsManager;
use App\Factory\PDOFactory;
use App\Entity\Posts;

class PostsController extends AbstractController {
    
    public function ajouterPost()
    {
        include dirname(__DIR__, 1) . '/views/ajt-post.php';
    }

    public function homepage()
    {
        $manager = new PostsManager(new PDOFactory());
        $posts = $manager->getAllPosts();
        $this->render("homepage.php", ["posts" => $posts], "Tous les posts");
        // include dirname(__DIR__, 1) . '/views/homepage.php';
    }

    public function homepageAdmin()
    {
        include dirname(__DIR__, 1) . '/views/homepage-admin.php';
    }
}