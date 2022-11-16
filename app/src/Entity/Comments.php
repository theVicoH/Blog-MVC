<?php

class Comments{

    private string $content;
    private string $dateTime;


    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): string
    {
        $this->content = $content;
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