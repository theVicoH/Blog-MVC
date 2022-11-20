<?php
namespace App\Controller;

use Datetime;
use App\Manager\CommentManager;
use App\Factory\PDOFactory;
use App\Entity\Comment;

class CommentController extends AbstractController
{
    public function ajouterCommentaire()
    {
        session_start();
        $id = $_SESSION['id'];
        $comment = $_POST['comment'];
        $postId = $_POST['postId'];
        $comId = null;
        $datetime = new \DateTime();

        $newComment = (new Comment())
                ->setContent($comment)
                ->setUserId($id)
                ->setPostId($postId)
                ->setComId($comId)
                ->setDatetime($datetime);

        $manager = new CommentManager(new PDOFactory());
        $manager->insertComment($newComment);
        header('Location: /homepage');
    }
}
