<?php

class User {
    private static $nextId = 0;
    private $myId;

public static function printId() {
    return "User id is: " . self::$nextId;
}
}
/*
$user = new User();
$user->myId = 10;
echo $user->myId;
*/

echo User::printId();