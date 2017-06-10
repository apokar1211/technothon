<?php 
	include 'header.php';
	$r=$_GET['r'];
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
					<?php
					$i=0;
					$s="select * from branch where id=$r";
					$tmp=mysqli_query($c,$s);
					while($result=mysqli_fetch_array($tmp))
					{
						$i++;
						$id=$result['id'];
						$branch=$result['name'];
						$subname=$result['subname'];
					}
					?>
						<div class="col-lg-5">
						<form name="f1" class="panel-body" method="post" action="#">
							<input type="text" name="branch" class="form-control input-lg" value="<?php echo $branch;?>" />
							<br />
							<input type="text" name="sub" class="form-control input-lg" value="<?php echo $subname;?>" />
							<br />
							<input type="submit" name="save" class="btn btn-lg btn-primary btn-block" value="Update" />
						</form>
					</div>
						<?php
							if(isset($_POST['save']))
							{
								$branch=$_POST['branch'];
								$sub=$_POST['sub'];
								$i="update branch set name='$branch',subname='$sub' where id=$r";
								if(mysqli_query($c,$i))
								{
									header('Location:branch.php');
									
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