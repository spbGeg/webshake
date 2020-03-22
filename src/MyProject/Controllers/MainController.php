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
        echo 'Главная станица';
    }
    public function sayHello(string $name)
    {
        echo 'Привет, ' . $name;
    }

}