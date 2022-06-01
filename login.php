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
    <center>
   <div id="wrapper">
     <div id="articles">
      <h2> Вхід </h2><br>
      <form action="log.php" class="regform" method="post">
      <input type="text" name="login" placeholder="Введіть емейл" class="login_pole">
      <input type="password" name="pass" placeholder="Введіть пароль" class="login_pole">
      <button type="submit" name ="logbutton" class="loginButton">Вхід</button>


      </form>
      </center>

     </div>
   </div>
  </div>

  <?php "footer.php" ?>