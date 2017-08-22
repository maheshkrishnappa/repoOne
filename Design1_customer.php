<!DOCTYPE html>
<html>
<head>  
<link rel="stylesheet" type="text/css" href="style\baseline_css.css">
<link rel="stylesheet" type="text/css" href="style\contactpage.css"> 
</head>
<body>


<?php 
	session_start();
	include("header.php"); 
?>


<!-- Content start-->
<div class="content" style= "background-image: url('matrix_bg_5.jpg');background-repeat:repeat;">

	<div class="left" >
	
	</div>

	<div class="center">
	
		<!-- include nav bar here -->
		
		<div class="content_nav">
	
		<nav >
		<ul>

			<li class="delimiter"></li>

			<li> 
				<a  href="Design1_homepage.php"> Home </a> 
			</li>

			<li class="delimiter"></li>

			<li>
				<a href="Design1_NowShowing.php"> Now Showing </a>
			</li>

			<li class="delimiter"></li>

			<li> 
				<a class="active" href="Design1_booking.php"> Book Now </a> 
			</li>

			<li class="delimiter"></li>

			<li> 
				<a  href="Design1_contactpage.php"> Contact Us </a> 
			</li>

			<li class="delimiter"></li>

		</ul>
		</nav>
		</div>
	<!-- include nav bar here -->
		
		
		<div class="center_del1nav-12">
		</div>
		
		
		<div class="center1">
		
			<?php
				if(isset($_POST['checkOut']))
				{
						//session_start();
				}
			?>
			
			
			<span class="text" > <h4> Customer Details <h4> </span>
						
			<hr> </hr>
		
			<form class="form" method="post" action=Design1_confirmation.php>
				
				<!-- Customer Name pattern validation reference: http://www.codeproject.com/Questions/378515/validation-expression-for-name-in-regular-expressi -->
				<label for="cname">  Customer Name <span class="required" >*</span> </label></br>
				<span class="email"> <input type="text" name="cname" size="50" pattern="^[A-Z]'?[- a-zA-Z]+$" required>  </span>

				<hr class="delimiter1"> </hr>				
				
				<label for="email">  Email <span class="required" >*</span> </label></br>
				<span class="email"> <input email="text" type="email" name="email" size="50" required>  </span> 
				
				<hr class="delimiter1"> </hr>
								
				<label for="pnumber">  Customer Phone Number <span class="required" >*</span> </label></br>
				<span class="email"> <input type="text" name="pnumber" size="50" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" required>  </span> 
				
				<hr class="delimiter1"> </hr>

				<input class="send" name=customer type="submit" value="Send" >
				
				<hr> </hr>
			</form>
				
		</div>
		
		<div class="center_del1-footer">
		</div>
		
		
	</div><!-- center div -->

	<div class="right" >
	
	</div>


</div>
<!-- Content end-->

<?php 
	session_start();
	include("footer.php"); 
 ?>


</body>
</html>