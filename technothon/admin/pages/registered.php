<?php
	include 'db.php';	
	include 'header.php';
	$r=$_GET['r'];		
?>
	<title>Technothon | Admin | <?php echo $r;?></title>
      <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-transform:uppercase"><?php echo $r;?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>                
				<div class="row view-header">
					
				<div class="box">
                <div class="box-body no-padding">
                  <table class="table">
                    <tr>
                      <th>#</th>
                      <th>Leader Name</th>
                      <th>Memeber1</th>
                      <th>Memeber2</th>
                      <th>Memeber3</th>
                      <th>Memeber4</th>
                      <th>Memeber5</th>
                      <th>Enrollment</th>
                      <th>Event</th>
                      <th>Fees</th>
                      <th>Branch</th>
                      <th>College</th>
                      <th>Phone</th>
                      <th>Email</th>
                    </tr>
                    <?php	
						$i=0;
						$sr="select * from event where branch='$r'";
						$tmpr=mysqli_query($c,$sr);
						while($resultr=mysqli_fetch_array($tmpr))
						{
							$event=$resultr['name'];
							
							$s="select * from registration where event='$event'";
							$tmp=mysqli_query($c,$s);
							while($result=mysqli_fetch_array($tmp))
							{
								$i++;
								$fees=$result['fees'];
								$event=$result['event'];
								$name=$result['fullName'];
								$cName=$result['cName'];
								$phone=$result['phone'];
								$email=$result['email'];
								$branch=$result['branch'];
								$enNumber=$result['enNumber'];
								$tmember1=$result['tmember1'];
								$tmember2=$result['tmember2'];
								$tmember3=$result['tmember3'];
								$tmember4=$result['tmember4'];
								$tmember5=$result['tmember5'];
							?>
								<tr class="view-item">
								  <td><?php echo $i;?></td>
								  <td><?php echo $name;?></td>
								  <td><?php echo $tmember1;?></td>
								  <td><?php echo $tmember2;?></td>
								  <td><?php echo $tmember3;?></td>
								  <td><?php echo $tmember4;?></td>
								  <td><?php echo $tmember5;?></td>
								  <td><?php echo $enNumber;?></td>
								  <td><?php echo $event;?></td>
								  <td><?php echo $fees;?></td>
								  <td style="text-transform:uppercase"><?php echo $branch;?></td>
								  <td style="text-transform:uppercase"><?php echo $cName;?></td>
								  <td><?php echo $phone;?></td>
								  <td><?php echo $email;?></td>
								</tr>
							<?php
							}
						}	
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

					
					
				</div>
				
				<!-- /.row -->
			</div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php 
	include 'footer.php';
?>
