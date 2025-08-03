<?php

namespace Oop\Classes;

class Car {

    // Properties or fields in other languages
    private $brand;
    private $color;
    private $engineStatus = false;

    // Constructor (run when an object is created)
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method 
    public function getDisplayInfo() {
        return $this->brand . " - " . $this->color;
    }

    public function toggleEngine() {
        if (isset($this->engineStatus)) {
            $this->engineStatus = true;
        } else {
            $this->engineStatus = false;
        }
    }

    // Getter and Setter methods (debateable)
    public function getBrand() {
        return $this->brand;
    }

    public function getColor() {
        return $this->color;
    }

    public function setBrand($brand) {
        $allowedBrands = ["Toyota", "Honda", "Ford", "Chevrolet", "Nissan"];
        if (in_array($brand, $allowedBrands)) {
            $this->brand = $brand;
        }
    }

    public function setColor($color) {
        $allowedColors = ["Red", "Blue", "Green", "Black", "White"];

        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        } 
    }
}
