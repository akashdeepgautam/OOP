<?php

class Chain{
    function methodOne(){
        echo "Hi...".PHP_EOL;
        return $this;
    }
    function methodTwo(){
        echo "Hello";
    }
}

$chain = new Chain();
$chain->methodOne()->methodTwo(); // This is a chain and must be call in sequence