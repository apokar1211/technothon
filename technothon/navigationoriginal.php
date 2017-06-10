<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<div class="row">
						<div class="row"><p class="logo"><span class="first">T</span><sub>echno</sub><span class="first">T</span><sub>hon</sub><span class="second">2</span><span class="rotate">K</span><span class="second">16</span></div><div class="row"><span class="logo-header">the jouney begins</span></p></div>
					</div>
					
					<!-- <img src="assets/images/logo.png" alt="Techro HTML5 template"> -->
				</a>	
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.php">home</a></li>
					<li class=""><a href="about.php">about</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown menu<span class="caret"></span></a>										
					<ul class="dropdown-menu">
					<?php
						$i=0;
						$s="select * from branch ORDER BY id ASC";
						$tmp=mysqli_query($c,$s);
						while($result=mysqli_fetch_array($tmp))
						{
							
							?>	
								<li class="" style="text-transform:uppercase"><a href="branch.php?q=<?php echo $result['name']; ?>"><?php echo $result['name']; ?></a></li>
							<?php
							
						}						
					?>
					</ul>
					</li>
					<li class=""><a href="contact.php">contact</a></li>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>