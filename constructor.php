<?php

class Worker
{
    public $baseSalary;
    public $overtime;
    public $wage;

    public function __construct($baseSalary, $overtime, $wage)
    {
        $this -> baseSalary = $baseSalary;
        $this -> overtime = $overtime;
        $this -> wage = $wage; 
    }
    public function getWage(){
        
        return $answer = $this -> baseSalary + ($this -> overtime * $this -> wage);
    }
}

$worker = new Worker(20, 30, 40);
echo $worker -> getWage();

?>
<!-- When you use a constructor in a class, you can reuse the class by passing the variables 
in the constructor as arguments, Also ig you have functions iin that class and you want to 
use these variables, refer them with $this -> the-variable  -->

<!-- Random af but making a varibale protected means you wom't be able to access it from ooutside 
unless you're extending the class  -->