<?php

class Person
{
    private $name;
    private $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function display()
    {
        echo "Name : " . $this->name . PHP_EOL . "Age :" . $this->age;
    }
}


class Student extends Person
{
    public $section;

    function __construct($name, $age,$section)
    {
        $this->name = $name;
        $this->age = $age;
        $this->section = $section;
    }
    public function display()
    { 
      
        echo "Name : " . $this->name . PHP_EOL . "Age :" . $this->age.PHP_EOL. "Section :".$this->section . PHP_EOL;
    }
}


$person = new Person("Faysal", "200");

$person->display();

$Student = new Student("Faysal", "200", "A");

$Student->display();
