<?php

function myAutoLoader(string $className){
    //var_dump($className);
    require_once __DIR__ . '/../src/' . $className . '.php';
}

spl_autoload_register('myAutoLoader');

//print_r($_GET);

$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/../src/routes.php';

$isRouteFound = false;
foreach($routes as $pattern => $controllerAndAction){
    preg_match($pattern, $route, $matches);
    if(!empty($matches)){
        $isRouteFound = true;
        break;
    }
}


if(!$isRouteFound){
    echo "<h2>Страница не найдена</h2>";
    return;
}

var_dump($controllerAndAction);
var_dump($matches);


$author = new MyProject\Models\Users\User('Nike', 'admin');
$article = new MyProject\Models\Articles\Article('Заголово', 'Текст', $author);
//echo 'Имя автора ' . $article->getAuthor()->getName();
//var_dump($article);

echo '<h2>Страница не найдена</h2>';