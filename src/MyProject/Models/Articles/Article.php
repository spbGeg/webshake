<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 19.03.2020
 * Time: 12:19
 */


namespace MyProject\Models\Articles;
use MyProject\Models\Users\User;

class Article
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author){
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }


}