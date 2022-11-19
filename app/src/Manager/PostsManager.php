<?php

namespace App\Manager;

use Datetime;
use App\Entity\Posts;
use App\Factory\PDOFactory;
use App\Interfaces\Database;

class PostsManager extends BaseManager
{

    // récupére tous les posts
    public function getAllPosts(): array 
    {
        $query = $this->pdo->query("SELECT * FROM Post");

        $posts = [];

        while($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $posts[] = new Posts($data);
        }

        return $posts;
    }


    // récupére un post par son id
    public function getPostById(int $id): ?Posts
    {
        $query = $this->pdo->prepare("SELECT * FROM Post WHERE id= :id");
        $query->bindValue('id', $id);
        $query -> execute();

        $post = [];

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Posts($data);
        
    }


    // récupére tous les posts d'un user

    // public function getPostByUser(int $user_id): array
    // {
    //     $query = $this->pdo->query("SELECT * FROM Posts WHERE user_id = :user_id");
    //     $query->bindValue('user_id', $posts->getUserId());
    //     $query -> execute();

    //     $posts = [];

    //     while($data = $query->fetch(\PDO::FETCH_ASSOC)) {
    //         $posts[] = new Posts($data);
    //     }

    //     return $posts;
    // }


    // supprime le post avec son id
    public function deletePost(int $id)
    {
        $query = $this->pdo->prepare("DELETE * FROM Post WHERE id = :id");
        $query->bindValue('id', $id);
        $query -> execute();
    }

    // ajoute un post
    public function InsertPost(Posts $posts): void
    {
        $query = $this->pdo->prepare("INSERT INTO Post (title, content, image, user_id, datetime) VALUES (:title, :content, :image, :user_id, STR_TO_DATE(:datetime, '%d/%m/%Y %H:%i:%s'))");
        $query->bindValue('title', $posts->getTitle());
        $query->bindValue('content', $posts->getContent());
        $query->bindValue('image', $posts->getImage());
        $query->bindValue('datetime', $posts->getDatetime()->format('d/m/Y H:i:s'));
        $query->bindValue('user_id', $posts->getUserId() ?? 1, \PDO::PARAM_INT);
        $query->execute();
    }





}