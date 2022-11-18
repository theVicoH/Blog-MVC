<?php
namespace App\Controller;

class PostsController {
    
    public function afficherPage()
    {
        include dirname(__DIR__, 1) . '/views/ajt-post.php';
    }
}