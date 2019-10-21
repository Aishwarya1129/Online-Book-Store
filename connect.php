<?php
//CODE TO CONNECT PHP WITH DATABASE.
$hostname="localhost"; 		//hostname
$username="root"; 			//username for database
$password=""; 				//database password
$dbname="what_the_book"; 		//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting"); 		//make connection
//$connect becomes the OBJECT/VARIABLE we’ll use to fire queries to database
?>