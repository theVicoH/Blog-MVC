<?php

namespace App\Controller;

use Datetime;

use App\Manager\PostManager;
use App\Factory\PDOFactory;
use App\Entity\Post;

class PostController extends AbstractController
{

    public function ajouterPost()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include dirname(__DIR__, 1) . '/views/ajt-post.php';
            exit;
        }

        $title = $_POST['title'];
        $content = $_POST['content'];
        $file = $_FILES;

        move_uploaded_file($_FILES['file']['tmp_name'], dirname(__DIR__, 2) . '/uploads/' . $_FILES['file']['name']);
        $datetime = new \DateTime();

        $newPost = (new Post())
                ->setTitle($title)
                ->setContent($content)
                ->setImage( '/uploads/' . $_FILES['file']['name'])
                ->setDatetime($datetime);

        $manager = new PostManager(new PDOFactory());
        $manager->insertPost($newPost);


        header('Location: /homepage');
            exit;
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
