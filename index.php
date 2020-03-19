<?php

trait SayYourClassTrait
{
    public function SayYourClass(){
        return 'My class is ' . self::class;
    }
}

interface ISayYourClass{
    public function SayYourClass();
}

class Man implements ISayYourClass
{
    use SayYourClassTrait;
}

class Box implements ISayYourClass
{
    public function SayYourClass(){
        return 'My class is ' . self::class;
    }
}


$man = new Man();
$box = new Box();
echo $man->SayYourClass();
echo "<br/>";
echo $box->SayYourClass();
