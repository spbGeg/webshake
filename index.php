<?php

abstract class HumanAbstruct
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function getGreetengs();

    abstract public function getMyNameIs();

    public function introduceYourself()
    {
        return $this->getGreetengs() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    }


}

class RussianHuman extends HumanAbstruct
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getGreetengs(){
        return 'Здравствуйте';
    }

    public function getMyNameIs(){
        return 'Мое имя';
    }

}

class EnglishHuman extends HumanAbstruct
{
    public function __construct($name){
        parent:: __construct($name);
    }

    public function getGreetengs()
    {
        // TODO: Implement getGreetengs() method.
        return "Hello";
    }
    public function getMyNameIs()
    {
        // TODO: Implement getMyNameIs() method.

    return 'My name is';
    }
}


$russian_human = new RussianHuman("Иван");
echo $russian_human->introduceYourself();

echo "<br/>";
$english_human = new EnglishHuman('Harry');
echo $english_human->introduceYourself();

