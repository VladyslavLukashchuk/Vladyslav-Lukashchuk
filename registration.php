<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div id="page-wrap">


<?php require "header.php" ?>

<div class="clear"><br>
   <center>
   <div id="menu">Розділи<hr>
  
  </div>
   <div class="menuHrefs">
    <a href="/about.php">Про нас</a>
    <a href="/feedback.php">Зворотній зв`язок</a>
    <a href="/comments.php">Коментарі</a>

   </div>

   </center>
   </div>

   <div id="wrapper">
     <div id="articles">
       <center>
         <h2> Реєстраційна форма</h2><br>
       <form action="reg.php" class="regform" method="POST">
         <input type="text" name = "username" placeholder="Введіть ваше ім'я" class="login_pole"><br>
         <input type="text" name = "login" placeholder="Введіть ваш логін" class="login_pole"><br>

         <input type="email" name="mail" placeholder="Введіть ваш email" class="login_pole" required><br>
         <input type = "password" name= "pass" placeholder="Введіть ваш пароль" class="login_pole" required><br>
         
         <button type="submit" value="send" class="loginButton">Відправити</button><br>
         


       </form>
         </center>
     </div>
     </div>

     </div>
     <?php require "footer.php" ?>