<?php
namespace App\Controller;

use Datetime;

use App\Manager\PostManager;
use App\Factory\PDOFactory;
use App\Entity\Post;

class PostController extends AbstractController {
    
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
    }

    public function homepage()
    {   
        session_start();
        $postManager = new PostManager(new PDOFactory());
        $Post = $postManager->getAllPost();
        // var_dump($_SESSION['username']);
        $this->deconnexion();
        $this->render("homepage.php", ["Post" => $Post]);
    }

    public function homepageAdmin()
    {
        include dirname(__DIR__, 1) . '/views/homepage-admin.php';
    }
}