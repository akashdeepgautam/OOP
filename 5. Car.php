<?php
/**
 * How to define an object of a class.
 */
class Car
{
    public $name;
    public $color;
    function carStart()
    {
        echo "Start Car".PHP_EOL;
    }
}
$car = new Car();
$car->name = "Grand i10";
$car->color = "White";
$car->carStart();

echo "Car name - ".$car->name." and car color - ".$car->color;
