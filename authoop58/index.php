<?php
include("classes/User.php");

$user = new User("localhost", "root", "", "authoop");

var_dump($user->getAll());


?>