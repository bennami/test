<?php


//regular class
require 'classes/Simple.php';
$object = new Simple();
$object->helloWorld();

//Anonymous  Class
//after object is created the class will not be stored inside the memory
$newObj = new class (){
    public function helloWorld(){
        echo 'hello world';
    }
};
$newObj->helloWorld();