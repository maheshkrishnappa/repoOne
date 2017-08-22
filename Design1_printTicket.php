<!DOCTYPE html>
<html>
<head>  
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style\baseline_css.css">
<link rel="stylesheet" type="text/css" href="style\confirmation.css">

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
		
			<span class="text" > <h4> Print Ticket <h4> </span>
								
			<hr> </hr>
			<hr> </hr>
			
			<?php

				if( isset($_POST['printTicket']) )
				{
					//session_start();
					
					$indexValue = $_POST['printIndex'];
					
					$file = 'session.json';
					$jsonFileRead = file_get_contents($file);				
					$jsonArray = json_decode($jsonFileRead, TRUE);
									
					//display section
					$display = 0;
					$cartSize = sizeof($jsonArray['cart']);
					// Display function 
					function displayInfo() 
					{
						$file = 'session.json';
						$jsonFileRead = file_get_contents($file);				
						$jsonArray = json_decode($jsonFileRead, TRUE);
						
						echo "<table class='table1' id = 'tableId' >";
							
						$indexValue = $_POST['printIndex'];
						$cartSize = sizeof($jsonArray['cart']);
						$col=2;
						
						$size1=0;
						
						
						//cal sub array size -- done
						//$ticketTypeQty
						for($i=0;$i<$cartSize-1;$i++)
						{
							if($i == $indexValue)
							{
								$subArraySize = sizeof($jsonArray['cart'][$i]['resrv']);				
							}
						}
						
						echo "<table class='table1' id = 'tableId' >";
								
							echo "</tr>";
								echo "<td>".$jsonArray['cart'][$cartSize-1]['cname']."'s ticket(s):</td>";	
							echo "</tr>";
						
						echo "</table>";
						
						//get the qty from each sub array.
						for($i=0;$i<$subArraySize;$i++)
						{
							//display day  time movie ticket type
														
							if($jsonArray['cart'][$indexValue]['resrv'][$i]['Quantity'] == 1)
							{
								//display	
								
								echo "<table class='table1' id = 'tableId' >";
															
								echo "<tr >";
									// day time	 movie
									echo "<td align=left>" .$jsonArray['cart'][$indexValue]['day']. " " .$jsonArray['cart'][$indexValue]['time']. "<br>"
														   .$jsonArray['cart'][$indexValue]['resrv'][$i]['title'].
										 "<br> Silverado <br> <br> <br> </td>";	 
								echo "</tr>";
								
								echo "<tr>";
									echo "<td align=left>".$jsonArray['cart'][$indexValue]['resrv'][$i]['Ticket Type']."</td>";
									echo "<td align=right>Ref ".rand(100000, 1000000)."</td>";
								echo "</tr>";	
								
								echo "</table>";
								
								if( $subArraySize == 1)
								{
									echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";	
								}				
							}
							else if($jsonArray['cart'][$indexValue]['resrv'][$i]['Quantity'] == 2)
							{
								//display	
								$qty = $jsonArray['cart'][$indexValue]['resrv'][$i]['Quantity'];
								for($j=0;$j<$qty;$j++)
								{
									echo "<table class='table1' id = 'tableId' >";
																
									echo "<tr >";
										// day time	 movie
										echo "<td align=left>" .$jsonArray['cart'][$indexValue]['day']. " " .$jsonArray['cart'][$indexValue]['time']. "<br>"
															   .$jsonArray['cart'][$indexValue]['resrv'][$i]['title'].
											 "<br> Silverado <br> <br> <br> </td>";	 
									echo "</tr>";
									
									echo "<tr>";
										echo "<td align=left>".$jsonArray['cart'][$indexValue]['resrv'][$i]['Ticket Type']."</td>";
										echo "<td align=right>Ref ".rand(100000, 1000000)."</td>";
									echo "</tr>";	
									
									echo "</table>";
										
								}
								
								if( $subArraySize == 1)
								{
									echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
								}
							}
							else
							{
								$qty = $jsonArray['cart'][$indexValue]['resrv'][$i]['Quantity'];
								for($j=0;$j<$qty;$j++)
								{
									//display	
								
									echo "<table class='table1' id = 'tableId' >";
																
									echo "<tr >";
										// day time	 movie
										echo "<td align=left>" .$jsonArray['cart'][$indexValue]['day']. " " .$jsonArray['cart'][$indexValue]['time']. "<br>"
															   .$jsonArray['cart'][$indexValue]['resrv'][$i]['title'].
											 "<br> Silverado <br> <br> <br> </td>";	 
									echo "</tr>";
									
									echo "<tr>";
										echo "<td align=left>".$jsonArray['cart'][$indexValue]['resrv'][$i]['Ticket Type']."</td>";
										echo "<td align=right>Ref ".rand(100000, 1000000)."</td>";
									echo "</tr>";	
									
									echo "</table>";
								}
							}	
						}
						echo "<hr class=delimiter1> </hr>";
						echo "<form action=Design1_confirmation.php method=post>";
							echo "<input class=book name=back type=submit value='Back' >";
						echo "</form>";
						echo "<hr></hr>";		
					}
					displayInfo();
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