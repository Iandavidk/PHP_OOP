<?php

class User {
    public $name;
    public $email;

    public function welcomeMessage() {
        return "Have a good working day!";
    }
}

class Admin extends User {
    public $level;
}

$user = new User();
$user->name = "Ian";
$user->email = "eandavid6@gmail.com";
echo $user->name . " " . $user->email;

$admin = new Admin();
$admin->name = "John";
$admin->email = "John@gmail.com";
$admin->level = "SuperAdmin";
echo $admin->name . " " . $admin->email . " " . $admin->level;
echo "<br>";
echo $admin->welcomeMessage();

