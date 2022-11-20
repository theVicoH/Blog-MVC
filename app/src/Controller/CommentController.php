<?php

namespace App\Controller;

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
}
