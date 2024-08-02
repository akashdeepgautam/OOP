<?php

/**
 * Methods with parameters and return values
 */

class File
{
    function displayContent($filename)
    {
        $result = true;
        try{
            echo "Read the content of the file $filename".PHP_EOL;
            $content = file_get_contents($filename);
            echo "Displaying the content of file ".PHP_EOL;
            echo $content;
        }catch(Exception $e){
            $result = false;
        }
    }
}

$file = new File();
$file->displayContent("1. oop.txt");
