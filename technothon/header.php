<?php
	include 'db.php';
?>
<!--
Author: Technothon Team	
Author URL: http://www.gecmodasa.ac.in
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Event Organize">
	<meta name="author" content="http://www.gecmodasa.ac.in">
	
	<link rel="icon" href="assets/images/favicon2.png">
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css" />
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
  
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script src="assets/js/bootstrap.min.js"></script> 
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    
	
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>

</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<div class="row">
						<div class="row"><p class="logo"><span class="first">T</span><sub>echno</sub><span class="first">T</span><sub>hon</sub><span class="second">2</span><span class="rotate">K</span><span class="second second1">16</span></div><div class="row"><span class="logo-header">the jouney begins</span></p></div>
					</div>
					
					<!-- <img src="assets/images/logo.png" alt="Techro HTML5 template"> -->
				</a>	
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.php">home</a></li>
					<li class=""><a href="about.php">about</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <i class="fa fa-chevron-down"></i></a>										
					<ul class="dropdown-menu">
					<?php
						$i=0;
						$s="select * from branch ORDER BY name ASC";
						$tmp=mysqli_query($c,$s);
						while($result=mysqli_fetch_array($tmp))
						{
							
							?>	
								<li class="" style="text-transform:uppercase"><a href="branch.php?q=<?php echo $result['name']; ?>"><?php echo $result['name']; ?></a></li>
							<?php
							
						}						
					?>
					</ul>
					</li>
					<li class=""><a href="contact.php">contact</a></li>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	