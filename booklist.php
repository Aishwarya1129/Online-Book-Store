<div style="float:left">
<ul>
			
	<?php
		require('includes/config.php');
			include "connect.php";				
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
			
						$res=mysqli_query($connect,$query);
											
						while($row=mysqli_fetch_assoc($res))
							{
								echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
								//pass catid not catnm
								
							}
			
							mysqli_close($connect);
					?>
				</ul>
			</li>
			
		</ul>
		
</div>


<?php
require('includes/config.php');
include "connect.php";

$get_book="select * from book order by RAND() LIMIT 0,9";

$run_book=mysqli_query($connect,$get_book);

while($row_book=mysqli_fetch_assoc($run_book))
{
 $book_id=$row_book['b_id'];
	$book_cat=$row_book['b_subcat'];
	$book_name=$row_book['b_nm'];
	$book_price=$row_book['b_price'];
	$book_image=$row_book['b_img'];
	
	
	echo"
	<div id='single_product' style='float:left; margin:20px;width:220px'>
	<h3>$book_name</h3>
	<a href='detail.php?id=".$row['b_id']."'>
	<img src=".$row_book['b_img']." width='80' height='100'></a>
		<p><b>PRICE:$book_price</b></p>
		
		<a href='home.php?add_cart=><button align='center'>Add to Cart</button></a>
		</div>";
}

?>