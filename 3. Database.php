<?php

/**
 * Class name first letter should be starts with capital letter.
 * File name should be match with the class name.(Easy to follow up)
 * 'class' is keyword used to define a class
 * Class is opened and closed with {} like functions.
 */

 /**
  * Properties helps to define the elements of a class and methods helps to define actions of a class.
  */

# Class declaration
class Database
{
    #define variables
    public $dbConnection;
    public $records;

    #This function can be use to open connection with database.
    function openConnection(): bool
    {
    }

    #This function can be used to fetch fucntion from database.
    function fetchRecords(): array
    {
    }

    #Insert records
    function insertRecords(): bool
    {
    }

    #Update records
    function updateRecords(): bool
    {
    }

    #Delete records
    function deleteRecords(): bool
    {
    }
}
