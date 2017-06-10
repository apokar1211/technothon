<?php
	include 'db.php';
	$id=$_GET['q'];
	
	$s="select * from login where id=$id";
	$tmp=mysqli_query($c,$s);
	while($result=mysqli_fetch_array($tmp))
	{
		$email=$result['email'];
		$password=$result['password'];
	}

$name       = @trim(stripslashes("Admin"));  
$subject    = "Your TECHNOTHON2K16 Admin panel Password"; 
$message    = "<br />YOUR PASSWORD IS $password <br /> <br />";
 
$to   		= $email;//replace with your email
$header= "From :TECHNOTHON2K16 Site Email & Password";

mail($to, $subject, $message,$header);

?>