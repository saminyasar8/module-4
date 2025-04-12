<?php
interface Geteway{
    public function pay();
}
interface PrintSerevice{
    public function printIt();
}

class bkash implements Geteway, PrintSerevice{
    public function pay(){
        $this ->printIt();
        return"paid";
    }
    public function printIt(){
        echo"Printed \n";
    }
}

$bkash =new bkash("100");
echo $bkash ->pay();

interface Geteway
{
    public function amount($amount);
}
{
    interface PaySerevice
    {
        public function pay($peyed);
    }
    interface PayRefundSerevice
    {
        public function refund($refund);
    }
}
class cach implements Geteway ,PayRefundSerevice,PaySerevice{
    protected $amount;
public function __construct($amount)
    {
        $this->amount = $amount;
            
        
    }


    
    public function pay($peyed)
    {
        
        return "paid,laft amount is :- $this->amount tk vai chase\n";
    }
    public function refund($refaund)
    {
        $this->amount=$refaund;
        return "Refaund $this->amount tk vai cahes \n";
    }
    public function amount($amount)
    {
        $this->amount=$amount;
        return " Peyment Done  $this->amount tk vai cahes \n";
    }
}
class Bkash implements Geteway, PaySerevice, PayRefundSerevice
{
    protected $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function pay($peyed)
    {
        $this->amount -= $peyed;
        return "Pay: $peyed tk done. Left Amount: $this->amount tk (Bkash)\n";
    }

    public function refund($refaund)
    {
        $this->amount += $refaund;
        return "Refund: $refaund tk added. Current Amount: $this->amount tk (Bkash)\n";
    }

    public function amount($amount)
    {
        return "Current Balance: $this->amount tk (Bkash)\n";
    }
}





$cahes = new cach(500);
echo $cahes->pay(0);
echo "<br>\n";
echo $cahes->refund(0);
echo "<hr>\n";
echo $cahes->amount(500);
echo "<hr>\n";
$bkash = new Bkash(1500);
echo $bkash->pay(200);
echo "<br>\n";
echo $bkash->refund(100);
echo "<br>\n";
echo $bkash->amount(0);

echo "<hr>\n";

