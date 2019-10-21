<?php session_start();
require('connect.php');
?>


<body>
		
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Viewcart</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="user_profile.php" method="POST">
							<table width="100%" border="0">
								<tr >
                                    <Td> <b>No </b>     </Td>
                                    <td> <b>Category </b> </td>
                                    <td> <b>Product </b> </td>
                                    <td> <b>Qty </b> </td>
                                    <td> <b>Rate </b> </td>
                                    <td> <b>Price </b> </td>
                                    <td> <b>Delete </b> </td>
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['name']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></td></tr>
								
							<tr>
                                <td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
                                <Br></Br>
								</table>						

                                
							<center>
							<input type="submit" value=" Re-Calculate " > 
							<a href="checkout.php">CONFIRM & PROCEED<a/>
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
                    </div>
					<!-- end content -->
					
</body>
</html>
