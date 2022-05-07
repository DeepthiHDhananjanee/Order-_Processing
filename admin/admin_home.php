<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>order_processing</title>
	<link rel = "stylesheet" type = "text/css" href="../css/style.css?va<?php time();?>" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>


	<style >
		

body{
     background-color:#AFF1ED;


}




	</style>	
	

</head>
<body>

	<div id="header" style="position:fixed;">
		<img src="../img/347.png">
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
					
			?>
				
			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a><i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>
	
	<div id="leftnav">
		<ul>
			
			<li><a href="admin_home.php">Products</a>
				<ul>
					<li><a href="admin_cddvd.php "style="font-size:15px; margin-left:15px;">CD/DVD</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Books</a></li>
					<li><a href="admin_software.php" style="font-size:15px; margin-left:15px;">Software</a></li>
					<li><a href="admin_hardware.php"style="font-size:15px; margin-left:15px;">Hardware</a></li>
				</ul>
			</li>
			<li><a href="purchase.php">Purchases</a></li>
			<li><a href="customer.php">Students</a></li>
			<li><a href="message.php">Messages</a></li>
			<li><a href="order.php">Orders</a></li>
		</ul>
	</div>
	<div id="rightcontent" style="position:absolute; top:10%;">
	
	<div id="container" style="min-width: 310px; height: 600px; max-width: 1000px; margin: 0 auto; background:none; float:left;"></div>

				
	
	</div>

</body>
</html>
