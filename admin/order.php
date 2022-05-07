<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>347</title>
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
	<script src="../jscript/jquery-1.9.1.js" type="text/javascript"></script>
	
		<!--Le Facebox-->
		<link href="../facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="../facefiles/jquery-1.9.js" type="text/javascript"></script>
		<script src="../facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
		<script src="../facefiles/facebox.js" type="text/javascript"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox() 
		})
		</script>
		
		<script language="javascript" type="text/javascript">
        function printFunc(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
		</script>



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
				<li>Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>

		
		<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Add Product...</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
								<td><input type="file" name="product_image" required></td>
							</tr>
							<?php include("random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" required></td>
							</tr>
							
							
							<tr>
								<td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="basketball"></td>
							</tr>
						</table>
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="add" value="Add">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
		
		<?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_desc = $_POST['product_desc'];
					
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);
						
								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../photo/".$name);
			

				$q1 = mysqli_query($conn, "INSERT INTO product ( product_id,product_name, product_price, product_desc, product_image,  category)
				VALUES ('$product_code','$product_name','$product_price','$product_desc','$name',  '$category')");
				
				$q2 = mysqli_query($conn, "INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
				header ("location:admin_product.php");
			}}
		}

				?>
			
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
			<li><a href="student_details.php">Students</a></li>
			<li><a href="message.php">Messages</a></li>
			<li><a href="order.php">Orders</a></li>
		</ul>
	</div>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Orders</h2></center></div>
			<br />
				<div style='width:975px;' class="alert alert-info">
					  <table class="table table-hover">	
						<thead>	
							<th>Books/Software/Hardware/CD,DVD</th>
							<th>Transaction No.</th>
							<th>AMOUNT</th>
						</thead>
						  <tbody>
							<?php 
							$Q1 = mysqli_query($conn, "SELECT * FROM purchase WHERE order_stat = 'Confirmed'");
							while($r1 = mysqli_fetch_array($Q1)){
							
							$pr_id = $r1['purchase_id'];
							
							$Q2 = mysqli_query($conn, "SELECT * FROM purchase_detail LEFT JOIN product ON product.product_id = purchase_detail.product_id WHERE purchase_detail.purchase_id = '$pr_id' ");
							$r2 = mysqli_fetch_array($Q2);
							
							$pid = $r2['product_id'];
							$o_qty = $r2['order_qty'];
							
							$p_price = $r2['product_price'];
							$brand = $r2['product_name'];
							
							echo "<tr>";
							
							echo "<td>".$pr_id."</td>";
							echo "<td>".formatMoney($p_price)."</td>";
							echo "</tr>";
							}
							
							$Q3 = mysqli_query($conn, "SELECT sum(amount) FROM purchase WHERE order_stat = 'Confirmed'");
							while($r3 = mysqli_fetch_array($Q3)){
							
							$amnt = $r3['sum(amount)'];
							echo "<tr><td></td><td>TOTAL : </td> <td><b>Rs. ".formatMoney($amnt)."</b></td></tr>";
							}
							?>
						  </tbody>
					    </table>
				</div>
				
				<?php
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}
?>



	
	
	</div>
	</form>
			</div>
			</div>
			
				
			
</body>
</html>