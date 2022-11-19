<?php

namespace App\Manager;

use Datetime;
use App\Entity\Post;
use App\Factory\PDOFactory;
use App\Interfaces\Database;

class PostManager extends BaseManager
{

    // récupére tous les Post
    public function getAllPost(): array
    {
        $query = $this->pdo->query("SELECT * FROM Post");
        $query->execute();

        $Post = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $Post[] = new Post($data);
        }

        return $Post;
    }


    // récupére un post par son id
    public function getPostById(int $id): ?Post
    {
        $query = $this->pdo->query("SELECT * FROM Post WHERE id= :id");
        $query->bindValue('id', $id);
        $query->execute();

        $post = [];

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Post($data);
    }

    // supprime le post avec son id
    public function deletePost(int $id)
    {
        $query = $this->pdo->query("DELETE * FROM Post WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
    }

    // ajoute un post
    public function InsertPost(Post $post): void
    {
        $query = $this->pdo->prepare("INSERT INTO Post (title, content, image, user_id, datetime) VALUES (:title, :content, :image, :user_id, STR_TO_DATE(:datetime, '%d/%m/%Y %H:%i:%s'))");
        $query->bindValue('title', $post->getTitle());
        $query->bindValue('content', $post->getContent());
        $query->bindValue('image', $post->getImage());
        $query->bindValue('datetime', $post->getDatetime()->format('d/m/Y H:i:s'));
        $query->bindValue('user_id', $post->getUserId() ?? 1, \PDO::PARAM_INT);
        $query->execute();
    }
}
