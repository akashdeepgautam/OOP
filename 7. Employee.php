<?php
# Calculate employee's salary
class Employee{
    public $id;
    public $name;
    public $leaveTaken;
    public $hourlyRate = 15;
    public $workingDays;

    function getSalaryAmount($totalDays) : int {
        $this->workingDays = $totalDays - $this->leaveTaken;
        $salary = $this->workingDays * $this->hourlyRate;
        return $salary;
    }
}

$emp = new Employee();
$emp->id = 101;
$emp->name = "John Doe";
$emp->leaveTaken = 3;
// var_dump($emp);
echo $emp->name. " worked for ". $emp->workingDays. " days.".PHP_EOL;
echo "Calculate Salary: ".$emp->getSalaryAmount(30);