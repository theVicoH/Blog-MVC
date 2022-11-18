<?php
namespace App\Controller;

class PostsController extends AbstractController {
    
    public function ajouterPost()
    {
        include dirname(__DIR__, 1) . '/views/ajt-post.php';
    }

    public function homepage()
    {
        include dirname(__DIR__, 1) . '/views/homepage.php';
    }

    public function homepageAdmin()
    {
        include dirname(__DIR__, 1) . '/views/homepage-admin.php';
    }
}