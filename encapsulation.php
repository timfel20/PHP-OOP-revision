<?php

class Employee
{
    public $baseSalary;
    public $overtime;
    public $wage;

    public function getWage($baseSalary, $overtime, $wage){
        $this -> baseSalary = $baseSalary;
        $this -> overtime = $overtime;
        $this -> wage = $wage; 

        return $answer = $baseSalary + ($overtime * $wage);
    }
}

$employee = new Employee;
echo $employee -> getWage(2, 1, 50);

?>
<!-- In encapslation we're grouping the properties and function inside the object getWage  -->