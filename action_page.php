<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$email = $_POSR['email'];
$subject = 'the subject';
$text = $_['subject'];
$headers = 'From: ' .$email. "\r\n" .
    'Reply-To: ' .$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("shelbykwatkins@gmail.com", "Website Contact", $text, $headers);

?>
