<?php

//interfaces

interface PaymentInterface{
    public function payNow();
}
interface LoginInterface{
    public function loginFirst();
}

class Paypal implements PaymentInterface, LoginInterface {
    public function loginFirst(){}
    public function payNow()
    {
        // TODO: Implement payNow() method.
    }

    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface {
    public function loginFirst(){}
    public function payNow()
    {
        // TODO: Implement payNow() method.
    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}


class Visa implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash  implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}


class BuyProduct{
    public function pay(Cash $paymentType){
        $paymentType->paymentProcess();
    }
}

/*class BuyProduct{
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();
    }
}*/


$paymentType = new Visa();
$buyProduct =  new BuyProduct();
$buyProduct->pay($paymentType);