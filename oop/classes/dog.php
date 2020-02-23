<?php


class dog extends Person
{

    private static $whoAmI = 'I am  a dog';

    public static function motto(){
    echo parent::MOTTO;
    echo '<br>';
    echo self::$whoAmI;
    }
}