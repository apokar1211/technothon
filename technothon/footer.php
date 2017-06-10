    <footer id="footer">
 
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav" style="text-transform:uppercase">
								<a href="index.html">Home</a> | 
								<a href="about.html">About</a> |
								<?php
									$s="select * from branch ORDER BY id ASC";
									$tmp=mysqli_query($c,$s);
									while($result=mysqli_fetch_array($tmp))
									{
										?>
										<a href="branch.php?q=<?php echo $result['name'];?>"><?php echo $result['name'];?></a> |
										<?php
									}
								?>
								 
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-3 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2016. Organize by <a style="color:#3D84E6" href="http://www.gecmodasa.ac.in/" rel="develop">GEC Modasa</a>
							</p>
						</div>
					</div>
					</div>
					<br />
		
					<div class="row">
					
						<div class="footerwidget"> 
							
							<div class="contact-info"> 
							<div class="col-md-3 col-sm-6"> 
								<i class="fa fa-map-marker"></i> Shamlaji Road - Modasa<br>
							</div>
							<div class="col-md-3 col-sm-6"> 
							<i class="fa fa-phone"></i> (02774)242633/34<br>
							</div>
							<div class="col-md-3 col-sm-6"> 	
								<i class="fa fa-envelope-o"></i> technothon.2k16@gmail.com
							</div>	
							</div> 
						</div><!-- end widget --> 					
					</div>
				
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	
    
</body>
</html>
