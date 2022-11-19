<?php

namespace App\Manager;

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


    // récupére tous les Post d'un user

    // public function getPostByUser(int $user_id): array
    // {
    //     $query = $this->pdo->query("SELECT * FROM Post WHERE user_id = :user_id");
    //     $query->bindValue('user_id', $Post->getUserId());
    //     $query -> execute();

    //     $Post = [];

    //     while($data = $query->fetch(\PDO::FETCH_ASSOC)) {
    //         $Post[] = new Post($data);
    //     }

    //     return $Post;
    // }


    // supprime le post avec son id
    public function deletePost(int $id)
    {
        $query = $this->pdo->query("DELETE * FROM Post WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
    }

    // ajoute un post
    public function InsertPost(Post $Post): void
    {
        $query = $this->pdo->query("INSERT INTO Post (title, content, image, user_id) VALUES (:title, :content, :image, :user_id");

        $query->bindValue('title', $Post->getTitle());
        $query->bindValue('content', $Post->getContent());
        $query->bindValue('image', $Post->getImage());

        $query->bindValue('user_id', $Post->getUserId());

        $query->execute();
    }
}
