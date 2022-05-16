<?php

final class User {
    public $name = "John";
    public $age;

    final public function printName($name) {
        return "My name is " . $name;
    }
}

class Manager extends User {
    public $name = "David";

    /* final public function printName($name) {
        return "Hi, " . $name;
    } */
}

$manager = new Manager();
echo $manager->printName("Ian");