<?php

interface calculateSquare {
    public function calculateSquare();
}


class Rectangle
{
    private $x;
    private $y;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare(){
        return $this->x * $this->y;

    }
}

class Square implements calculateSquare
{
    private $x;

    public function __construct($x){
        $this->x = $x;
    }
    public function calculateSquare(){
        return $this->x **2;
    }
}

class Circle implements calculateSquare
{
    const PI =  3.14;
    private $r;


    public function __construct($r){
        $this->r = $r;
    }

    public function calculateSquare(){

        return self::PI * ( $this->r ** 2);
    }
}

$circle = new Circle(2.5);


$objects = [
  new Square(5),
    new Rectangle(2,4),
    new Circle (5)
];


foreach($objects as $object){
    if($object instanceof CalculateSquare){
        echo 'Объект реализует интерфейс CalculateSquqre. Площадь: ' . $object->calculateSquare();
        echo "<br/>";
    }else echo 'Объект класса ' .  get_class($object) . ' не реализует интерфейс CalculateSquare<br/>';
}



//var_dump($circle instanceof CalculateSquare);