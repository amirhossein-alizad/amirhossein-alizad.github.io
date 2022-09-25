<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_subject = "NEW MESSAGE VIA CONTACT FORM";
    
    $email_body = "You have received a new message from the user ".$name. ".\n".$message;
    
    $to = "aalizad79@gmail.com"
    $headers = "From: ";
    $headers .= $visitor_email;
    
    mail($to, $email_subject, $email_body, $headers);
    header('Location: ../');
}
?>
