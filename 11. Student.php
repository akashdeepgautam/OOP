<?php
/**
 * 1) Define a student class
* 2) Define properties of class
*  - name
*  - class
* 3) Define get and set methods to set and access the properties via the methods.
* 4) Define printDetail to print both properties
 */

class Student{
    public $name;
    public $class;

    function getName(): string{
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    } 

    function getClass(): string{
        return $this->class;
    }

    function setClass($class){
        $this->class = $class;
    }

    function printDetail(){
        echo "$this->name is studying in $this->class class".PHP_EOL;
    }
}

$student = new Student();
$student->setName("John Doe");
$student->setClass("6th");

$student->printDetail();

echo $student->getName().PHP_EOL;
echo $student->getClass().PHP_EOL;
