<?php

$email = $_POST['contact-email'];

$address = "vesgauniformes@gmail.com";

$subject  = "Nuevo suscriptor";

$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/plain; Charset=UTF-8 \r\n";

$message = "Tienes un nuevo suscriptor.\r\n" 
					."Email: ".strip_tags($email)."\n";

if(@mail($address, $subject, $message, $headers)) { echo "true"; } 
else { echo "false"; }

?>