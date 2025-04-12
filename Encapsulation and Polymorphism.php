<?Php
// //Encapsulation
class accout{
    private $balance;

    public function setBalance($balance){
        $this->balance=$balance;
    }
    public function getBalance(){
       return $this->balance;
    }
}
$accout=new accout();
$accout-> setBalance(200);
echo $accout->getBalance();

class BankAccount {
    private $balance; // encapsulated property
    
    public function __construct($initialBalance) {
         $this->balance = $initialBalance;
    }
    
    // Getter method
    public function getBalance() {
        return "this is get balance". $this->balance."<br>\n";
    }
    
    // Setter method with validation
    public function deposit($amount) {
        if($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }
    
    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

// Usage
$account = new BankAccount(1000);
$account->deposit(500);
echo $account->getBalance(); // 1500
$account->withdraw(200);
echo $account->getBalance(); // 1300



$account->balance = 5000; // Error - cannot access private property
Polymorphism

class animal{
    public function makeSound(){
        echo "some sound";
    }
}
class Dog extends animal{
    public function makeSound(){
        echo"bork \n";
    }
}
class cat extends animal{
    public function makeSound(){
        echo"Mow \n";
    }
}
$dog= new Dog();
echo $dog->makeSound();
$cat = new cat();
echo$cat->makeSound();


interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Function demonstrating polymorphism
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "\n";
}

// Usage
$shapes = [
    new Circle(5),
    new Rectangle(4, 6)
];

foreach($shapes as $shape) {
    printArea($shape);
}
