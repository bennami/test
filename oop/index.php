<!doctype html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

///AUTOLOADER
require 'includes/autoLoader.php';

//RECAP CLASS OBJECT
$object = new Person('tim','blue','30');
echo $object->getName();
$dog = new dog('tim','blue','30');
echo $dog->getFingers();

//STATIC PROPERTIES
// using scope resolution operator (::)
//echo Person::$drinkingAge;

//STATIC FUNCTIONS
//echo 'In 2020 we use to have '. Person::$fingers. ' fingers';
//echo '<br>';
//echo 'Now, it is the year 3290 and we have'.Person::setFingers(15).' fingers, we are using them well.';

//STATIC, BUT WE CAN USE THEM AS NORMAL PROPERTIES (make it private)
//$object = new Person('tim','blue','30');
//$object->getFingers();

//CONSTANTS, you can call them without instantiating as well
//$motto = Person::MOTTO;
//echo $motto

//EXTENDED CLASSES, inherit properties of parent
//echo dog::MOTTO;
//echo dog::motto();


?>
</body>
</html>
