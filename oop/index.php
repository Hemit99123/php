<?php
require_once 'Classes/Car.php';

use Oop\Classes\Car;

$car01 = new Car("Toyota", "Red");
$car02 = new Car("Honda", "Blue");

function getAllCarsInfo() {
    global $car01, $car02;
    return $car01->getDisplayInfo() . "<br>" . $car02->getDisplayInfo() . "<br>";
}

echo getAllCarsInfo() . "<br>";

$car01->toggleEngine();
$car02->toggleEngine();

echo getAllCarsInfo() . "<br>";

$car01->brand = "Honda";
echo $car02->brand . "<br>";