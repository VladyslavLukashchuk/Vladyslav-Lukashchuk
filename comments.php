<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training website</title>
  <link rel="stylesheet" href="master.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v14.0" nonce="JJwe89tU"></script>
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
      
       <article>
         
        <img src="https://focus.ua/static/storage/thumbs/920x465/b/14/8c343875-f9f056cf2c6c3e85ad077ec776bee14b.jpg?v=2908_1" alt="war">
        <h2>Стаття</h2>
        <p><i>Советник назвал эту тактику "полным бредом и классической психологической операцией РФ" с целью вызвать чувство смуты и большой обиды якобы брошенных. Следующим шагом, по его мнению, станет преобразование обиды в "гнев оскорбленных".</i></p>
          <a href="https://focus.ua/voennye-novosti/516993-rossiyu-nuzhno-istoshchit-podolyak-skazal-kogda-vsu-osvobodyat-yug-ukrainy" target="_blank">Подробиці</a>
       </article>
       
       
     </div>
   </div>
  <center> <br><div class="fb-comments" data-href="http://localhost/comments.php" data-width="200" data-numposts="2" style="margin-top: 20px;"></div> </center>
  </div>

  

  <?php require "footer.php" ?>

</body>
</html>

