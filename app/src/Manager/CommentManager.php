<?php


namespace App\Manager;

use App\Entity\Comment;
use App\Factory\PDOFactory;
use App\Interfaces\Database;

class CommentManager extends BaseManager
{
    public function getAllComment(): array
    {
        $query = $this->pdo->query("SELECT * FROM Comment");

        $Comment = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $Comment[] = new Comment($data);
        }

        return $Comment;
    }

    public function getCommentById(int $id): ?Comment
    {
        $query = $this->pdo->query("SELECT * FROM Comment WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();

        $Comment = [];

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Comment($data);
    }

    public function deleteComment(int $id)
    {
        $query = $this->pdo->query("DELETE * FROM Comment WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
    }
}
