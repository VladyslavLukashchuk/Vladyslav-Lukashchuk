<?php 
session_start();
$username = $_POST["username"];
$login = $_POST["login"];
$email = $_POST["mail"];
$pass = $_POST["pass"];

$pass = md5($pass);

$user = 'root';
$passes = "";
$db = "registergb";
$conn =  mysqli_connect('localhost', $user, $passes, $db);

$conn-> query("INSERT INTO users (`login`, `password`, `name`) VALUES ('$login', '$pass', '$username')");
$conn-> close();

header('Location: /login.php');


?>