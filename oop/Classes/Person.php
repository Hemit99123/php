<?php

namespace OOP\Classes;

class Person {
    private $name;
    private $age;
    private $sex;

    // Setter methods 
    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setSex($sex) {
        if ($sex == "male" || $sex == "female") {
            $this->sex = $sex;
            return true;
        } else {
            return false;
        }
    }

    public function __construct($name, $age, $sex) {
        $this->setName($name);
        $this->setAge($age);
        $this->setSex($sex);
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSex() {
        return $this->sex;
    }

    public function handleValidateAdult() {
        if ($this->age >= 18) return "Pass";
        else return "Fail";
    }
}