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
       <form action="mailto.php" method="POST">
         <input type="email" name="mail" placeholder="Please enter your email" class="pole" required><br>
         <input type = "text" name= "header" placeholder="enter header" class="pole" required><br>
         <textarea name="message" placeholder="Message.." required> </textarea><br><br>
         <!-- <input type="text" name="message"  -->
         <button type="submit" value="send">Відправити</button>
         


       </form>
         </center>
     </div>
     </div>

     </div>
     <?php require "footer.php" ?>

     
