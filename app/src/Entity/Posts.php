<?php 

class Posts 
{
    private int $id;
    private string $title;
    private string $content;
    private int $user_id;
    private string $image;
    private string $datetime;


    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getImage() : string
    {
        return $this->image;
    }
    public function getDateTime(): string
    {
        return $this->datetime;
    }


    public function setId(int $id): int
    {
        return $this->id = $id;
    }

    public function setTitle(string $title): string

    {
        return $this->title = $title;
    }

    public function setContent(string $content):string
    {
        return $this->content = $content;
    }

    public function setUserId(int $user_id):int
    {
        return $this->user_id = $user_id;
    }
    
    public function setImage(string $image):string
    {
        return $this->image = $image;
    }
    

    public function setDateTime(string $datetime):string

    {
        return $this->datetime = $datetime;
    }

}







?>