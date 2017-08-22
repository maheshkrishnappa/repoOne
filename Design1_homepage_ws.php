<!DOCTYPE html>
<html>
<head>  
<link rel="stylesheet" type="text/css" href="style\baseline_css.css"> 
<link rel="stylesheet" type="text/css" href="style\homepage_css.css"> 
<!-- <link rel="stylesheet" type="text/css" href="style\TableCSSCode.css">  -->
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
				<a class="active" href="Design1_homepage.php"> Home </a> 
			</li>

			<li class="delimiter"></li>

			<li>
				<a href="Design1_NowShowing.php"> Now Showing </a>
			</li>

			</li>

			<li class="delimiter"></li>

			<li> 
				<a href="Design1_booking.php"> Book Now </a> 
			</li>

			<li class="delimiter"></li>

			<li> 
				<a href="Design1_contactpage.php"> Contact Us </a> 
			</li>

			<li class="delimiter"></li>

		</ul>
		</nav>
		</div>
	<!-- include nav bar here -->
		
		<div class="center_del1nav-12">
		</div>
		
		<div class="center1">
		 As part of renovation we have installed new comfortable seats, which is always the key to relaxing and enjoyable movie sessions.
			<img class="img_h1" src="image\seating2.jpg" alt="dv" >
		</div>
		<div class="center2">
		With our latest 3D projector facilities we are taking cinematic artistry to next level. Audiences are guaranteed to be immersed in the 3D visual experience.
			<img class="img_h" src="image\3d.jpg" alt="dv" >
	    </div>
		
		<div class="center_del12-3">
	
		</div>
		
		<div class="pricelist_weekschedule_nav" >
			
			<nav class="secondary_nav">
			<ul>

				<li class="delimiter1"></li>

				<li> 
					<a href="Design1_homepage.php"> PriceList </a> 
				</li>

				<li class="delimiter1"></li>

				<li>
					<a class="active" href="Design1_homepage_ws.php"> Weekly Schedule </a>
				</li>

				<li class="delimiter1"></li>
			</ul>	
			</nav>	
			
		</div>
	
		<div class="center3">
			<!-- weekly schedule --> 
			
			<div class="price_list" >
			
			<table style="width:100%">
				<tr> 
					<th> Weekly Schedule  </th>
					<th> 12 pm </th>
					<th> 1 pm </th>
					<th> 3 pm </th>
					<th> 6 pm </th>
					<th> 9 pm </th>
				</tr>
				
				
				
				<tr>
					<td > 					
						Monday  
					</td>
					<td> 					
						-  
					</td>
					<td > 					
						 Children 
					</td>
					<td> 					
						- 
					</td>
					<td> 					
						Art / Foreign 
					</td> 
					<td>
						Romantic Comedy
					</td>
				</tr>
				
				<tr>
					<td> 					
						Tuesday  
					</td>
					<td> 					
						-  
					</td>
					<td > 					
						 Children 
					</td>
					<td> 					
						- 
					</td>
					<td> 					
						Art / Foreign 
					</td> 
					<td>
						Romantic Comedy
					</td>
				</tr>
				
				<tr>
					<td> 					
						Wednesday  
					</td>
					<td> 					
						-  
					</td>
					<td> 					
						Romantic Comedy 
					</td>
					<td> 					
						-  
					</td>
					<td > 					
						Children 
					</td> 
					<td>
						Action
					</td>
				</tr>
				
				<tr>
					<td> 					
						Thursday  
					</td>
					<td> 					
						-  
					</td>
					<td> 					
						Romantic Comedy 
					</td>
					<td> 					
						-  
					</td>
					<td > 					
						Children 
					</td> 
					<td>
						Action
					</td>
				</tr>
				
				<tr>
					<td> 					
						Friday  
					</td>
					<td> 					
						-  
					</td>
					<td> 					
						Romantic Comedy 
					</td>
					<td> 					
						-  
					</td>
					<td > 					
						Children 
					</td> 
					<td>
						Action
					</td>
				</tr>
				
				<tr>
					<td> 					
						Saturday  
					</td>
					<td > 					
						Children  
					</td>
					<td> 					
						- 
					</td>
					<td> 					
						Art /Foreign  
					</td>
					<td> 					
						Romantic Comedy 
					</td> 
					<td>
						Action
					</td>
				</tr>
				
				<tr>
					<td> 					
						Sunday  
					</td>
					<td > 					
						Children  
					</td>
					<td> 					
						- 
					</td>
					<td> 					
						Art /Foreign  
					</td>
					<td> 					
						Romantic Comedy 
					</td> 
					<td>
						Action
					</td>
				</tr>
				
			</table>
				
			</div>
			
		</div>
		
		<div class="center_del3-4">
		<hr> </hr>
		</div>
		
		<div class="center4">
		Dolby Atmos Cinema Sound creates powerful, moving audio by introducing two important concepts to cinema sound: audio objects and overhead speakers.
		You feel like you're inside the story as lifelike sound flows all around you to create a powerfully moving experience.
					<img class="img_h" src="image\ds_1.jpg" alt="dv" >
		</div>
		
		<div class="center_del4-5">
		<hr> </hr>
		</div>
		
		<div class="center5">
		Dolby Vision transforms your cinema and TV viewing experiences with astonishing brightness, contrast, and color.
		The action comes alive in a strikingly vivid and realistic image that renders each moment with spectacular impact.
					<img class="img_h" src="image\dv_2.jpg" alt="dv" >
		</div>
		
		<div class="center_del1-footer">
		</div>
		
	</div>

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