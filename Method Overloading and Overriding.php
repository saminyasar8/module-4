<?php
//Method Overloading 
class Calculator {
    public function __call($name, $arguments) {
        if($name == 'add') {
            if(count($arguments) == 2) {
                return $arguments[0] + $arguments[1];
            }
            if(count($arguments) == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }
}

$calc = new Calculator();
echo $calc->add(2, 3);       // Output: 5
echo $calc->add(2, 3, 4);  

class RemoteControl {
    public function pressButton() {
        echo "TV turned ON";
    }
    
    // PHP তে সরাসরি ওভারলোডিং সাপোর্ট করে না, তাই Magic Method ব্যবহার করি
    public function __call($name, $args) {
        if($name == 'pressButton') {
            if(count($args) == 0) {
                $this->pressButton();
            } elseif($args[0] == 'long') {
                echo "TV turned OFF";
            } elseif($args[0] == 'double') {
                echo "Volume increased";
            }
        }
    }
}

$remote = new RemoteControl();
$remote->pressButton();       // TV turned ON
$remote->pressButton("long"); // TV turned OFF
$remote->pressButton("double"); // Volume increased
//Overriding in PHP 
class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark bark!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow meow!";
    }
}

$animal = new Animal();
$animal->makeSound(); // Output: Some generic animal sound

$dog = new Dog();
$dog->makeSound();    // Output: Bark bark!

$cat = new Cat();
$cat->makeSound();   


class Father {
    public function driveCar() {
        echo "Driving normally at 60 km/h";
    }
}

class Son extends Father {
    public function driveCar() {
        echo "Driving fast at 120 km/h!";
    }
}

$father = new Father();
$father->driveCar(); // Driving normally at 60 km/h

$son = new Son();
$son->driveCar();
