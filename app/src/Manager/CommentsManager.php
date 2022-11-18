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

    public function getCommentsById(int $id): ?Comments
    {
        $query = $this->pdo->query("SELECT * FROM Comments WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();

        $comments = [];

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Comments($data);
        
    }

    public function deleteComments(int $id)
    {
        $query = $this->pdo->query("DELETE * FROM Comments WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
    }



}