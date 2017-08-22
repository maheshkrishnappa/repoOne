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
				<a  href="Design1_booking.php"> Book Now </a> 
			</li>

			<li class="delimiter"></li>

			<li> 
				<a class="active" href="Design1_contactpage.php"> Contact Us </a> 
			</li>

			<li class="delimiter"></li>

		</ul>
		</nav>
		</div>
	<!-- include nav bar here -->
		
		
		<div class="center_del1nav-12">
		</div>
		
		
		<div class="center1">
			
			<span class="text" > <h4> Contact Us <h4> </span>
						
			<hr> </hr>
		
			<form class="form" method="post" action='http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php'>
				
				<label for="email">  Email<span class="required" >*</span> </label></br>
				<span class="email"> <input email="text" type="email" name="email" size="50" required>  </span> 
				
				<hr class="delimiter1"> </hr>
				
				<label for="subject"> Subject<span class="required" >*</span> </label> </br>
				<span class="option_box">
				<select name="subject" required>
					<option name="subject" value=""> </option>
					<option name="subject" value="General Enquiry" >	General Enquiry  </option>
					<option name="subject" value="Group and Corporate Bookings">  Group and Corporate Bookings </option>
					<option name="subject" value="Suggestions & Complaints"> 	Suggestions & Complaints </option>
				</select>
				</span>
				
				<hr class="delimiter1"> </hr>
								
				<label for="comment"> Comment<span class="required" >*</span> </label> </br>
				<textarea name="message" required></textarea>
				
				<hr class="delimiter1"> </hr>

				<input class="send" type="submit" value="Send" >
				
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