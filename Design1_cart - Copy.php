<!DOCTYPE html>
<html>
<head>  
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style\baseline_css.css">
<link rel="stylesheet" type="text/css" href="style\cart.css">

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
		
			<span class="text" > <h4> Cart <h4> </span>
								
			<hr> </hr>
			
			<?php

				if( isset($_POST['submit']) )
				{
						//session_start();
						$reservation = $_POST;
						$subTotal = 0;
						$overallSubTotal = 0;
					
					
					
					$priceFlag = "high";
					
					//low
					if	(	(	( ( $reservation['day'] == "Monday" || $reservation['day'] == "Tuesday" ) && ( $reservation['time'] == "1pm" || $reservation['time'] == "6pm" || $reservation['time'] == "9pm" ) ) ||
								( ( $reservation['day'] == "Wednesday" || $reservation['day'] == "Thursday" || $reservation['day'] == "Friday" ) && ( $reservation['time'] == "1pm" ) ) 
							)		
						)
						{
							$priceFlag = "low";						
						}
					
					$price = array
									( 
										"high" => array 
										(
										   "SA" => 18.00 , "SP" => 15.00 , "SC" => 12.00 , "FA" => 30.00 , "FC" => 25.00 , "B1" => 30.00 , "B2" => 30.00 , "B3" => 30.00 ,
										),
										
										"low" => array 
										(
										   "SA" => 12.00 , "SP" => 10.00 , "SC" => 8.00 , "FA" => 25.00 , "FC" => 20.00 , "B1" => 20.00 , "B2" => 20.00 , "B3" => 20.00 ,
										)
										
									);
						
					$movie	= array
									(
										"AC" => "London Has Fallen" , "CH" => "Kung Fu Pang 3" , "RC" => "My Big Greek Fat Wedding 2" , "AF" => "Mother and Son" 
									);
					
					$typeOfTicket	= array
											(
												"SA" => "Standard Adult" , "SP" => "Standard Concession" , "SC" => "Standard Child" , 
												"FA" => "First Class Adult" , "FC" => "First Class Child" , 
												"B1" => "Beanbag - 1 Person" , "B2" => "Beanbag - 2 Person" , "B3" => "Beanbag - 1 Person" 
											);
											
					
						
					
					if( $reservation['movie'] == "AC"	)
					{
						$table['title'] = $movie['AC'];
					}
					else if( $reservation['movie'] == "CH"	)
					{
						$table['title'] = $movie['CH'];
					}
					else if( $reservation['movie'] == "RC"	)
					{
						$table['title'] = $movie['RC'];
					}
					else
					{
						$table['title'] = $movie['AF'];
					}
					
					$table_add = array(array());
									
					//low price cal:
					if( $priceFlag == "low" )
					{
						foreach ($reservation['seats'] as $ticketType => $quantity)
						{					
							if( is_numeric($quantity) & $quantity > 0 )
							{
								
								$table['price'] = $price[$priceFlag][$ticketType];
								$table['Quantity'] = $quantity;
								
								$cost = $quantity * $price[$priceFlag][$ticketType]; //get price based on day and time, high or low and then ticket type.
								$subTotal = $subTotal + $cost;
								
								foreach ($typeOfTicket as $key => $value)
								{
									if($ticketType == $key)
									{
										$ticketType = $value	;
									}
								}
								$table['Ticket Type'] = $ticketType;
								$table['cost'] = $cost;
								
								$table_add['reserv'][] = $table;
							}
							else
							{
								unset($reservation['seats'][$ticketType]);
							}
							
							
						}
						$reservation['subtotal'] = $subTotal;
						$reservation['resrv'] = $table_add['reserv'];
						$_SESSION['cart'][] = $reservation;					
					}
										
					else
					{
						foreach ($reservation['seats'] as $ticketType => $quantity)
						{					
							if( is_numeric($quantity) & $quantity > 0 )
							{
								$table['price'] = $price[$priceFlag][$ticketType];
								$table['Quantity'] = $quantity;
								
								$cost = $quantity * $price[$priceFlag][$ticketType]; //get price based on day and time, high or low and then ticket type.
								$subTotal = $subTotal + $cost;
								
								foreach ($typeOfTicket as $key => $value)
								{
									if($ticketType == $key)
									{
										$ticketType = $value	;
									}
								}
								$table['Ticket Type'] = $ticketType;
								$table['cost'] = $cost;
								
								$table_add['reserv'][] = $table;
							}
							else
							{
								unset($reservation['seats'][$ticketType]);
							}
							
						}
						$reservation['subtotal'] = $subTotal;	
						$reservation['resrv'] = $table_add['reserv'];
						$_SESSION['cart'][] = $reservation;					
					}
										
					//display section
					$display = 0;
					$cartSize = sizeof($_SESSION['cart']);
					// Display function 
					function displayInfo() 
					{
						$cartSize = sizeof($_SESSION['cart']);
						$col=4;
						
						$size1=0;
						for($i=0;$i<$cartSize;$i++)
						{
							$size2 = sizeof($_SESSION['cart'][$i]['resrv']);
							$size1 = $size1 + $size2;
						
							//moive, day and time:
							$jSize = sizeof($_SESSION['cart'][$i]['resrv']);
							
							echo "<span class = movie>".$_SESSION['cart'][$i]['resrv'][0]['title']."</span>  </b><br><br>";
							echo "Showing at ";
							echo $_SESSION['cart'][$i]['day'].", ";
							echo $_SESSION['cart'][$i]['time']."<br><br>";
									
							echo "<table class='table1' id = 'tableId' >";
							echo "<tr >";
							echo "<th class='exp'> Ticket Type </th>";
							echo "<th> Price </th>";
							echo "<th> Quantity </th>";
							echo "<th> Cost </th>";
							echo "<th></th>";
							echo "</tr>";
									
							$jSize = sizeof($_SESSION['cart'][$i]['resrv']);
											
							for($j=0;$j<$jSize;$j++)
							{	
								echo "<tr>";
								for($k=0;$k<$col;$k++)
								{
									
									if($k == 0)
										echo "<td>".$_SESSION['cart'][$i]['resrv'][$j]['Ticket Type']."</td>";
								
									else if($k == 1)
										echo "<td>$".$_SESSION['cart'][$i]['resrv'][$j]['price'].".00</td>";
								
									else if($k == 2)
										echo "<td>".$_SESSION['cart'][$i]['resrv'][$j]['Quantity']."</td>";
									
									else
										echo "<td>$".$_SESSION['cart'][$i]['resrv'][$j]['cost'].".00</td>";	
								
								}
								echo "</tr>";
							}

							//subtotal
							echo "<tr>";
								echo "<td> </td>";
								echo "<td> </td>";
								echo "<td> Sub Total </td>";
								echo "<td>$". $_SESSION['cart'][$i]['subtotal'] .".00</td>";
								
								echo "<td>";
									
									echo "<form action=Design1_cart.php method=post>";	
									echo "<input class=book name=index type=hidden value=$i >";
									echo "<input class=book name=empty type=submit value='Remove' >";
									echo "</form>";

								echo "</td>";
								
							echo "</tr>";
							
							echo "</table>";
							echo "<hr></hr>";
							echo "<hr></hr>";
						}
						
					}
					if( $cartSize>0 )
					{	
						displayInfo();
						
						if( $cartSize == 1 )	
						{
							$total = 0;
							for($i=0;$i<$cartSize;$i++)
							{
								$total = $total + $_SESSION['cart'][$i]['subtotal'];
							}
							echo "Total: $".$total.".00<br>";
							
						}
						else
						{
							$total = 0;
							for($i=0;$i<$cartSize;$i++)
							{
								$total = $total + $_SESSION['cart'][$i]['subtotal'];
							}
							echo "Total: $".$total.".00<br>";
							
						}
						echo "<hr> </hr>";
						echo "<form action=Design1_customer.php method=post>";
							echo "<input class=book name=checkOut type=submit value='Check Out' >";
						echo "</form>";
						echo "<hr> </hr>";
						
						echo "<form action=Design1_booking.php method=post>";
							echo "<input class=book name=deleteAll type=submit value='Clear cart' >";
						echo "</form>";
						echo "<hr> </hr>";
					}
					else
					{
						echo "Go back to Booking page";
					}
				}
				
				if(isset($_POST['empty']))
				{
					//session_start();
					$indexValue = $_POST['index'];
					
					unset($_SESSION['cart'][$indexValue]);
					$_SESSION['cart'] = array_values($_SESSION['cart']);

					//display section
					$display = 0;
					$cartSize = sizeof($_SESSION['cart']);
					$indexValue = $_POST['index'];
					// Display function 
					function displayInfo() 
					{
						$indexValue = $_POST['index'];
						$cartSize = sizeof($_SESSION['cart']);
						$col=4;	
						
						$size1=0;
						for($i=0;$i<$cartSize;$i++)
						{
								$size2 = sizeof($_SESSION['cart'][$i]['resrv']);
								$size1 = $size1 + $size2;
							
								//moive, day and time:
								$jSize = sizeof($_SESSION['cart'][$i]['resrv']);
								echo "<span class = movie>".$_SESSION['cart'][$i]['resrv'][0]['title']."</span>  </b><br><br>";
								echo "Showing at ";
								echo $_SESSION['cart'][$i]['day'].", ";
								echo $_SESSION['cart'][$i]['time']."<br><br>";
										
								echo "<table class='table1' id = 'tableId' >";
								echo "<tr >";
								echo "<th class='exp'> Ticket Type </th>";
								echo "<th> Price </th>";
								echo "<th> Quantity </th>";
								echo "<th> Cost </th>";
								echo "<th></th>";
								echo "</tr>";
									
								$jSize = sizeof($_SESSION['cart'][$i]['resrv']);
												
								for($j=0;$j<$jSize;$j++)
								{	
									echo "<tr>";
									for($k=0;$k<$col;$k++)
									{
										if($k == 0)
											echo "<td>".$_SESSION['cart'][$i]['resrv'][$j]['Ticket Type']."</td>";
									
										else if($k == 1)
											echo "<td>$".$_SESSION['cart'][$i]['resrv'][$j]['price'].".00</td>";
									
										else if($k == 2)
											echo "<td>".$_SESSION['cart'][$i]['resrv'][$j]['Quantity']."</td>";
										
										else
											echo "<td>$".$_SESSION['cart'][$i]['resrv'][$j]['cost'].".00</td>";	
									}
									echo "</tr>";
								}	
								
								//subtotal
								echo "<tr>";
									echo "<td> </td>";
									echo "<td> </td>";
									echo "<td> Sub Total </td>";
									echo "<td>$". $_SESSION['cart'][$i]['subtotal'] .".00</td>";
									
									echo "<td>";
										
										echo "<form action=Design1_cart.php method=post>";	
										echo "<input class=book name=index type=hidden value=$i >";
										echo "<input class=book name=empty type=submit value='Remove' >";
										echo "</form>";

									echo "</td>";
									
								echo "</tr>";
								
								echo "</table>";
								echo "<hr></hr>";
								echo "<hr></hr>";
						}
					}
					if( $cartSize>0 )
					{	
						displayInfo();

						if( $cartSize == 1 )	
						{
							$total = 0;
							for($i=0;$i<$cartSize;$i++)
							{
								$total = $total + $_SESSION['cart'][$i]['subtotal'];
							}
							echo "Total: $".$total.".00<br>";
							echo "<hr> </hr>";
						}
						
						else
						{		
							$total = 0;	
							for($i=0;$i<$cartSize;$i++)
							{
								$total = $total + $_SESSION['cart'][$i]['subtotal'];
							}
							echo "Total: $".$total.".00<br>";
							echo "<hr> </hr>";
						}
						echo "<form action=Design1_customer.php method=post>";
							echo "<input class=book name=checkOut type=submit value='Check Out' >";
						echo "</form>";
						echo "<hr> </hr>";
						
						echo "<form action=Design1_booking.php method=post>";
							echo "<input class=book name=deleteAll type=submit value='Clear cart' >";
						echo "</form>";
						echo "<hr> </hr>";
					}	
					else
					{
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
											
						echo "<a href=Design1_booking.php > Go back to Booking page </a>";
						
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
					}
				}
				
				if( isset($_POST['viewCart']) || isset($_POST['customer']) || isset($_POST['goToCart']) || isset($_POST['back']) )
				{
					//session_start();

					//display section
					$display = 0;
					$cartSize = sizeof($_SESSION['cart']);
					
					// Display function 
					function displayInfo() 
					{
					
						$cartSize = sizeof($_SESSION['cart']);
						$col=4;	
						
						$size1=0;
						for($i=0;$i<$cartSize;$i++)
						{
								$size2 = sizeof($_SESSION['cart'][$i]['resrv']);
								$size1 = $size1 + $size2;
							
								//moive, day and time:
								$jSize = sizeof($_SESSION['cart'][$i]['resrv']);
								echo "<span class = movie>".$_SESSION['cart'][$i]['resrv'][0]['title']."</span>  </b><br><br>";
								echo "Showing at ";
								echo $_SESSION['cart'][$i]['day'].", ";
								echo $_SESSION['cart'][$i]['time']."<br><br>";
										
								echo "<table class='table1' id = 'tableId' >";
								echo "<tr >";
								echo "<th class='exp'> Ticket Type </th>";
								echo "<th> Price </th>";
								echo "<th> Quantity </th>";
								echo "<th> Cost </th>";
								echo "<th></th>";
								echo "</tr>";
									
								$jSize = sizeof($_SESSION['cart'][$i]['resrv']);
												
								for($j=0;$j<$jSize;$j++)
								{	
									echo "<tr>";
									for($k=0;$k<$col;$k++)
									{
										if($k == 0)
											echo "<td>".$_SESSION['cart'][$i]['resrv'][$j]['Ticket Type']."</td>";
									
										else if($k == 1)
											echo "<td>$".$_SESSION['cart'][$i]['resrv'][$j]['price'].".00</td>";
									
										else if($k == 2)
											echo "<td>".$_SESSION['cart'][$i]['resrv'][$j]['Quantity']."</td>";
										
										else
											echo "<td>$".$_SESSION['cart'][$i]['resrv'][$j]['cost'].".00</td>";	
									}
									echo "</tr>";
								}	
								
								//subtotal
								echo "<tr>";
									echo "<td> </td>";
									echo "<td> </td>";
									echo "<td> Sub Total </td>";
									echo "<td>$". $_SESSION['cart'][$i]['subtotal'] .".00</td>";
									
									echo "<td>";
										
										echo "<form action=Design1_cart.php method=post>";	
										echo "<input class=book name=index type=hidden value=$i >";
										echo "<input class=book name=empty type=submit value='Remove' >";
										echo "</form>";

									echo "</td>";
									
								echo "</tr>";
								
								echo "</table>";
								echo "<hr></hr>";
								echo "<hr></hr>";
						}
					}
					if( $cartSize>0 )
					{	
						displayInfo();

						if( $cartSize == 1 )	
						{
							$total = 0;
							for($i=0;$i<$cartSize;$i++)
							{
								$total = $total + $_SESSION['cart'][$i]['subtotal'];
							}
							echo "Total: $".$total.".00<br>";
							
						}
							
						else
						{
							$total = 0;
							for($i=0;$i<$cartSize;$i++)
							{
								$total = $total + $_SESSION['cart'][$i]['subtotal'];
							}
							echo "Total: $".$total.".00<br>";
							
						}
						echo "<hr></hr>";
						echo "<form action=Design1_customer.php method=post>";
							echo "<input class=book name=checkOut type=submit value='Check Out' >";
						echo "</form>";
						echo "<hr> </hr>";
						
						echo "<form action=Design1_booking.php method=post>";
							echo "<input class=book name=deleteAll type=submit value='Clear cart' >";
						echo "</form>";
						echo "<hr> </hr>";
					}	
					else
					{
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						
						echo "<a href=Design1_booking.php > Go back to Booking page </a>";
						
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
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
	session_start();
	include("footer.php"); 
 ?>


</body>
</html>