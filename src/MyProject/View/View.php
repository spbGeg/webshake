<?php
/**
 * Created by PhpStorm.
 * User: Никита-Ноут
 * Date: 22.03.2020
 * Time: 10:46
 */

namespace MyProject\View;

class View
{
    private $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml(string $templateName, array $vars = [])
    {
        extract($vars);

        include $this->templatesPath . '/' . $templateName;
    }
}
