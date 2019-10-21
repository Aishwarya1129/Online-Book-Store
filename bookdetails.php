
<?php
	include "connect.php";
    $namebook= $_POST['name'];
	$sql = "SELECT * FROM book where b_nm= '$namebook' ";
    $result = mysqli_query($connect, $sql);
			echo "<center><table border=2 >";
   // session_start();
   // if(isset($_SESSION['status']))
        
                       if($result) {
                         while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>";
				echo $row["b_id"]. " </td><td> " . $row["b_nm"]. " </td><td> " . $row["b_desc"]. " </td><td> " . $row["b_publisher"]." </td><td> " . $row["b_edition"]. " </td><td> " . $row["b_price"]." </td><td> " . $row["b_page"]." </td><td> <img src='" . $row["b_img"]. " ' width='200px' height='200px'/>";
				echo "</td></tr>";    
                       }
                       }
               // echo "<form action='process_cart.php' method='POST'> <input type=text name='name' id='name' value=".$namebook." style='display:none' ><input type='submit' style='color:black;border:none;width:100%' value=".Add to Cart."></form></table></center>";

?>

