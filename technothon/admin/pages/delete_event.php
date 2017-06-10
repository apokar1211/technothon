<?php
	include 'db.php';
	
	$q=$_GET['q'];
	
	$d="delete from event where id=$q";
	if(mysqli_query($c,$d))
	{
		header('Location:event.php');
	}

?>