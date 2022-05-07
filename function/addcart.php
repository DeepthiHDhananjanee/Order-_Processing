<?php

	if (isset($_POST['add']))
{
	
	
	$prod_id =$_POST['product_id'];
	$stu_id =$_POST['student_id'];
	
		mysql_query ("INSERT INTO cart (prod_id,stu_id)  VALUES ('$prod_id', '$stu_id')  ") or die(mysql_error());
								
			header("location: product1.php");	
}
?>