<?php

namespace Oop\Classes;

class Car {

    // Properties or fields in other languages
    public $brand;
    public $color;
    
    // We don't want users to manupliate this property directly
    // so we will make it private
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
}
