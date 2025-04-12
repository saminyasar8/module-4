<?php
// final class thisIsPermanentName{

//     public function sayMyName(){
//         echo"My Name is Panda";
//     }
// }

// class changeName extends thisIsPermanentName{   
//  // এই মেথড ওভাররাইড করা যাবে না
//     public function sayMyName(){
//         echo "My Name is not panda";// ERROR
//     }
// }

// $myname = new thisIsPermanentName();
// $myname->sayMyName();


// //final class Bank
// final class Bank{
//     public function bankInfo(){
//         echo"welcome to secure bank<br>\n";
//     }
//     final public function bankRules(){
//         echo "rules: Minimum Deposot =500 tk, no loan without collateral<br>\n";

//     }
// }

// class customer {
//     public function customerInfo($name){
//         echo "customer  Name : {$name}<br>\n";
//     }
//     public function deposit($amount){
//         if ($amount>=500){
//             echo"Deposit sucessful: {$amount}TK<br>\n";
//         }else{
//             echo"Depsit Failed : minimum 500tk requied<br>\n";
//         }
//     }
// }
// $bank =new Bank();
// $bank ->bankInfo();
// $bank->bankRules();
// echo "<hr>";
// $customer =new customer();
// $customer->customerInfo("samin");
// $customer->deposit(40);



final class loggingapp{
    public function UserInfo(){
        echo" welcome To LoggingApp<br>\n";
    }
   
}
    
class User{
     final public function UserpasswordRules(){
        echo"rules: Password Must be 8 Characters Minimum  <br>\n";
    }
     public function Userinfo($name){
        echo" User Name :{$name}<br>\n";
    }
    

    public function loing($name,$password){
        if(strlen($password)>=8){
            echo "digits done:{$password}<br>\n";
        }else{
            echo"password Digits: min. 8 Digits <br>\n";
        }
    }
}
$logging= new loggingapp();
$logging->UserInfo();
echo"<hr>\n";
$user=new User();
$user->Userinfo("samin");
$user->UserpasswordRules();
$user->loing("samin","");


