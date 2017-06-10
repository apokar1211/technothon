<form name="f3" id="registerForm" method="post" action="#">
		<br /><div class="row">
		<div class="form-group">
			<label class="col-xs-4 control-label ">Event LIst</label>
			<div class="col-xs-8">
				<input type="text" class="form-control" name="event1" value="<?php echo $event; ?>"  disabled/>
				<input type="hidden" class="form-control" name="event" value="<?php echo $event; ?>" />			
			</div>
		</div>
		</div>
		<br /><div class="row">
		<div class="form-group">
			<label class="col-xs-4 control-label ">Fees</label>
			<div class="col-xs-8">
				<input type="text" class="form-control" name="fee" value="<?php echo $fees; ?>"  disabled/>
				<input type="hidden" class="form-control" name="fees" value="<?php echo $fees; ?>"/>
			</div>
		</div>
		</div>
		<br /><div class="row">
			<div class="form-group">
				<label class="col-xs-4 control-label ">Student Name<sup style="color:red">*</sup><sub style="color:red">Enter Name as per Certificate</sub></label>
				<div class="col-xs-8">
					<input type="text" class="form-control" name="fullName" placeholder="Your Name" required />
				</div>
			</div>
		</div>
		<br />
		<!--team Members-->
		<?php 
			$m=1;
			while($m<$member)
			{
				
		?>
		<div class="row">
			<div class="form-group">
				<label class="col-xs-4 control-label">Team Members<?php echo $m; ?><sup style="color:red">*</sup><sub style="color:red">Enter Name as per Certificate</sub></label>
				<div class="col-xs-8">
					<input type="text" class="form-control" name="mName<?php echo $m; ?>" placeholder="member name<?php echo $m; ?>" />
				</div>
			</div>
		</div>
		<br />
		<?php
			$m++;
			}
		?>
		<!--team Members-->
		<div class="row">
		<div class="form-group">
			<label class="col-xs-4 control-label ">College Name<sup style="color:red">*</sup></label>
			<div class="col-xs-8">
			<select  class="form-control" name="cName" required>
				<option  selected="selected" disabled>Select College Name</option>
            <?php 
				$sb="select * from college ORDER BY id ASC";
				$tmpb=mysqli_query($c,$sb);
				while($resultb=mysqli_fetch_array($tmpb))
				{
					$college_name=$resultb['name'];
				?>
				<option style="text-transform:uppercase;"><?php echo $college_name; ?></option>
				<?php
				}
			?>
            </select>
		  </div>
		</div>
		</div>
		<br /><div class="row">
		<div class="form-group">
			<label class="col-xs-4 control-label " >Enrollment No.<sup style="color:red">*</sup></label>
			<div class="col-xs-8">
				<input type="text" class="form-control" name="enNumber" placeholder="Your Enrollment No." required />
			</div>
		</div>
		</div>
		
		<br /><div class="row">	
		<div class="form-group">
			<label class="col-xs-4 control-label ">Branch<sup style="color:red">*</sup></label>
			<div class="col-xs-8">
			<select style="text-transform:uppercase;" class="form-control" name="branch">
				<option  selected="selected"><?php echo $branch; ?></option>
            <?php 
				$sb="select * from branch";
				$tmpb=mysqli_query($c,$sb);
				while($resultb=mysqli_fetch_array($tmpb))
				{
					$branch_name=$resultb['name'];
				?>
				<option><?php echo $branch_name; ?></option>
				<?php
				}
			?>
            </select>
		  </div>
		</div>
		</div>
		
		<br /><div class="row">	
		<div class="form-group">
			<label class="col-xs-4 control-label ">Email address<sup style="color:red">*</sup><sub style="color:red">Enter valid E-mail</sub></label>
			<div class="col-xs-8">
				<input type="email" class="form-control" name="email" placeholder="Your Email" required/>				
			</div>
		</div>
		</div>
		<br /><div class="row">
		<div class="form-group">
			<label class="col-xs-4 control-label ">Phone<sup style="color:red">*</sup><sub style="color:red">Enter valid Phone No.</sub></label>
			<div class="col-xs-8">
				<input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required/>
			</div>
		</div>
		</div>
		<br />
		<div class="row">
		<div class="form-group">
			<label class="col-xs-4 control-label "></label>
			<div class="col-xs-8">
				<button type="submit" class="btn btn-primary " name="register" ><i class="fa fa-sign-in"></i> Register</button>
				<button type="" data-dismiss = "modal" aria-hidden = "true" class="btn btn-danger" name="register" >&times; Cancel</button>
			</div>
		</div>
		</div>
		<br />
		
	</form>  
	<?php
		if(isset($_POST['register']))
		{
			
			$r_event=$_POST['event'];
			$r_fees=$_POST['fees'];
			$r_cName=$_POST['cName'];
			$r_enNumber=$_POST['enNumber'];
			$r_branch=$_POST['branch'];
			$r_email=$_POST['email'];
			$r_phone=$_POST['phone'];
			$r_fullName=$_POST['fullName'];
			
			@$r_member1=$_POST['mName1'];
			@$r_member2=$_POST['mName2'];
			@$r_member3=$_POST['mName3'];
			@$r_member4=$_POST['mName4'];
			@$r_member5=$_POST['mName5'];
			
			$f=0;
			$sr="select * from registration";
			$tmpr=mysqli_query($c,$sr);
			while($resultr=mysqli_fetch_array($tmpr))
			{
				$r_s_name=$resultr['fullName'];
				$r_s_event=$resultr['event'];
				$r_s_phone=$resultr['phone'];
				$r_s_enNumber=$resultr['enNumber'];
				$r_s_email=$resultr['email'];
				
				if(($r_s_name==$r_fullName && $r_s_event==$r_event) || ($r_s_enNumber==$r_enNumber && $r_s_event==$r_event) || ($r_s_email==$r_email && $r_s_event==$r_event) || ($r_s_phone==$r_phone && $r_s_event==$r_event))
				{
					$f=1;
				}
			}
			if($f==1)
			{
				echo "<script>alert('Duplicate Event not Allowed!!')</script>";
			}
			else
			{				
			$ir="insert into registration values('','$r_fullName','$r_event',$r_fees,$r_enNumber,'$r_branch','$r_email',$r_phone,'$r_cName','$r_member1','$r_member2','$r_member3','$r_member4','$r_member5')";
				if(mysqli_query($c,$ir))
				{					
					echo "<script>alert('Registration Successfully');</script>";					
				}
				else
				{	
					echo "<script>alert('Sorry! Registration failed .. Please Give correct Information');</script>";
				}
				
			}	
		}
	?>


