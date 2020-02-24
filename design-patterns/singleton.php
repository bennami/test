<?php

//singleton
class Database {
    public static $instance;
    public static function getInstance(){
        if(!isset(Database::$instance)){
            Database::$instance = new Database();
            return Database::$instance;
        }

    }
    private function __construct(){
    }

    public function getQuery(){
        return "SELECT * FROM some_table";
    }
}

$Db =  Database::getInstance();
//if you create more instances it will give u a null instance
$Db2 = Database::getInstance();
$Db3 = Database::getInstance();
echo $Db->getQuery();
var_dump($Db);

//if we create new instances you will see that you wont be able to do so, because this class can only be instantiated once
var_dump($Db2);
var_dump($Db3);