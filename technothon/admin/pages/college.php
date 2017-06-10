<?php 
	include 'header.php';
?>
	<title>Technothon | Admin | College</title>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">College</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-5">
						<form name="f1" class="panel-body" method="post" action="#">
							<input type="text" name="clg" class="form-control input-lg" placeholder="Enter College Name.." />						
							<br />
							<input type="submit" name="save" class="btn btn-primary btn-lg btn-block" value="Save" />
						</form>
						<?php
							if(isset($_POST['save']))
							{
								$clg=$_POST['clg'];
								
								$i="insert into college values('','$clg')";
								if(mysqli_query($c,$i))
								{
									header('Location:college.php');									
								}
							}
						?>
		
					</div>	
				</div>
				<div class="row view-header" style="font-size:19px;">
					<div class="col-lg-1">Sr No.</div>
					<div class="col-lg-3">College Name</div>
					<div class="col-lg-3" style="text-align:center;">Action</div>				
				</div>
				<br/>
				<?php
					$i=0;
					$s="select * from college ORDER BY id ASC";
					$tmp=mysqli_query($c,$s);
					while($result=mysqli_fetch_array($tmp))
					{
						$i++;
						$id=$result['id'];
						$clg=$result['name'];
					?>	
					<div class="row view-item" style="font-size:15px;">
						<div class="col-lg-1"><?php echo $i;?></div>
						
						<div class="col-lg-3"><?php echo $clg;?></div>
						<div class="col-lg-3">
							<div class="col-lg-6"><a class="btn btn-success btn-block" href="update_college.php?r=<?php echo $id;?>">Update</a></div>				
							<div class="col-lg-6"><a class="btn btn-danger btn-block" href="delete_college.php?q=<?php echo $id;?>">Delete</a></div>	
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