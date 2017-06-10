<?php 
	include 'db.php';
	
	$q=$_GET['q'];
	
	$d="delete from college where id=$q";
	if(mysqli_query($c,$d))
	{
		header('Location:college.php');
	}
?>