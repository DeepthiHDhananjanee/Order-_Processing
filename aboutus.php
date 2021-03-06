<?php 
	include("function/login.php");
	include("function/student_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>order_processing</title>
	<link rel="icon" href="img/347.png" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css?va <?php time();  ?>" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

	<style >
	



body{
     background-color:#AFF1ED;


}
</style>


</head>
<body>
	<div id="header">
		<img src="img/347.png">
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
					<li><a href="aboutus.php"></i>About Us</a></li>
				<li><a href="contactus.php"></i>Contact Us</a></li>
				<li><a href="product.php"></i>Product</a>
				<li><a href="index.php"></i>Home</a></li>

			</ul>
	</div>
	
	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	<br>
<div id="container">
	<div class="nav">	
			
	</div>
	
		<img src="img/about-us.jpg" style="width:1150px; height:330px; border:1px solid #000; ">
	<br />
	<br />
	
	<legend>About Us</legend>
		<div id="content">
			<legend><h3>Mission</h3></legend>
					<h4 style="text-indent:60px;">To give high quality branded products and reasonable prices for them.</h4>
			<br />
				<legend><h3>Vision</h3></legend>
					<h4 style="text-indent:60px;">347, the company that inspire, motivate, and give determination to the industry to its fulfillment.</h4>
			<br />
				
		</div>
	<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyrght &copy; </label>
			<p style="font-size:25px;"> 347 Inc. 2020</p>
		</div>	
	</div>
</body>
</html>