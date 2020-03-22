<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 19.03.2020
 * Time: 13:56
 */

namespace MyProject\Controllers;
use MyProject\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $articles = [
            ['name'=>'Статья 1', 'text'=> 'Текст статьи 1'],
            ['name'=> 'Статья 2', 'text' => 'Текст статьи 2'],
            ['name'=> 'Статья 3', 'text' => 'Текст статьи 3'],
        ];

        $this->view->renderHtml( 'main/main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name)
    {
        echo 'Привет, ' . $name;
    }

    public function sayBuy(string $name)
    {
        echo 'Пока, ' . $name;
    }

}