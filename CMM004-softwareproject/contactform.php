<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
$email = $_POST['email'];
if(isset( $_POST['email']))
$message = $_POST['message'];
if(isset( $_POST['message']))
$content="From: $name \n Email: $email \n Message: $message";
$recipient = ""; // future marvel email
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>