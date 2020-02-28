<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class Person{

    Private $name;
    Private $eyeColor;
    Private $age;

    public static $drinkingAge = 18;
    private static $fingers = 10;

    //constant
    const MOTTO = 'had to do it to em';


    public function __construct($name,$eyeColor,$age){
    $this->name=$name;
    $this->eyeColor=$eyeColor;
    $this->age=$age;
    }

   public static function setFingers($howMany){
         return self::$fingers = $howMany;
    }

    public function getFingers(){
        return self::$fingers;

    }

    public function getName(){
        return $this->name;
    }
}




