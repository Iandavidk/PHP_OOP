<?php

class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        echo "This is my constructor";
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo "Destructor works!"; //It is always the last thing to be printed out on the screen.
    }

    public function myAge() {
        return "My age is " . $this->age;
    }
}

$user = new User("Ian", 24);
echo "<br>";
echo "My name is : " . $user->name;
echo "<br>";
echo $user->myAge();
echo "<br>";

