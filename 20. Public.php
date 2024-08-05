<?php

class Dog{
    public $color;
    public $breed;

    function dogBark(){
        echo "Woof woof!".PHP_EOL;
    }
    
    function dogSleep(){
        echo "Zzzz ...".PHP_EOL;
    }
}

$dog = new Dog();
//Access the property directly
echo $dog->color = "Black".PHP_EOL;
echo $dog->breed = "German Shepard".PHP_EOL;

// Access the mthod directly
$dog->dogBark();
$dog->dogSleep();