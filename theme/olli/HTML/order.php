<?php

$fname = $_POST['order-f-name'];
$lname = $_POST['order-l-name'];
$email = $_POST['order-email'];
$delivery_address = $_POST['order-address'];
$city = $_POST['order-city'];
$country = $_POST['order-country'];
$state = $_POST['order-state'];
$zip = $_POST['order-zip'];
$phone = $_POST['order-phone'];

$address = "__YOUR_EMAIL__";

$subject  = "__SUBJECT__";

$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/plain; Charset=UTF-8 \r\n";

$message = "Automatic message\r\n" 
					."Name: ".strip_tags($fname)." ".strip_tags($lname)."\r\n"
					."Email: ".strip_tags($email)."\r\n"
					."Address: ".strip_tags($delivery_address)."\r\n"
					."City: ".strip_tags($city)."\r\n"
					."Country: ".strip_tags($country)."\r\n"
					."State: ".strip_tags($state)."\r\n"
					."Zip: ".strip_tags($zip)."\r\n"
					."Phone: ".strip_tags($phone)."\n";

if(@mail($address, $subject, $message, $headers)) { echo "true"; } 
else { echo "false"; }

?>