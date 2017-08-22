<!DOCTYPE html>
<html>
<head>  
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style\baseline_css.css">
<link rel="stylesheet" type="text/css" href="style\booking_css.css">

<script type="text/javascript" src="script\booking.js"> </script>

</head>

<body onload = "functionReadOnly()"> 

<?php 
	session_start();
	include("header.php"); 
?>

<!-- Content start-->
<div class="content" style= "background-image: url('matrix_bg_5.jpg');background-repeat:repeat;" >

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
				<a href="Design1_contactpage.php"> Contact Us </a> 
			</li>

			<li class="delimiter"></li>
			
		</ul>
		</nav>
		</div>
	<!-- include nav bar here -->
		
		<div class="center_del1nav-12">
		</div>
		
		<div class="center1" >
		
			<span class="text" > <h4> Book Now ! <h4> </span>
						
			<hr> </hr>
			
			<!-- <form name="form" class="form" method="post" action='Design1_cart.php' onsubmit = "return functionCheckQuantity()" > -->
			<form name="form" class="form" method="post" action='Design1_cart.php' onsubmit = "return functionCheckQuantity()" > 
										
				<label for="moviename" > Movie <span class="required" >*</span> </label> </br>
				<span class="option_box">
				<select id="selectMovie" required name="movie" onchange = "functionselectMovie()">
					<option name="movie" value=""> </option>
					<option name="movie" value="AC"> London Has Fallen </option>
					<option name="movie" value="CH"> Kung Fu Pang 3 </option>
					<option name="movie" value="RC"> My Big Greek Fat Wedding 2 </option>
					<option name="movie" value="AF"> Mother and Son </option>
				</select>
				</span>
				</br>
				
				<hr class="delimiter1"> </hr>
				
				<label for="moviename" > Day <span class="required" >*</span> </label> </br> 
				<span class="option_box_day">
				<!-- id="day" has been addded for js -->
				<select id="selectDay" required name="day" onchange = "functionSelectDay(); " > <!-- ;functionReset()">  -->
						<option name="day" value=""> </option>
				</select>
				</span>
				</br>
				
				<hr class="delimiter1"> </hr>
				
				<label for="moviename" > Time <span class="required" >*</span> </label> </br> 
				<span class="option_box_time">
				<select id="selectTime" required name="time">
					<option name="time" value=""> </option>
				</select>	
				</span>
				<br>	
				
				<hr class="delimiter1"> </hr>
				
				<hr> </hr>
			
				<!-- Table of tickets and display price:
				<br>
				<hr> </hr>
				-->
				
				<table class="table1" id = "tableId" >
				<tr >
					<td class="exp"> Ticket Type </th>
					<td> Price </th>
					<td> Quantity </th>
					<td> Cost </th>
				</tr>
				
				<tr class="border_top">
					<td> Standard Adult  </td>
					<td id="saPrice">  </td> 
					<td> <input id="saAdult" type="number" name="seats[SA]" onchange = "calculatePrice()" > </td> <!-- onclick = "functionQuantityReset()"  -->
					<td id="saAdultST" > $0.00 </td>
				</tr>
				<tr>
					<td> Standard Concession  </td>
					<td> </td> 
					<td> <input id="spConcession" type="number" name="seats[SP]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="spConcessionST" > $0.00 </td>
				</tr>	
				<tr>
					<td> Standard Child  </td>
					<td> </td> 
					<td> <input id="scChild" type="number" name="seats[SC]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="scChildST"> $0.00 </td>
				</tr>
				
				<tr>
					<td> </td>
					<td> </td> 
					<td  > Sub Total </td>
					<td id = "stdSubTotal" > $0.00 </td>
				</tr>
				
				<tr class="border_top">
					<td> First Class Adult  </td>
					<td> </td> 
					<td> <input id="faAdult" type="number" name="seats[FA]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="faAdultST"> $0.00 </td>
				</tr>
				<tr>
					<td> First Class Child  </td>
					<td> </td> 
					<td> <input id="fcChild" type="number" name="seats[FC]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="fcChildST"> $0.00 </td>
				</tr>
				
				<tr>
					<td> </td>
					<td> </td> 
					<td> Sub Total </td>
					<td id="fcSubTotal"> $0.00 </td>
				</tr>
				
				<tr class="border_top">
					<td> Beanbag - 1 Person  </td>
					<td> </td> 
					<td> <input id="b1Bean" type="number" name="seats[B1]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="b1BeanST"> $0.00 </td>
				</tr>
				<tr>
					<td> Beanbag - 2 Person  </td>
					<td> </td> 
					<td> <input id="b2Bean" type="number" name="seats[B2]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="b2BeanST"> $0.00 </td>
				</tr>
				<tr>
					<td> Beanbag - 3 Person </td>
					<td> </td> 
					<td> <input id="b3Bean" type="number" name="seats[B3]" min="0" max="100" onchange = "calculatePrice()" > </td>
					<td id="b3BeanST"> $0.00 </td>
				</tr>
				
				<tr>
					<td> </td>
					<td> </td> 
					<td> Sub Total </td>
					<td id="beanSubTotal"> $0.00 </td>
				</tr>
				
				<tr rowspan="0" class="border_top">
					<td> </td>
					<td> </td> 
					<td> Total <input id="iTotalPrice" type="hidden" name="total" > </td>
					<td id="totalPrice">  $0.00 </td>
				</tr>
				</table>
				
				<hr> </hr>
			
				<input class="book" name="submit" type="submit" value="Add to Cart" >
			</form>	
			
			<?php
				
				$viewCartDisplayFlag = "true";
							
				if(isset($_SESSION['customer']))
				{					
					$viewCartDisplayFlag = "false";
				}
				
				if(isset( $_SESSION['cart'] ) && $viewCartDisplayFlag == "true"  )
				{
					if(isset($_SESSION['cart']))
					{
						$sizeOfCart = sizeof($_SESSION['cart']);
						
						if($sizeOfCart>0)
						{
							echo "<hr> </hr>";
							echo "<form action=Design1_cart.php method=post>";
								echo "<input class=book name=viewCart type=submit value='View Cart' >";
							echo "</form>";
							echo "<hr> </hr>";		
						}
					}
				}
			?>
		
		</div>
		
		<div class="center_del1-footer">
		</div>
		
		
	</div><!-- center div -->

	<div class="right" >
	
	</div>


</div>
<!-- Content end-->

			<?php
			if(isset($_POST['deleteAll']))
			{
				session_start();				
				session_destroy();			
				echo "<meta http-equiv=refresh content=0>";
			}		
			?>

<?php 
	session_start();
	include("footer.php"); 
 ?>


</body>
</html>