<?php


class dog extends Person
{

    private static $whoAmI = 'I am  a dog';
public function __construct($name, $eyeColor, $age)
{
    parent::__construct($name, $eyeColor, $age);
}

    public static function motto(){
    echo parent::MOTTO;
    echo '<br>';
    echo self::$whoAmI;
    }

    public static function getString(){
    return self::$whoAmI;
    }
}