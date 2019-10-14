<?php
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['msg_subjec']))
$msg_subjec = $_POST['msg_subjec'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="First Name: $fname \n Email: $email \n Subject: $msg_subject  \n Message: $message";
$recipient = "cadnagsl@gmail.com";
$subject = "Equiry from visitor";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.html');
exit();
?>