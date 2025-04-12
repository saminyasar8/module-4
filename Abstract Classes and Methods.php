<?php

abstract class Geteway{
    protected $amount;
    abstract public function pay();
    abstract public function refund();

}
class bkash extends Geteway{
    public function __construct($amount){
        $this->amount = $amount;
    }

    public function pay() {
        return"paid,laft amount is , $this->amount tk vai bkash\n";
    }
    public function refund() {
        return "Refaund $this->amount tk vai bkash \n";
    }

}
class rocket   extends Geteway{
    public function __construct($amount){
        $this->amount = $amount;
    }
    public function pay() {
        return"paid,laft amount is , $this->amount tk vai rocket \n";
    }
    public function refund() {
        return "Refaund $this->amount tk vai rocket \n";
    }

}

$bkash = new bkash(500);
echo $bkash->pay();
echo "<br>\n";
echo $bkash->refund();
echo "<hr>\n";
$rocket = new rocket(200);
echo $rocket->pay();
echo "<br>\n";
echo $rocket->refund();


abstract class shap{
    abstract public function getArea();
}
class circle extends shap{
    public $radis;
    public function __construct($radis){
        $this->radis = $radis;}
    
        public function getArea(){
            return pi() * $this->radis*$this->radis;
        }
}
$circle = new circle(5  ) ;
echo $circle->getArea();

abstract class Employee {
public $name;
 public $salary;
public $month;
abstract public function getSalary();
    abstract public function getMonth();
    abstract public function getName();
}
class Salary extends Employee {

    public function __construct($name, $salary, $month) {
        $this->name = $name;
        $this->salary = $salary;
        $this->month = $month;
    }

    public function getSalary(){
        return "Paid Salary Amount is: $this->salary <br>";
    }

    public function getMonth(){
        return "Paid Salary Month is: $this->month <br>";
    }

    public function getName(){
        return "Employee Name is: $this->name <br>";
    }
}
$employee = new Salary("Samin", 8000, "April");

echo $employee->getName();
echo $employee->getSalary();
echo $employee->getMonth();
