<?php


class Post
{
    protected $title;
    protected $text;

    public function __construct($title, $text){
        $this->title = $title;
        $this->text = $text;
    }
    public function setTitle($title){
        $this->title = $title;

    }
    public function getTitle(){
        return $this->title;
    }

    public function setText($text){
        $this->text = $text;
    }
    public function getText(){
        return $this->text;
    }
}

class Lesson extends Post
{

    private $homework;

    public function __construct($title, $text, $homework){
       parent:: __construct($title,$text);
        $this->homework = $homework;
    }

    public function getHomework(){
        return $this->homework;
    }
    public function setHomework($homework){
        $this->homework = $homework;
    }

    }


    class PaidLesson extends Lesson
    {
        private $price;

        public function __construct($title, $text, $homework, $price){
            parent::__construct($title, $text, $homework);
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }
        public function setPrice($price){
            $this->price = $price;
        }


    }
$lesson = new Lesson('Заголовок', 'Текст', "Домашка");
//echo 'Название урока: ' . $lesson ->getTitle();
var_dump($lesson);


$paid_lesson = new PaidLesson('Урок о налследовании PHP' , 'Лол кек, чебурек ' , 'Ложитесь спать утро вечера мудренеее', '99.00');
var_dump($paid_lesson);