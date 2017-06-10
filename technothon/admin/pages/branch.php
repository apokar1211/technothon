<?php 
	include 'header.php';
?>
	<title>Technothon | Admin | Branch</title>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Branch</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-5">
						<form name="f1" class="panel-body" method="post" action="#">
							<input type="text" name="event" class="form-control input-lg" placeholder="Enter branch Name.." />
							<br />
							<input type="text" name="sub" class="form-control input-lg" placeholder="Enter Sub Name.." />
							<br />
							<input type="submit" name="save" class="btn btn-primary btn-lg btn-block" value="Save" />
						</form>
						<?php
							if(isset($_POST['save']))
							{
								$event=$_POST['event'];
								$sub=$_POST['sub'];
								$i="insert into branch values('','$event','$sub')";
								if(mysqli_query($c,$i))
								{
									header('Location:branch.php');
									
								}
							}
							
						
						?>
		
					</div>	
				</div>
				<div class="row view-header" style="font-size:19px;">
					<div class="col-lg-1">Sr No.</div>
					
					<div class="col-lg-3">Branch Name</div>
					<div class="col-lg-3">Sub Name</div>
					
					<div class="col-lg-3" style="text-align:center;">Action</div>				
				</div>
				<br/>
				<?php
					$i=0;
					$s="select * from branch ORDER BY id ASC";
					$tmp=mysqli_query($c,$s);
					while($result=mysqli_fetch_array($tmp))
					{
						$i++;
						$id=$result['id'];
						$branch=$result['name'];
						$sub=$result['subname'];
					?>	
					<div class="row view-item" style="font-size:15px;">
						<div class="col-lg-1"><?php echo $i;?></div>
						
						<div class="col-lg-3"><?php echo $branch;?></div>
						<div class="col-lg-3"><?php echo $sub;?></div>
						
						<div class="col-lg-3">
							<div class="col-lg-6"><a class="btn btn-success btn-block" href="update_branch.php?r=<?php echo $id;?>">Update</a></div>				
							<div class="col-lg-6"><a class="btn btn-danger btn-block" href="delete_branch.php?q=<?php echo $id;?>">Delete</a></div>		
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