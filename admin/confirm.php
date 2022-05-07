		<?php
		include("../db/dbconn.php");
		
		$pr_id = $_GET['id'];
		
		mysqli_query($conn, "UPDATE purchase SET order_stat = 'Confirmed' WHERE purchase_id = '$pr_id'") or die(mysqli_error());
						
		
		$query2 = mysqli_query($conn, "SELECT * FROM purchase_detail LEFT JOIN product ON product.product_id = purchase_detail.product_id WHERE purchase_detail.purchase_id = '$pr_id'") or die (mysql_error());
		while($row = mysqli_fetch_array($query2)){
		
		$pid = $row['product_id'];
		$oqty = $row['order_qty'];
		
		$query3 = mysqli_query($conn, "SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
		$row3 = mysqli_fetch_array($query3);
		
		$stck = $row3['qty']; 
		
		$stck_out = $stck - $oqty;
		
		$query = mysqli_query($conn, "UPDATE stock SET qty = '$stck_out' WHERE product_id = '$pid'") or die(mysqli_error());
		}
		header("location: purchase.php");	
		
		?>