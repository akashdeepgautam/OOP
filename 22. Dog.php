<?php

class Dog{
    private $color;
    private $breed;

    function getColor(){
        return $this->color;
    }

    function setColor($color){
        return $this->color = $color;
    }

    function getBreed(){
        return $this->breed;
    }

    function setBreed($breed){
        return $this->breed = $breed;
    }
    
    function dogBark(){
        echo "Woof woof !";
    }

    function dogSleep(){
        echo "Zzzz ...";
    }
}

$dog = new Dog();
echo $dog->setColor("Brown").PHP_EOL;
echo $dog->setBreed("Pit Bull");
