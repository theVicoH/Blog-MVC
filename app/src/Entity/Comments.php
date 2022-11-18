<?php


namespace App\Entity;
class Comments{

    private int $id;
    private string $content;
    private int $userId;
    private int $postId;
    private int $comId;
    private string $dateTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): int
    {
        return  $this->id = $id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): string
    {
        return $this->content = $content;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): int
    {
        return $this->userId = $userId;
    }

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): int
    {
        return $this->postId = $postId;
    }

    public function getComId(): int
    {
        return $this->comId;
    }

    public function setComId(int $comId): int
    {
        
        return $this->comId = $comId;
    }

    public function getDateTIme(): string
    {
        return $this->dateTime;
    }

    public function setDateTime(string $dateTime): string
    {
        return $this->dateTime = $dateTime;
    }
}

?>