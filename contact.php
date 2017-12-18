<?php
 require_once('admin/scripts/config.php');
 if(isset($_POST['name'])){
   //echo "yee boi";
   $direct = "thankyou.php";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $street = $_POST['street'];
   $message = $_POST['message'];
   //echo $name;
   if($street === "");
   //echo "send mail";
   $sendMail = submitMessage($direct, $name, $email, $message);
 }else{
   //echo "go away bot";
 };

 #unless you have a mail server on mamp/wamp you need to host the file before it will work
 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
</head>
<body>
    <form action="" method="post">
    <!--Make sure to give each input a name attribute(name="")-->
       <label>Name: </label><input name="name" type="text" size="21" maxlength="30" />
       <label>Email: </label><input name="email" type="text" size="21" maxlength="30" />
       <label for="street">Street: </label><input class="street" name="street" type="text" size="21" maxlength="30" /> <!-- HONEYPOT - not displayed, but exsists to fool bots and filter them out-->
       <label for="message">Message: </label><textarea name="message"></textarea>
       <input name="submit" type="submit" value="Send" />
    </form>
</body>
</html>
