<?php

if(!isset($_POST['submit]))
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
$body = "a new message from $name.\n email: $sender\n here is the message:\n $message";
$to = "aalizad79@gmail.com";
$headers = "from: $from \r\n";

mail($to, $subject. $body, $headers);

?>
