<?php

class User {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    //__GET Magic Method
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->property;
        }
    }
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->property = $value;
        }
        return $this;

    /* public function getName() {
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
    } */
}

$user = new User('Ian', 24);
//echo $user->getName() . "<br>";
//echo $user->getAge();
$user->__set('name', 'John');
echo $user->__get('name');