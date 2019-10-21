<?php


    include "connect.php";
	$sql = "SELECT * FROM book";
	$result = mysqli_query($connect, $sql);
    if($result) {
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$id=$row["b_nm"];
                $description=$row["b_desc"];
                $publisher=$row["b_publisher"];
                $edition=$row["b_edition"];
                $price=$row["b_price"];
                $pages=$row["b_page"];
                $source=$row["b_img"];
				
			}
		}
	}
	else{
		echo "No Books";
	}


?>