<?php

class Post
{
    function __construct()
    {
        //Initialize values
        echo "This is constructor".PHP_EOL;
    }
    function __destruct()
    {
        //Close the connection or empty the space
        echo "This is a destructor";
    }
}

$post = new Post();
