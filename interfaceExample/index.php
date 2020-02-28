<?php

//interfaces

interface PaymentInterface{
    public function payNow();
}
interface LoginInterface{
    public function loginFirst();
}

class Paypal implements PaymentInterface, LoginInterface {
    public function loginFirst(){
        echo 'this logs you in';
    }

    public function payNow()
    {
        echo 'paying with paypal';
    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }


}

class BankTransfer implements PaymentInterface, LoginInterface {
    public function loginFirst(){

    }
    public function payNow()
    {
        echo 'paying with Bank transfer';
    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}


class Visa implements PaymentInterface{
    public function payNow(){
        echo 'paying with visa';
    }
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash  implements PaymentInterface{
    public function payNow(){
        echo 'paying with visa';
    }
    public function paymentProcess(){
        $this->payNow();
    }
}


class BuyProduct{
    //cash will be changed into whatever type hinting belongs to the class that will handle the choice of the user
    public function pay(Cash $paymentType){
        $paymentType->paymentProcess();
    }
}

//////using interfaces
/*class BuyProduct{
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();
    }
}*/

////$var that i pass inside pay() as param
$paymentType = new Cash();
$paymentType = new Cash();


$buyProduct =  new BuyProduct();
$buyProduct->pay($paymentType);