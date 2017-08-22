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
		
			<span class="text" > <h4> Booking Confirmation <h4> </span>
								
			<hr> </hr>
			
			<?php
				
				if( isset($_POST['customer']) )
				{
					//session_start();
					if(isset($_SESSION['cart']))		
					{
						$customerDetails = $_POST;
						$_SESSION['cart'][] = $customerDetails;
						$file = 'session.json';
						$jsonFileWrite = json_encode($_SESSION,JSON_PRETTY_PRINT);
						file_put_contents($file, $jsonFileWrite);
					}
					
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
						
						$cartSize = sizeof($jsonArray['cart']);
						$col=2;
						
						$size1=0;
						for($i=0;$i<$cartSize-1;$i++)
						{
							$file = 'session.json';
							$jsonFileRead = file_get_contents($file);				
							$jsonArray = json_decode($jsonFileRead, TRUE);
							
							$size2 = sizeof($jsonArray['cart'][$i]['resrv']);
							$size1 = $size1 + $size2;
						
							//moive, day and time:
							$jSize = sizeof($jsonArray['cart'][$i]['resrv']);
							
							echo "<table class='table1' id = 'tableId' >";
							
							echo "</tr>";
							echo "<td> Silverado </td>";	
							echo "</tr>";
							
							echo "</table>";
							
							echo "<table class='table1' id = 'tableId' >";
							
							//email pnumber cname
							
							echo "<tr >";
							echo "<td align=left>" .$jsonArray['cart'][$cartSize-1]['cname']. "<br>"
										.$jsonArray['cart'][$cartSize-1]['email']. "<br>"
										.$jsonArray['cart'][$cartSize-1]['pnumber']. 
								 "</td>";
							
							//movie day time	 
							echo "<td align=right>" .$jsonArray['cart'][$i]['resrv'][0]['title']. "<br>"
										.$jsonArray['cart'][$i]['day']. "<br>"
										.$jsonArray['cart'][$i]['time']. 
								 "</td>";	 
								 
							echo "</tr>";
							
							$jSize = sizeof($jsonArray['cart'][$i]['resrv']);
											
							for($j=0;$j<$jSize;$j++)
							{	
								echo "<tr>";
								for($k=0;$k<$col;$k++)
								{
									if($k == 0)
										echo "<td align=left>".$jsonArray['cart'][$i]['resrv'][$j]['Quantity']." x ".$jsonArray['cart'][$i]['resrv'][$j]['Ticket Type']."</td>";
								
									else 
										echo "<td align=right>$".$jsonArray['cart'][$i]['resrv'][$j]['cost'].".00</td>";	
								}
							}
							
							echo "<tr>";
								echo "<td> </td>";
								echo "<td align=right>Total: $". $jsonArray['cart'][$i]['subtotal'] .".00</td>";
							echo "</tr>";	
						
							echo "</table>";
							
							echo "<form action=Design1_printTicket.php method=post>";
								echo "<input class=book name=printIndex type=hidden value=$i >";
								echo "<input class=book name=printTicket type=submit value='Print' >";
							echo "</form>";
							
							echo "<hr></hr>";
						}
					}
					
					
					if( $cartSize>0 )
					{	
						displayInfo();
						
						if( $cartSize == 2 )	
						{
							echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
							echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						}						
					}
					else
					{
						echo "Go back to Booking page";
					}
				}
				
				else if( isset($_POST['back']) )
				{
					//session_start();
					
					$file = 'session.json';
					$jsonFileRead = file_get_contents($file);				
					$jsonArray = json_decode($jsonFileRead, TRUE);
					
					//customer					
									
					//display section
					$display = 0;
					$cartSize = sizeof($jsonArray['cart']);
					// Display function 
					function displayInfo() 
					{
						$file = 'session.json';
						$jsonFileRead = file_get_contents($file);				
						$jsonArray = json_decode($jsonFileRead, TRUE);
						
						$cartSize = sizeof($jsonArray['cart']);
						$col=2;
						
						$size1=0;
						for($i=0;$i<$cartSize-1;$i++)
						{
							$size2 = sizeof($jsonArray['cart'][$i]['resrv']);
							$size1 = $size1 + $size2;
						
							//moive, day and time:
							$jSize = sizeof($jsonArray['cart'][$i]['resrv']);
							
							echo "<table class='table1' id = 'tableId' >";
							
							echo "</tr>";
							echo "<td> Silverado </td>";	
							echo "</tr>";
							
							echo "</table>";
							
							echo "<table class='table1' id = 'tableId' >";
							
							//email pnumber cname
							
							echo "<tr >";
							echo "<td align=left>" .$jsonArray['cart'][$cartSize-1]['cname']. "<br>"
										.$jsonArray['cart'][$cartSize-1]['email']. "<br>"
										.$jsonArray['cart'][$cartSize-1]['pnumber']. 
								 "</td>";
							//movie day time	 
							echo "<td align=right>" .$jsonArray['cart'][$i]['resrv'][0]['title']. "<br>"
										.$jsonArray['cart'][$i]['day']. "<br>"
										.$jsonArray['cart'][$i]['time']. 
								 "</td>";	 
								 
							echo "</tr>";
							
							$jSize = sizeof($jsonArray['cart'][$i]['resrv']);
											
							for($j=0;$j<$jSize;$j++)
							{	
								echo "<tr>";
								for($k=0;$k<$col;$k++)
								{
									
									if($k == 0)
										echo "<td align=left>".$jsonArray['cart'][$i]['resrv'][$j]['Quantity']." x ".$jsonArray['cart'][$i]['resrv'][$j]['Ticket Type']."</td>";
								
									else 
										echo "<td align=right>$".$jsonArray['cart'][$i]['resrv'][$j]['cost'].".00</td>";	
								}
									
								echo "</tr>";
								
								echo "<tr>";
									echo "<td></td>";
									echo "<td align=right> Total: $".$jsonArray['cart'][$i]['resrv'][$j]['cost'].".00</td>";
								echo "</tr>";
							}

							echo "</table>";
							
							echo "<form action=Design1_printTicket.php method=post>";
								echo "<input class=book name=printIndex type=hidden value=$i >";
								echo "<input class=book name=printTicket type=submit value='Print' >";
							echo "</form>";
							
							echo "<hr></hr>";
						}
					}
					if( $cartSize>0 )
					{	
						displayInfo();
						
						if( $cartSize == 2 )	
						{
							echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
							echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";echo "<hr class=delimiter1> </hr>";
						}					
						
					}
					else
					{
						echo "Go back to Booking page";
					}
				}
								
				session_destroy();	
		
				
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