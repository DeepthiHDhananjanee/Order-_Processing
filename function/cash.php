<?php

	include('db/dbconn.php');
	if (isset($_POST['cash']))
{
	$student = $_POST['student'];
	$product = $_POST['product_name'];
	$total = $_POST['product_price'];
	$destination = $_POST['destination'];
	
	
		mysql_query("INSERT INTO `purchase` (student, product, size, amount, payment) VALUES ('$student', '$product', $total, '$destination', 'COD')")
			or die (mysql_error());				
}
?>