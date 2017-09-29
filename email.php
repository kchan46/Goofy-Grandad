<?php

$name = $_POST['name'];
$email = $_POST['mail'];
$message = $_POST['text'];

$email_from = 'Goofy Grandad Website';
$email_subject = "New Form submission";
 
$email_body = "You have received a new message from: $name.\n".
                "This user's email is: $email.\n".
                "Here is the message:\n$message";

$to = "yourgoofygrandad@gmail.com";

mail($to,$email_subject,$email_body);

?>