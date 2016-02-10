<?php
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$message = "Message from $from ($email):\n\n" . $message;
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail ("peteryang1625+xercise@gmail.com", $subject, $message);
}
header('Location: https://xercise.xyz');
?>