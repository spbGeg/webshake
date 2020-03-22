<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 19.03.2020
 * Time: 13:56
 */

namespace MyProject\Controllers;

class MainController
{

    public function main()
    {
        require __DIR__ . '/../../../templates/main/main.php';
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