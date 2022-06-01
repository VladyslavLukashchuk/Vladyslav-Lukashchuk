<?php
     $myMail = "vladlukaschuk1@ukr.net";
     $userMail = $_POST ["mail"];
     $header = $_POST["header"];
     $message = $_POST["message"];
     $error = "";

     if(trim($userMail == "")){
      $error = "Введіть будь ласка ваш email";
       }
      
        elseif(trim($message == "")){
        $error = "Повідомлення не може бути пустим";
        }
      
        elseif(strlen($message) < 10){
        $error = "Повідомлення повинне бути більше 10 символів";
        }
      
    
        if($error != "")
        echo $error;
         exit;


  
  $header .= "=?utf-8?B?".base64_encode("Тест")."?=";
  $headers = "From: $userMail\r\nReply-to: $myMail\r\nContent-type: text/html;charset=utf-8\r\n";
    mail($myMail, $header, $message, $headers);

if(mail($myMail, $header, $message, $headers)) {
  echo "Message was sent successfully";
} else {
  echo "Oops.. Something went wrong";
}

header("Location: /feedback.php");
     ?>