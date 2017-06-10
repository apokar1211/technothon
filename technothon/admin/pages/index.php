<?php
 include 'db.php';
 if(isset($_SESSION['email']))
	{
		header('Location:dashboard.php');
	}
 if(isset($_GET['out']))
	{
		session_destroy();
		session_unset();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Form</title>
	<link rel="icon" href="../img/favicon3.png" />
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="container">
       
            <div class="col-md-5 col-md-offset-5 colmd">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <div class="ttlogo">
							<img src="../img/favicon3.png" alt="" />
							<img src="../../logo/logo.png" />
							<img src="../img/favicon3.png" alt="" />
						</div>
                    </div>
                    <div class="panel-body" >
                        <form class="f1" name="f1" action="#" method="post">

                            
                                <div class="form-group">
                                    <input class="form-control input-lg" name="email" type="email" placeholder="Username" autofocus required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" placeholder="Password" name="password" type="password" required />
                                </div>
                            <!-- Change this to a button or input when using this as a form -->
                           
							<input type="submit" class="btn btn-lg btn-primary btn-block"  name="signin" value="Sign in" />
                        	
    
                        </form>
	<?php 
			if(isset($_POST['signin']))
			{
				$_SESSION['email']=$_POST['email'];
				$_SESSION['password']=$_POST['password'];
				$email=$_SESSION['email'];
				$password=$_SESSION['password'];
				$f=0;
				$s="select * from login where email='$email' AND password='$password'";
				$tmp=mysqli_query($c,$s);
				while($result=mysqli_fetch_array($tmp))
				{
						$f=1;				
				}
				if($f==1)
				{
					header('Location:dashboard.php');
				}
				
				else
				{
					echo "<script>alert('Invalid Email OR Password !!');</script>";					
				}
				
			
			}
	?>
				<hr />
				<a href="#" data-toggle="modal" data-target="#ForgetPassword">I forgot my password</a><br>
				
				<!-- Modal START---->
				<div class="modal fade" id="ForgetPassword" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
			
							<form action="#" method="post" name="f3">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">&times;</span>
										<span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="myModalLabel">Forget Password</h4>
								</div>
								<?php 
									$s="select * from login where id=1";
									$tmp=mysqli_query($c,$s);
									while($result=mysqli_fetch_array($tmp))
									{
										
										$oldemail=$result['email'];
									}
								?>
								<div class="modal-body">
									<div class="input-group">								
										<span class="input-group-addon">@</span>
										<input type="email" name="forget_email" class="form-control" value="<?php echo $oldemail;?>" />
									</div>
									<h6 class="text-danger text-right "><sup>*</sup>Please Enter Your Valid Email for Retreive Password</h6>					
								</div>
								<div class="modal-footer">
									<button type="submit" name="send" class="btn btn-success" >Send</button>
									
									<button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</form>
								
							
						</div>
					</div>
				</div>
				<!-- Modal END ---->
		
                    </div>
					<?php
							if(isset($_POST['send']))
							{
								$forget_email=$_POST['forget_email'];
								$g=0;
								$s="select * from login where email='$forget_email'";
								$tmp=mysqli_query($c,$s);
								while($result=mysqli_fetch_array($tmp))
								{
									$id=$result['id'];
									$g=1;
								}
								if($g==1)
								{																	
									header('Location:forget_mail.php?q='.$id);
								}
								else
								{
								?>
								<br/>
								<div class="alert alert-danger fade in">
									<a href="#" class="close" data-dismiss="alert">&times;</a>
									<strong>Error ! </strong><span> Please Enter Correct E-mail.</span>
								</div>
									
								<?php
								}								
							}
						
						?>
                </div>
            </div>
        
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
