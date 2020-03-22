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
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`');
        var_dump($articles);

        ob_start();
        //g$this->view->renderHtml( 'main/main.php', ['articles' => $articles]);
        $buffer = ob_get_contents();
        ob_end_clean();

        echo $buffer;

//        $error = 'При подключении шаблона возникла ошибка';
//        if(empty($error)){
//            echo $buffer;
//        }else {
//            echo $error;
//        }

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