<?php
	include 'db.php';
	
	$q=$_GET['q'];
	
	$d="delete from branch where id=$q";
	if(mysqli_query($c,$d))
	{
		header('Location:branch.php');		
	}

?>