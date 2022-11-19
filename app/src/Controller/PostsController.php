<?php
namespace App\Controller;

use Datetime;

use App\Manager\PostsManager;
use App\Factory\PDOFactory;
use App\Entity\Posts;

class PostsController extends AbstractController {
    
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

        $newPost = (new Posts())
                ->setTitle($title)
                ->setContent($content)
                ->setImage( '/uploads/' . $_FILES['file']['name'])
                ->setDatetime($datetime);

        $manager = new PostsManager(new PDOFactory());
        $manager->insertPost($newPost);


        header('Location: /homepage');
            exit;
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