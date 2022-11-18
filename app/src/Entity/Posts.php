<?php 

namespace App\Entity;



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




    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle(string $title): self

    {
        $this->title = $title;
        return $this;
    }

    public function setContent(string $content):self
    {
        $this->content = $content;
        return $this;
    }

    public function setUserId(int $user_id):self
    {
        $this->user_id = $user_id;
        return $this;
    }
    
    public function setImage(string $image):self
    {
        $this->image = $image;
        return $this;
    }
    
    public function setDateTime(string $datetime):self

    {
        $this->datetime = $datetime;
        return $this;
    }

}
?>