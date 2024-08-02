<?php

/**
 * 1) Create a Files Class
 * 2) Create methods
 * - displayContent with filename as input parameter
 * - getContent with filename as input parameter
 * 3) Pass the Test.txt and display and getContent
 */

class Files
{
    function displayContent($filename){
        if(!file_exists($filename)){
            echo "File does not exits";
            return;
        }
        $content = file_get_contents($filename);
        echo $content.PHP_EOL;
    }

    function getContent($filename) : string{
        if(!file_exists($filename)){
            return "File does not exit.";
        }
        $content = file_get_contents($filename);
        return $content.PHP_EOL;
    }
}

$files = new Files();
echo $files->displayContent("1. oop.txt");
echo $files->getContent("1. oop.txt");