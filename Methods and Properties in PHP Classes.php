<?php
Class panda {
    //property
    public $name ;
    public $age;

    //method
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello() {
        return"Hello , my name is ". $this->name ."!" . $this->age ."years old";
    }
}
$panda =new panda("samin",4);
// $panda ->name = "samin";
echo $panda->sayHello();

