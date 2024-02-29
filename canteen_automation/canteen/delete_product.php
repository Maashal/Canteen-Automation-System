<?php

include ('db.php');

$dell= $_GET['id'];

$abc = "delete from laptop_info where id= '$dell'";

$sql = mysqli_query($link, $abc);

if ($sql) {
	
	echo "<script>alert ('Your Selected Record deleted')</script>";
	header("location:manage_products.php");
}

else {
	
	echo "not";
}


?>