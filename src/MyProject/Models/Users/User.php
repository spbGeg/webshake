<?php
/**
 * Created by PhpStorm.
 * User: market7
 * Date: 19.03.2020
 * Time: 12:19
 */

namespace MyProject\Models\Users;


class User
{
    private $name;
    private $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }
}