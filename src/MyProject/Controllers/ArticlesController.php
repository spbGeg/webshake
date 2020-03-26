<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 26.03.2020
 * Time: 8:46
 */

namespace MyProject\Controllers;

use MyProject\Services\Db;
use MyProject\View\View;

class ArticlesController
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

    public function view(int $articleId)
    {
        $result = $this->db->query(
            'SELECT * FROM `articles` WHERE id = :id;',
            [':id' => $articleId]
        );

        if($result === []){
           $this->view->renderHtml('errors/404.php');
            return;
        }

        $this->view->renderHtml('articles/view.php', ['article' => $result[0]]);
    }
}
