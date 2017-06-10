<?php 
	include 'header.php';
	$r=$_GET['r'];
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
					<?php
					$i=0;
					$s="select * from event where id=$r";
					$tmp=mysqli_query($c,$s);
					while($result=mysqli_fetch_array($tmp))
					{
						$id=$result['id'];
						$event=$result['name'];
						$branch=$result['branch'];
						
						$pdf=$result['details'];
						$member=$result['member'];
						$path=$result['path'];
						$fees=$result['fees'];
					}
					?>
						<div class="col-lg-5">
						<form name="f1" class="panel-body" method="post" action="#">
								<div class="row">
								<div class="col-lg-3"><label>Event Name</label></div>
								<div class="col-lg-9">
										<input type="text" name="event" class="form-control input-lg" value="<?php echo $event;?>" />
						
								</div>
							</div>
							
							<br />
							<div class="row">
								<div class="col-lg-3"><label>Branch Name</label></div>
								<div class="col-lg-9">
									<select name="branch" class="form-control input-lg">
										<option style="text-transform:uppercase" selected="selected"><?php echo $branch;?></option>
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
									<input type="text" name="member" class="form-control input-lg" value="<?php echo $member;?>" />
								</div>
							</div>
							
							<br />
							<div class="row">
								<div class="col-lg-3"><label>Fees</label></div>
								<div class="col-lg-9">
									<input type="text" class="form-control input-lg" name="fees" value="<?php echo $fees;?>" />
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
									<input type="submit" name="save" class="btn btn-lg btn-primary btn-block" value="Update" />
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
															
								$fees=$_POST['fees'];				
								$newpath="upload/".$_FILES['file1']['name'];
								if($newpath="upload/")
								{
									$newpath=$path;
								}
								else
								{
									move_uploaded_file($_FILES['file1']['tmp_name'],$newpath);	
								}
								$newpdf="pdf/".$_FILES['file2']['name'];
								if($newpdf=="pdf/")
								{
									$newpdf=$pdf;
									echo "<script>alert('Same Event Image..');</script>";
								}
								else
								{
									move_uploaded_file($_FILES['file2']['tmp_name'],$pdf);
								}
								
								
							
								$i="update event set name='$event',branch='$branch',fees=$fees,member=$member,details='$newpdf',path='$newpath' where id=$r";
								if(mysqli_query($c,$i))
								{
									header('Location:event.php');
								}
								else
								{
									echo "<script>alert('Event updation failed');</script>";
								}
							}
						?>
				
				
				
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php 
	include 'footer.php';
?>