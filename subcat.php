
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
		
<?php
 require('includes/config.php');
 session_start();


	
	$cat=$_GET['catnm'];
	
	$q = "select * from subcat where parent_id = ".$_GET['cat'];
	$res = mysqli_query($conn,$q) or die("Can't Execute Query..");
	
	$row1 = mysqli_fetch_assoc($res);
	
	if($_GET['catnm']==$row1['subcat_nm'])
	{
		header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_nm"]);
		
	}
?>

	<!-- start content -->
		<div id="content">
			<div class="post">
				<h2 class="title"><?php echo $_GET['catnm'];?></h2>
					<div class="entry">
						
						<?php
							Do
							{
										
							echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a></li>';
							}while($row1 = mysqli_fetch_assoc($res))
						?>
							
				</div>
							
			</div>
						
		</div>
	<!-- end content -->
					
</body>
</html>
