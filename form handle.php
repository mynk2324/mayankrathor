<?php
$name = $_Post['name'];
$vititor-email = $_Post['email'];
$message = $_Post['message'];

$email_from = "mayankrathor7090@gmail.com";
$email_subject = "New Message";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
$to = "mayankrathor7090@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,4email_subject,$email_body,$headers);
header("Location: mayankratohr7090.html");
?>

