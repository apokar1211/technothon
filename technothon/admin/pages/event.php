<?php 
	include 'header.php';
?>
	<title>Technothon | Admin | Event</title>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Event</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
						<div class="col-lg-5">
						<form name="f1" class="panel-body" method="post" action="#" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-3"><label>Event Name</label></div>
								<div class="col-lg-9"><input type="text" name="event" class="form-control input-lg" placeholder="Enter Event Name.." /></div>
							</div>
							
							<br />
							<div class="row">
								<div class="col-lg-3"><label>Branch Name</label></div>
								<div class="col-lg-9">
									<select name="branch" class="form-control input-lg">
										<option selected="selected" disabled>Select Branch</option>
									<?php
										$s="select * from branch";
										$tmp=mysqli_query($c,$s);
										while($result=mysqli_fetch_array($tmp))
										{
											$name=$result['name'];			
										?>
											<option><?php echo $name;?></option>
										<?php
										}	
									?>
									</select>
								</div>
							</div>							
							<br />
							
							
							<div class="row">
								<div class="col-lg-3"><label>Member</label></div>
								<div class="col-lg-9">
									<input type="text" name="member" class="form-control input-lg" placeholder="Enter How Many member winner.." />

								</div>
							</div>
							
							<br />
							<div class="row">
								<div class="col-lg-3"><label>Fees</label></div>
								<div class="col-lg-9">
									<input type="text" class="form-control input-lg" name="fees" placeholder="Enter Fees.." />

								</div>
							</div>
							
							<br />
							<div class="row">
								<div class="col-lg-3"><label>Rules & Description file</label></div>
								<div class="col-lg-9">
									<input type="file" name="file2" class="input-lg" style="padding:0;" />
								</div>
							</div>
							
							<br />
							<div class="row">
								<div class="col-lg-3"><label>Event Image</label></div>
								<div class="col-lg-9">
									<input type="file" name="file1" class="input-lg" style="padding:0;" />
								</div>
							</div>
							
							
							<br />
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-9">
									<input type="submit" name="save" class="btn btn-lg btn-primary btn-block" value="Save" />
								</div>
							</div>
							
							
						</form>
					</div>
						<?php
							if(isset($_POST['save']))
							{
								$event=$_POST['event'];
								$branch=$_POST['branch'];
								
								$member=$_POST['member'];
								
								$pdf="pdf/".$_FILES['file2']['name'];
								move_uploaded_file($_FILES['file2']['tmp_name'],$pdf);
								
								$fees=$_POST['fees'];
								
								$path="upload/".$_FILES['file1']['name'];
								move_uploaded_file($_FILES['file1']['tmp_name'],$path);	
								
								$i="insert into event values('','$event','$branch',$fees,$member,'$pdf','$path')";
								if(mysqli_query($c,$i))
								{
									header('Location:event.php');
									
								}
								else
								{
									echo "<script>alert('Duplicate Event Image Not Allowed! Please try Another Image')</script>";
								}
							}
							
						
						?>
				
						
				</div>
				<div class="row view-header" style="font-size:20px;">
					<div class="col-lg-1">#</div>
					<div class="col-lg-2">Event</div>
					<div class="col-lg-1">Branch</div>
					
					<div class="col-lg-1">Member</div>
					<div class="col-lg-1">Fees</div>
					<div class="col-lg-2">Rules & Description</div>
					<div class="col-lg-2">Image</div>
					<div class="col-lg-2" style="text-align:center;">Action</div>				
				</div>
				<br/>
				<?php
					$i=0;
					$s="select * from event ORDER BY id DESC";
					$tmp=mysqli_query($c,$s);
					while($result=mysqli_fetch_array($tmp))
					{
						$i++;
						$id=$result['id'];
						$event=$result['name'];
						$branch=$result['branch'];
						
						$details=$result['details'];
						$member=$result['member'];
						$path=$result['path'];
						$fees=$result['fees'];
					?>	
					<div class="row view-item" style="font-size:15px;">
						<div class="col-lg-1"><?php echo $i;?></div>
						<div class="col-lg-2"><?php echo $event;?></div>
						<div class="col-lg-1"><?php echo $branch;?></div>
						
						<div class="col-lg-1"><?php echo $member;?></div>
						<div class="col-lg-1"><?php echo $fees;?></div>
						<div class="col-lg-2"><a href="<?php echo $details;?>"><?php echo $details;?></a></div>
						<div class="col-lg-2"><img src="<?php echo $path;?>" class="img-responsive" alt="Not Found" /></div>
						<div class="col-lg-2">
							<div class="col-lg-6"><a class="btn btn-success" href="update_event.php?r=<?php echo $id;?>">Update</a></div>				
							<div class="col-lg-6"><a class="btn btn-danger" href="delete_event.php?q=<?php echo $id;?>">Delete</a></div>		
						</div>				
								
					</div>
					<br />
					<?php	
					}
				?>
				
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php 
	include 'footer.php';
?>