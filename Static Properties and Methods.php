<?php
// class logger{
//     public static $age =0;
//     public static function log($message){
//         echo $message;
//     }
// }

// logger::log("my age is :");
// echo logger::$age;

// class mathUtils{
//     public static $pi =3.14159;

//     public static function add($a,$b) {
//         return $a + $b;
//     }
// }    
// echo mathUtils::$pi ."\n<br>"; 
// echo mathUtils::add(5,10);


// class BankAccount{
//     public static $totalAccounts = 0;
//     public $name;
//     public $balaner;
//     public function __construct($name, $balaner){{
//         $this->name = $name;
//         $this->balaner = $balaner;
//         self::$totalAccounts++;
//     }
// }
//    public function show(){
//     echo "Account Name: {$this->name} <br>";
//         echo "Balance: " . self::formatAmount($this->balaner) . "<br>";
//    }
//    public static function formatAmount($amount){
//     return number_format($amount,2,".")."$";
//    }
// }

// $acc1 = new BankAccount("Rahim", 5000);
// $acc1->show();
// echo "<hr>";
// $acc2 = new BankAccount("samin", 65000);
// $acc2->show();
// echo "<hr>";
// echo"Total Bank Accounts created:" . BankAccount::$totalAccounts;


// class students{
//     public  static $autoId = 1;
//     public  $id;
//     public $name;
//     public function __construct($name){
//         $this -> name = $name;
//         $this -> id = self::$autoId;
//         self::$autoId++;

//     }
// public function show(){
//     echo"student  Id: {$this->id},    Student Name: {$this->name}<br>";
    
    
// }
// } 
// $st = new students("samis");
// $st2 = new students("rakib");
// $st3 = new students("tomal");
// $st4 = new students("tomal");
// $st5 = new students("tomal");
// echo"<hr>";
// $st->show();echo"\n";
// $st2->show();echo"\n";
// $st3->show();echo"\n";
// $st4->show();echo"\n";
// $st5->show();echo "\n";
// echo"<hr>";
// echo"Total student:" . students::$autoId;
// echo"<hr>";

class currenyConverter{
    public static function usdTobdt($usd){
        return "TK" .($usd *120);
    }
    public static function bdtTousd($usd){
        return "$" . ($usd /120);
    }
    
}
echo "BDT CurrenyConverte:-".currenyConverter::usdTobdt(10). "<hr>";
echo "USDT CurrenyConverte:-".currenyConverter::bdtTousd(12000);