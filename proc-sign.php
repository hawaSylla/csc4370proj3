<?php

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (fname, lname, username,email,pass_hash)
VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli-> stmt_init();

print_r($_POST);
var_dump($password_hash);

?>