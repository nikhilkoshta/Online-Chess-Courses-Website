<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$rating = $_POST['rating'];
$message = $_POST['message'];

$email_from = 'info@jecjabalpur.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Rating: $rating.\n".
               "User Message: $message .\n".

$to = 'nikhilkoshta2@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
