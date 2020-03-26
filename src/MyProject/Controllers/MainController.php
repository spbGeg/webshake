<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 19.03.2020
 * Time: 13:56
 */

namespace MyProject\Controllers;
use MyProject\Services\Db;
use MyProject\View\View;

class MainController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;


    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`;');
        var_dump($articles);
        //$this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }



    public function sayHello(string $name)
    {
        echo $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }

    public function sayBuy(string $name)
    {
        echo $this->view->renderHtml('main/buy.php', ['name' => $name]);
    }

}