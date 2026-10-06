<?php
// interface:contract,
 interface payment{
    // constants
    // functions
    public function pay();   //declaring
}

interface CardPayment{
    public function payment();
}
class UPI implements payment{   //multiple inhertitance
    public function pay(){
        echo "Payment thru UPI\n"; 
    }
    public function CardPayment(){
        echo "Payment UPI"; 
    }
}
$upi=new UPI();
$upi->pay();
$upi->CardPayment() 


// Tv-remote

interface Power
{
    public function turnOn();
}

interface Volume
{
    public function increaseVolume();
}

class TV implements Power, Volume
{
    public function turnOn()
    {
        echo "TV is ON\n";
    }

    public function increaseVolume()
    {
        echo "TV Volume Increased\n";
    }
}

$tv = new TV();

$tv->turnOn();
$tv->increaseVolume();

?>
