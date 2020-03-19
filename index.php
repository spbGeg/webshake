<?php


class User
{
    private $name;
    private $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Cat
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}

class Admin extends User
{

}

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


$author = new Admin('Nike', 'admin');
$author2 = new Cat('Барсик');
$article = new Article('Заголово', 'Текст', $author);
echo 'Имя автора ' . $article->getAuthor()->getName();
//var_dump($article);

