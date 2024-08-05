<?php
class Student{
    public $name;
    public $class;

    function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }

    function printDetail(){
        echo "$this->name is studying in $this->class class".PHP_EOL;
    }
}

$student = new Student("John", "1st");
$student->printDetail();