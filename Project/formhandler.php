<?php
$name = $_POST[ 'name '];
$visitor_email = $_POST[ 'email '];
$subject = $_POST['subject '];
$message = $_POST[ 'message '];
 
$email_from = 'infocell@gmail.com'
$email_subject = 'New form submission'
$email_body = "User Name: $name.\n".
                "User email:$visitor_email ".
                    "Subject:$subject ".
                        "User Message:$message";
$to = 'aditya12@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
$email($to,$email_subject,$email_body,$headers);
$headers("Location: contact.html");

?>