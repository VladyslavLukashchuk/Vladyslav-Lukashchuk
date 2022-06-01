<?php
session_start();
$user = 'root';
$passes = "";
$db = "registergb";
$conn =  mysqli_connect('localhost', $user, $passes, $db);

$login = $_POST['login'];
$password = md5($_POST['pass']);

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
//echo mysqli_num_rows($check_user);

$loggedUser = mysqli_fetch_assoc($check_user);



if($loggedUser) {
  header("location: index.php");
} else {
  echo "Перевірте данні";
}


?>