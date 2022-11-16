<?php

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
        $this->id = $id;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): string
    {
        $this->content = $content;
        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): int
    {
        $this->userId = $userId;
        return $this;
    }

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): int
    {
        $this->postId = $postId;
        return $this;
    }

    public function getComId(): int
    {
        return $this->comId;
    }

    public function setComId(int $comId): int
    {
        $this->comId = $comId;
        return $this;
    }

    public function getDateTIme(): string
    {
        return $this->dateTime;
    }

    public function setDateTime(string $dateTime): string
    {
        $this->dateTime = $dateTime;
        return $this;
    }
}

?>