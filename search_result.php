<div style="float:left">
<ul>
			
	<?php
		require('includes/config.php');
							
	?>
			

	<li id="search">
		<h2>Search</h2>
			<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
			</form>
	</li>
			
	<li>
		<h2>Categories</h2>
			<ul>
					
		
					<?php
										
			
						$query="select * from category ";
			
						$res=mysqli_query($conn,$query);
											
						while($row=mysqli_fetch_assoc($res))
							{
								echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
								//pass catid not catnm
								
							}
			
							mysqli_close($conn);
					?>
				</ul>
			</li>
			
		</ul>
		
	</div>
		
<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>


<div style="float:left">
					<!-- start content -->
							<div id="content">
								
									<div class="entry" >
										
										<table border="3" width="50%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
							
								
							</div>
					<!-- end content -->
</div>
</body>
</html>
