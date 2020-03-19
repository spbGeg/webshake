<?php

class A
{
    public function sayHello(){
        return'Hello, I am A';
    }

    public function method1(){
return $this->method2();
    }
    protected function method2(){
        return 'A';
    }

}



class B extends A
{
    protected function method2(){
        return 'B';
    }
}



$a = new A();
$b = new B();
echo $b->method1();
//var_dump($a instanceof B);