<?php
if(isset( $_POST['email']))
$email = $_POST['email'];


$content="First Name: $fname \n Email: $email \n Subject: $msg_subject  \n Message: $message";
$recipient = "cadnagsl@gmail.com";
$subject = "subscription to NewsLetter";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.html');
exit();
?>