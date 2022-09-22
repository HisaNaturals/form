<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "hisanaturals@gmail.com";
$subject = "Mail from Website";

$headers = "From: ".$name. "\r\n" .
"CC: rehmanmech08@gmail.com";

$txt = "you have received an email from ".$name ."\r\nEmail: " .$email ."\r\nMessage: ". $message;

if($email!=NULL){
   mail($to, $subject, $txt, $headers);
}

header('Location:thankyou.html');


?>