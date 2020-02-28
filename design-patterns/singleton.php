<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


//singleton SUDO CODE

// always create a private constructor and a static method in a singleton
class DbConnection {


    private static $instance = null;

    //constructor must be private to prevent creating more than one instance
    private function __construct(){
        echo 'hey i am the singleton <br>';
    }

    //this  we will use to get the instance of our class
    public static function getInstance(){

        ///if statement to check if instance is Not set
        if(self::$instance == null){
            DbConnection::$instance = new DbConnection();

        }
        return DbConnection::$instance;

    }



    //method to query something in the db
    public function getQuery(){
        return "SELECT * FROM some_table";
    }
}

//////instantiate the instance
$Db =  DbConnection::getInstance();
var_dump($Db);
//echo $Db->getQuery();

//////if you create more instances it will give u a null instance
/*$Db2 = DbConnection::getInstance();
$Db3 = DbConnection::getInstance();
var_dump($Db2, $Db3);*/

////JUST TO SHOW HOW A NORMAL  CLASS WOULD LOOK LIKE
/*class Boi{}
$boi1 = new Boi();
$boi2 = new Boi();
$boi3 = new Boi();
var_dump($boi1,$boi2,$boi3);*/


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><?php /*var_dump($Db3);*/ ?></p>
</body>
</html>
