<?php
$name       = @trim(stripslashes($r_fullName)); 
					$from       = @trim(stripslashes($r_email)); 
					$subject    = @trim(stripslashes("Event Registration")); 
					$msg		= @trim(stripslashes("Hi...My Name is $name..<br />Enrollment No. $r_enNumber <br />Event Name $r_event<br />Event Fess $r_fees <br />Branch Name:<span style='text-transform:uppercase'>$r_branch</span><br />Phone No. $r_phone<br />College Name $r_cName<br />")); 
					$to   		= 'technothon.gec@gmail.com';//replace with your email
					$headers   	= "From: {$name} <{$from}>";								
					echo $msg;
					//mail($to, $subject, $msg, $headers);

die;
?>