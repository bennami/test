<?php
//add function name as string
spl_autoload_register('myAutoLoader');

//$className will be the classes that you instantiate at some point in your php
//make sure the class name is the same as the file name
function myAutoLoader($className){

    $path = "classes/";
    $extension = ".php";
    $fullPath = $path.$className.$extension;
    require $fullPath;

    //error  handling when  the file cannot be found
    if(!file_exists($fullPath)){
        return false;
    }

    /////////You can use namespaces to link to all classes in different folders


}


