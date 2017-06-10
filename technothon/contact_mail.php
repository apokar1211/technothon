<?php
$name       = @trim(stripslashes($name)); 
$from       = @trim(stripslashes($email)); 
$subject    = @trim(stripslashes($subject)); 
$msg		= @trim(stripslashes("Hi...My Name is $name..<br />Phone No. $phone <br />Message:$message")); 
$to   		= 'technothon.2k16@gmail.com';//replace with your email
$headers   	= "From: {$name} <{$from}>";								

mail($to, $subject, $msg, $headers);

?>