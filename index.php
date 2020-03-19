<?php

//require_once __DIR__ . '/src/MyProject/Models/Users/User.php';
//require_once __DIR__ . '/src/MyProject/Models/Articles/Article.php';
function myAutoLoader(string $className){
    //var_dump($className);
    require_once __DIR__ . '/src/' . $className . '.php';
}

spl_autoload_register('myAutoLoader');




$author = new MyProject\Models\Users\User('Nike', 'admin');
$article = new MyProject\Models\Articles\Article('Заголово', 'Текст', $author);
echo 'Имя автора ' . $article->getAuthor()->getName();
//var_dump($article);

