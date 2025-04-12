<?php
class Introduction{
    public $name;

    public function sayHello(){
        echo "hello , my name is " . $this->name ."!";
    }
}
//instance of the class |object

$introduction = new Introduction();
$introduction-> name = "samin";//set the name property of the object |assign value to the property
$introduction->sayHello();//call the method of the object
