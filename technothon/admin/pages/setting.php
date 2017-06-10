<?php 
	include 'header.php';
?>
	<title>Technothon | Admin | Setting</title>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Setting</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-5">
						<?php 
							$s="select * from login where id=1";
							$tmp=mysqli_query($c,$s);
							while($result=mysqli_fetch_array($tmp))
							{
								
								$oldemail=$result['email'];
								$oldpass=$result['password'];
							}
							?>
						<form name="f1" class="panel-body" method="post" action="#">
							<div class="row">
								<div class="col-lg-4 col-sm-4"><label>Change Email</label></div>
								<div class="col-lg-8 col-sm-8">
								<input type="email" name="email" class="form-control input-lg" value="<?php echo $oldemail;?>" />
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-lg-4 col-sm-4"><label>Change Password</label></div>
								<div class="col-lg-8 col-sm-8">
								<input type="password" name="pass" class="form-control input-lg" value="<?php echo $oldpass;?>" />
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-lg-4 col-sm-4"><label>Re-Type Password</label></div>
								<div class="col-lg-8 col-sm-8">
								<input type="password" name="repass" class="form-control input-lg" value="<?php echo $oldpass;?>" />
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-lg-4 col-sm-4"><label></label></div>
								<div class="col-lg-8 col-sm-8">
									<div class="col-lg-5 col-sm-5">
										<input type="submit" name="save" class="btn btn-success btn-block btn-lg" value="Save" />
									</div>
									<div class="col-lg-5 col-sm-5">
										<input type="reset"  class="btn btn-danger btn-block btn-lg" value="Cancel" />
									</div>
								
								</div>
							</div>
							
						</form>
						<?php
							if(isset($_POST['save']))
							{
								$email=$_POST['email'];
								$pass=$_POST['pass'];
								$repass=$_POST['repass'];
								if($pass==$repass)
								{
									$password=$pass;
									$u="update login set email='$email',password='$password' where id=1";
									if(mysqli_query($c,$u))
									{
										echo "<script>alert('Your Data Updated !!')</script>";
									}
									else
									{
										echo "<script>alert('Your Data Updation Failed... Try Again !!')</script>";
									}
								}
								else
								{
									echo "<script>alert('Password is not Matched!! Please Try Again')</script>";
								}	
								
								
							}
						
						?>
		
					</div>	
				</div>
				
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php 
	include 'footer.php';
?>