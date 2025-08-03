<?php
require_once "Classes/Person.php";

use OOP\Classes\Person;

$person1 = new Person("Hemit Patel", 16, "male");
$person2 = new Person("Jeff Bezos", 61,"male");
$person3 = new Person("Mark Zuckerberg", 41, "male");

echo $person1->getName() . " " . $person1->handleValidateAdult() . "<br>";
echo $person2->getName() . " " . $person2->handleValidateAdult() . "<br>";
echo $person3->getName() . " " . $person3->handleValidateAdult() . "<br>";