<?php
	include('db/dbconn.php');
	if (isset($_POST['pay_now'])){
		$sid = $_SESSION['id'];
		$total = $_POST['total'];
		
		include ("random_code.php");
		$pr_id = $r_id;
		$date = date("M d, Y");
		$que = mysqli_query($conn, "INSERT INTO `purchase` (purchase_id, student_id, amount, order_stat, order_date) VALUES ('$pr_id', '$st_id', '$total', 'ON HOLD', '$date')") or die (mysqli_error());				
	
		$p_id = $_POST['pid'];
		$oqty = $_POST['qty'];
		
		$i=0;
		foreach($p_id as &$pro_id){
			mysqli_query($conn, "INSERT INTO `purchase_detail` (`product_id`, `order_qty`, `purchase_id`) VALUES ('".($pro_id)."', '".($oqty[$i])."', '".($pr_id)."')") or die(mysqli_error());
			$i++;
		}
		echo "<script>window.location='summary.php?prid=".$pr_id."'</script>";
	}
?>