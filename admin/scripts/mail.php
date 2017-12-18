<?php

function redirect_to($location){
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}

  // echo "From mail file";
  function submitMessage($direct, $name, $email, $message){
    //echo "from submitMessage";
    $to = "myaddress@url.com";
    $subject = "Message from website message";
    $extra = "Reply to: ".$email;
    $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
    mail($to,$subject,$msg,$extra);
    $direct = direct."?name={$name}";
  }

 ?>
