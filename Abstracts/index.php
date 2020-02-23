<?php
include 'abstractClassExample/Payment.php';
include 'classes/BuyProduct.php';

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();