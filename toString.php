<?php

class User {
    private $name;
    private $age;

    //Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Name: " . $this->name . "<br>" . "Age: " . $this->age;
    }

    //Getters and Setters for name and age
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }
    public function setAge($age) {
        $this->name = $age;
    }
}

$user = new User('Ian', 24);
echo $user;

