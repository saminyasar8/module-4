<?php
class Basepanda {
    public $name = "panda";
    public $age = 4;

}

class NewPanda extends Basepanda {
    public function sayHello() {
        return "Hello , My name is " .$this->name . "!";
    }

}
$panda =new NewPanda();
echo $panda->sayHello();

class animal{
    public $name ;
    public function __construct($name) { $this->name = $name ;
     }
    public function speak(){
        return "$this->name makes a sound.";
    }
}

class dog extends animal{
    public function speak(){
        return "$this->name barks.";
    }
}

$dog = new dog("BUddy");
// $animal = new animal("cat");
echo $dog->speak();
// echo $animal->speak();