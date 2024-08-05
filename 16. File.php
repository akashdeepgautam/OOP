<?php

/**
 * Write file class
 * Pass the filrname or constructor
 * Check if file exists in constructor
 * If file is found then open the file with fopen method
 * Write method to get content to get the content of the method
 * Write destructor method to close the file if file is already opened
 */

class File
{
    public $fileHandler;
    public $filename;
    public $fileSize;
    public $content;
    public $fileFound;

    function __construct($filename)
    {
        $this->fileHandler = null;
        $this->fileFound = false;
        
        //Check if file exists
        if(!file_exists($filename)){
            //Is this a file
            if(is_file($filename)){
                $this->fileFound = true;
            }
        }

        if($this->fileFound){
            $this->fileHandler = fopen($filename,"r");
            $this->fileSize = filesize($filename);
        }
    }

    function getContent(){
        if($this->fileFound){
            $content = fread($this->fileHandler, $this->fileSize);
            return $content;
        }else{
            return "No files found";
        }
    }

    function __destruct()
    {
        if($this->fileFound){
            fclose($this->fileHandler);
            echo "File is close from destructor";
        }
    }
}

$file = new File("14. destructor.txt");
echo $file->getContent();
