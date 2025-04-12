<?php

class Person {
    public $name = "Rahim";       // Public → সবাই Access করতে পারবে
    protected $email = "abc@gmail.com";  // Protected → নিজে + child class
    private $password = "123456"; // Private → শুধু নিজের মধ্যে

    public function showName() {
        echo $this->name;
    }

    protected function showEmail() {
        echo $this->email;
    }

    private function showPassword() {
        echo $this->password;
    }
}

$person = new Person();

echo $person->name; // Access পাবো (public)
// echo $person->email; // Error (protected)
// echo $person->password; // Error (private)

$person->showName(); // Access পাবো
// $person->showEmail(); // Error
// $person->showPassword(); // Error

?>
