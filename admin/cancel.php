		<?php
		include("../db/dbconn.php");
		
		$pr_id = $_GET['id'];
		
		mysqli_query($conn, "UPDATE purchase SET order_stat = 'Cancelled' WHERE purchase_id = '$pr_id'") or die(mysqli_error());
								
		header("location: purchase.php");	
		
		?>