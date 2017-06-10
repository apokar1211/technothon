<?php
	include 'header.php';
	$q=$_GET['q'];
	$s="select * from branch where name='$q'";
	$tmp=mysqli_query($c,$s);
	while($result=mysqli_fetch_array($tmp))
	{
		$substring=$result['subname'];
	}
?>
	<title>TechnoThon | <?php echo $q;?></title>
 	<header id="head" class="secondary">
            <div class="container">
                    <h1 style="text-transform:uppercase;"><?php echo $substring;?></h1>
                    <p style="text-transform:uppercase; font-size:20px; letter-spacing:2px;"><?php echo $q; ?></p>
                </div>
    </header>
	<?php
	$d=0;
	$j=0;
	$k='a';
	$s1="select * from event where branch='$q'";
	$tmp1=mysqli_query($c,$s1);
	while($result1=mysqli_fetch_array($tmp1))
	{
		$j++;
		$k++;
		$event=$result1['name'];
		$branch=$result1['branch'];
		
		$fees=$result1['fees'];
		$member=$result1['member'];
		$pdf=$result1['details'];
		$path=$result1['path'];	
		
		if($i==0)
		{
			$i=1;
			
	?>

			<header class="content-a">
			<!-- container -->
				<div class="container">					
					<div class="row">	
						<!--<hr class="hr" />--->
							<div class="col-lg-5 col-sm-6">							
								<div class="clearfix"></div>		
								<h2 style="text-transform:uppercase"><?php echo $event; ?></h2><h3 class="Blink">Reg. Fees Rs.<?php echo $fees; ?></h3>
								<p class="lead">Members : <?php echo $member; ?>(Max.)</p>					
								
								
								<button href="#" class ="btn btn-primary halse" data-toggle="modal" data-target="#myModal<?php echo $j; ?>"><i class="fa fa-sign-in"></i> Registration</button>
								<a style="margin-right:170px; float:right;" class="btn btn-success halse" href="admin/pages/<?php echo $pdf; ?>"><i class="fa fa-book"></i> Rules & Description</a>
								
								
								<div class="tab-pane fade" id="cc">
									<h4>Profile Tab</h4>
									<p class="blink"></p>
								</div>
							</div>
							
							<!--pop up bar-->
									
									
										<!-- Modal 1-->
										<div class = "modal fade" id = "myModal<?php echo $j; ?>" tabindex = "-1" role = "dialog" 
										   aria-labelledby = "myModalLabel" aria-hidden = "true">
										   
										   <div class = "modal-dialog">
											  <div class = "modal-content">
												 
												 <div class = "modal-header">
													<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
														  &times;
													</button>
													
													<h4 class ="modal-title" id="myModalLabel">Registration</h4>
												 </div>
												
												 <div class = "modal-body">
														
													<?php include 'registration.php';?>
													
												</div>
												 
												 <div class = "modal-footer">
												
													
													<div class = "modal-header">
														
														<h4 class ="modal-title" id="myModalLabel"><i class="fa fa-thumbs-o-up fa-lg"></i>Thank You For Registration</h4>
													 </div>
												 </div>
															
												 
											  </div><!-- /.modal-content -->
										   </div><!-- /.modal-dialog -->
										  
										</div><!-- /.modal -->
									
									<!-- / pop up bar-->
									
							
							<div class="col-lg-5 col-lg-offset-2" >
								<img src="admin/pages/<?php echo $path; ?>" class="img-responsive">
							</div>
					</div>						
				</div>
			</header>
<?php
		}
		else
		{
			if($d==0)
			{
				$d=1;
				?>
				<header class="content-a">
				<!-- container -->
					<div class="container">					
						<div class="row">	
							<hr class="hr" />
							<div class="col-lg-5">
									<img src="admin/pages/<?php echo $path; ?>" class="img-responsive" style="width:100%;"/>
							</div>
							
								<div class="col-lg-5 col-lg-offset-2">							
									<div class="clearfix"></div>		
									<h2 style="text-transform:uppercase"><?php echo $event; ?></h2><h3 class="Blink">Reg. Fees Rs.<?php echo $fees; ?></h3>
									<p class="lead">Members : <?php echo $member; ?>(Max.)</p>					
									
									
									<button href="#" class ="btn btn-primary halse" data-toggle="modal" data-target="#myModal<?php echo $j; ?>"><i class="fa fa-sign-in"></i> Registration</button>
									<a style="margin-right:170px; float:right;" class="btn btn-success halse" href="admin/pages/<?php echo $pdf; ?>"><i class="fa fa-book"></i> Rules & Description</a>
									
									
									<div class="tab-pane fade" id="cc">
										<h4>Profile Tab</h4>
										<p class="blink"></p>
									</div>
								</div>
								
								<!--pop up bar-->
										
										
											<!-- Modal 1-->
											<div class = "modal fade" id = "myModal<?php echo $j; ?>" tabindex = "-1" role = "dialog" 
											   aria-labelledby = "myModalLabel" aria-hidden = "true">
											   
											   <div class = "modal-dialog">
												  <div class = "modal-content">
													 
													 <div class = "modal-header">
														<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
															  &times;
														</button>
														
														<h4 class ="modal-title" id="myModalLabel">Registration</h4>
													 </div>
													
													 <div class = "modal-body">
															
														<?php include 'registration.php';?>
														
													</div>
													 
													 <div class = "modal-footer">
													
														
														<div class = "modal-header">
															
															<h4 class ="modal-title" id="myModalLabel"><i class="fa fa-thumbs-o-up fa-lg"></i>
	Thank You For Registration</h4>
														 </div>
													 </div>
																
													 
												  </div><!-- /.modal-content -->
											   </div><!-- /.modal-dialog -->
											  
											</div><!-- /.modal -->
											
											
										<!-- / pop up bar-->
										
								
								
						</div>						
					</div>
				</header>
				
				<?php
				
			}
			else	
			{
				$d=0;
				?>

			<header class="content-a">
			<!-- container -->
				<div class="container">					
					<div class="row">	
						<hr class="hr" />
							<div class="col-lg-5 col-sm-6">							
								<div class="clearfix"></div>		
								<h2 style="text-transform:uppercase"><?php echo $event; ?></h2><h3 class="Blink">Reg. Fees Rs.<?php echo $fees; ?></h3>
								<p class="lead">Members : <?php echo $member; ?>(Max.)</p>					
								
								
								<button href="#" class ="btn btn-primary halse" data-toggle="modal" data-target="#myModal<?php echo $j; ?>"><i class="fa fa-sign-in"></i> Registration</button>
								<a style="margin-right:170px; float:right;" class="btn btn-success halse" href="admin/pages/<?php echo $pdf; ?>"><i class="fa fa-book"></i> Rules & Description</a>
								
								
								<div class="tab-pane fade" id="cc">
									<h4>Profile Tab</h4>
									<p class="blink"></p>
								</div>
							</div>
							
							<!--pop up bar-->
									
									
										<!-- Modal 1-->
										<div class = "modal fade" id = "myModal<?php echo $j; ?>" tabindex = "-1" role = "dialog" 
										   aria-labelledby = "myModalLabel" aria-hidden = "true">
										   
										   <div class = "modal-dialog">
											  <div class = "modal-content">
												 
												 <div class = "modal-header">
													<button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
														  &times;
													</button>
													
													<h4 class ="modal-title" id="myModalLabel">Registration</h4>
												 </div>
												
												 <div class = "modal-body">
														
													<?php include 'registration.php';?>
													
												</div>
												 
												 <div class = "modal-footer">
												
													
													<div class = "modal-header">
														
														<h4 class ="modal-title" id="myModalLabel"><i class="fa fa-thumbs-o-up fa-lg"></i>
Thank You For Registration</h4>
													 </div>
												 </div>
															
												 
											  </div><!-- /.modal-content -->
										   </div><!-- /.modal-dialog -->
										  
										</div><!-- /.modal -->
										
										
									<!-- / pop up bar-->
									
							
							<div class="col-lg-5 col-lg-offset-2" >
								<img src="admin/pages/<?php echo $path; ?>" class="img-responsive">
							</div>
					</div>						
				</div>
			</header>
		<?php
			}	
			
		}	
	}
?>

<?php
	include 'footer.php';
?>