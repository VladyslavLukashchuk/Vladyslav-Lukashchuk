<?php
     $myMail = "vladlukaschuk1@ukr.net"
    //  $usermail = $_POST['mail'];
     $header = $_POST["header"];
     $message = $_POST['message'];

     mail($myMail, $header, $message);

     if(mail($myMail, $header, $message)) {
       echo "Message was sent successfully";
     } else {
       echo "Opps, something went wrong";
     }

     ?>