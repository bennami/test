<?php

//you cannot create an object from an abstractClassExample class . u can only access its properties and methods via another class that extends to it

abstract class Visa {

    public function  visaPayment(){
    return 'perform payment';
    }

    //u can only create abstractClassExample methods inside abstractClassExample classes
    abstract public function getPayment();
}