<?php
namespace App\Controller;



use Datetime;

use App\Manager\CommentManager;
use App\Factory\PDOFactory;
use App\Entity\Comment;

class CommentController extends AbstractController
{

    public function showComment(){
        $commentManager = new CommentManager(new PDOFactory());
        $Comment = $commentManager->getAllComment();
        return $Comment;
    }
    
    public function ajouterCommentaire()
    {
        session_start();
        $id = $_SESSION['id'];
        
        if(!empty($_POST['comment'])) {
            $comment = $_POST['comment'];
            $postId = $_POST['postId'];
            
            if($_POST['comId'] == "null") {
                $comId = null;
            } else {
                $comId = (int)$_POST['comId'];
            }
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
        header('Location: /homepage');
    }



    public function deleteComment()
    {
        if(isset($_POST['submit_delete']) && isset($_POST['comId']) ) {
            $id = (int)$_POST['comId'];
            $manager = new CommentManager(new PDOFactory());
            $manager->deleteComment($id);
            // var_dump($id);die;
        }
    }

    public function editComment(){
        if(isset($_POST['editCommentId']) && isset($_POST['editComment']) && isset($_POST['editCommentContent'])) {
            $id = (int)$_POST['editCommentId'];
            $content = $_POST['editCommentContent'];
            $newPost = (new Comment())
                ->setId($id)
                ->setContent($content);
            $manager = new CommentManager(new PDOFactory());
            $manager->editComment($newPost);
            header('Location: /homepage');

        } else if(isset($_POST['editRespondId']) && isset($_POST['editRespond']) && isset($_POST['editRespondContent'])) {
            $id = (int)$_POST['editRespondId'];
            $content = $_POST['editRespondContent'];
            $newPost = (new Comment())
                ->setId($id)
                ->setContent($content);
            $manager = new CommentManager(new PDOFactory());
            $manager->editComment($newPost);
            header('Location: /homepage');

        }
    }


}
