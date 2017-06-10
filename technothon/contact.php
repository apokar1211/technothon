<?php
	include 'header.php';
?>
	<title>TechnoThon | Contact us</title>
		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>

	<header>
		
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<br /><p></p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.085289057643!2d73.2981419149765!3d23.493437284716727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395df194cdabd479%3A0xf669f2347bbb06cf!2sGovernment+Engineering+College!5e0!3m2!1sen!2s!4v1456223056026" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 						
					</div>
					
					<div class="col-md-6">
						<br /><p></p>
						<form class="form-light mt-20" name="f3" method="post" action="#" role="form">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="yName" class="form-control" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" name="phone" class="form-control" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" name="subject" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" name="msg" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" name="send" class="btn btn-primary">Send message</button><p><br/></p>
						</form>
						<?php
							if(isset($_POST['send']))
							{
								$name=$_POST['yName'];
								$email=$_POST['email'];
								$phone=$_POST['phone'];
								$subject=$_POST['subject'];
								$message=$_POST['msg'];								
								$i="insert into contact values('','$name','$email',$phone,'$subject','$message')";
								if(mysqli_query($c,$i))
								{
									$name       = @trim(stripslashes($name)); 
									$from       = @trim(stripslashes($email)); 
									$subject    = @trim(stripslashes($subject)); 
									$msg		= @trim(stripslashes("Hi...My Name is $name..<br />Phone No. $phone <br />Message:$message")); 
									$to   		= 'technothon.2k16@gmail.com';//replace with your email
									$headers   	= "From: {$name} <{$from}>";								
									mail($to, $subject, $msg, $headers);
								}
								else
								{
									echo "<script>alert('Mail sending Failed.');</script>";
								}
							}												
						?>
					</div>
					
				</div>
			</div>
	<!-- /container -->
<?php
	include 'footer.php';
?>