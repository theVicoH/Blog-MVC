<?php

namespace App\Manager;

use App\Entity\Comments;
use App\Factory\PDOFactory;
use App\Interfaces\Database;

class CommentsManager extends BaseManager
{
    public function getAllComments(): array 
    {
        $query = $this->pdo->query("SELECT * FROM Comments");

        $comments = [];

        while($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $comments[] = new Comments($data);
        }

        return $comments;
    }




}

?>