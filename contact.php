<?php

$fname = $_POST['contact-f-name'];
$lname = $_POST['contact-l-name'];
$email = $_POST['contact-email'];
$text = $_POST['contact-message'];

$address = "vesgauniformes@gmail.com"; 

$subject  = "Mensaje desde la web";

$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/plain; Charset=UTF-8 \r\n";

$message = "Este mensaje pertenece a:\r\n" 
					."Nombre: ".strip_tags($fname)." ".strip_tags($lname)."\r\n"
					."Email: ".strip_tags($email)."\r\n"
					."Mensaje: ".strip_tags($text)."\r\n";

if(@mail($address, $subject, $message, $headers)) { echo "true"; } 
else { echo "false"; }

?>