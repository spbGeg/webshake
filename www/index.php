<?php

function myAutoLoader(string $className){
    //var_dump($className);
    require_once __DIR__ . '/../src/' . $className . '.php';
}

spl_autoload_register('myAutoLoader');



$controller = new \MyProject\Controllers\MainController();
$controller->main();
$author = new MyProject\Models\Users\User('Nike', 'admin');
$article = new MyProject\Models\Articles\Article('Заголово', 'Текст', $author);
//echo 'Имя автора ' . $article->getAuthor()->getName();
//var_dump($article);

