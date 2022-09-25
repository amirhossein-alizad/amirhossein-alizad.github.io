<?php

if(!isset($_POST['submit']))
{
  echo "you need to submit the form!";
}

$name = $_POST['name'];
$sender = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($sender)||empty($message))
{
  echo "all fields must be filled!";
  exit;
}

$from = "aalizad79@gmail.com";
$subject = "New form submition";
$body = "You have received a new message from the user ".$name. ".\n".$message;
$to = "aalizad79@gmail.com";
$headers = "From: ";
$headers .= $from;

echo "all fields must be filled!3322312";
exit;

mail($to, $subject. $body, $headers);
header('Location: ../');
?>
