<?php

//Acess modifiers = Public, Private, Protected
class User {
    //Properties
    public $name;

    private function sayHello() {
        return "Hello";
    }
}

$user = new User();
$user->name = "Ian";

echo $user->name . "<br>";
echo $user->sayHello();

