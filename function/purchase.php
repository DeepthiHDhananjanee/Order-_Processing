<?php

	if (isset($_POST['add']))
{
	
	
	$student = $_POST['student'];
	$product = $_POST['product_name'];
	$price = $_POST['product_price'];
	$qty = $_POST['qty'];
	$amount = $_POST['amout'];
	
		mysql_query ("INSERT INTO cart (prod_id,st_id)  VALUES ('$prod_id', '$st_id')  ") or die(mysql_error());
								
			header("location: product1.php");	
}
?>