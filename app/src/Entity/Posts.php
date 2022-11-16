<?php 

abstract class Posts 
{
    protected int $id;
    protected string $title;
    protected string $content;
    protected int $user_id;
    protected string $image;
    protected string $datetime;


    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title
    }
    public function getContent(): string
    {
        return $this->content
    }
    public function getUserId(): id
    {
        return $this->user_id
    }
    public function getImage() : string
    {
        return $this->image
    }
    public function getDateTime(): string
    {
        return $this->datetime
    }




    public function setId(int $id):int
    {
        $this->id = $id;
    }

    public function setId(string $title):string
    {
        $this->title = $title;
    }

    public function setId(string $content):string
    {
        $this->content = $content;
    }

    public function setId(int $user_id):int
    {
        $this->user_id = $user_id;
    }
    
    public function setId(string $image):string
    {
        $this->image = $image;
    }
    
    public function setId(string $datetime):string
    {
        $this->datetime = $datetime;
    }

}







?>