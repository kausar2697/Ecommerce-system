<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Aastha Online Shop</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Font Awesome -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>


<body>
   
   <div id="top"><!-- Top Bar Start-->
   	 
   		<div class="container"><!-- Container Start-->

   			<div class="col-md-6 offer"> <!--col-md-6 offer start--> 
   				
   				<a href="#">Shopping Cart Total Price : ৳ <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
   			</div><!--col-md-6 offer END-->

   			<div class="col-md-6 ">
   				<ul class="menu">
   					<li>
   						<a href="customer_registration.php">Register</a>
   					</li>

   					<li>
   						
   						<?php
   						if(!isset($_SESSION['customer_email'])){
   							 echo "<a href='checkout.php'>My Account</a>";
   						}else{

   							 echo "<a href='customer/my_account.php?my_order'>My Account</a>";
   						}
   						?>

   					</li>

   					<li>
   						<a href="cart.php">Goto Cart</a>
   					</li>

   					<li>
   						<a href="login.php">
   							

   							<?php
   						    if (!isset($_SESSION['customer_email'])) {
				              echo "<a href='checkout.php'>Login</a>";
				            }else {
				              echo "<a href='logout.php'>Log Out</a>";
				            }
				   		?>

   						</a>
   						

   					</li>
   				</ul>

   			</div>

   		</div><!-- Container End -->

   </div><!-- Top Bar End-->

   <div class="navbar navbar-default" id="navbar"> <!--navbar navbar-default Start-->
   	<div class="container">
   		<div class="navbar-header"><!--navbar-header Start-->
  				<a class="navbar-band home" href=" ">
  					<img src="images/logo2.jpg" alt="Astha Online Shop" class="hidden-xs">
  					<img src="images/logosm2.jpg" alt="Astha Online Shop" class="visible-xs">
  				</a> 
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
  					<span class="sr-only">Toggle Navigation</span>
  					<i class="fa fa-align-justify"> </i>	
  				</button>
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
  					<span class="sr-only"></span>
  					<i class="fa fa-search"></i>
  				</button>

   		</div> <!--navbar-header End-->

   		<div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse Start-->

   			<div class="padding-nav"> <!--Padding nav start-->
   				<ul class="nav navbar-nav navbar-left">
   					<li class="active">
   						<a href="index.php">Home</a>
   					</li>
   					<li>
   						<a href="shop.php">Shop</a>
   					</li>
   					<li>
   						<?php
   						if(!isset($_SESSION['customer_email'])){
   							 echo "<a href='checkout.php'>My Account</a>";
   						}else{

   							 echo "<a href='customer/my_account.php?my_order'>My Account</a>";
   						}
   						?>
   					</li>
   					<li>
   						<a href="cart.php">Shopping Cart</a>
   					</li>
   					<!-- <li>
   						<a href="about.php">About Us</a>
   					</li>
   					<li>
   						<a href="services.php">Services</a>
   					</li> -->
   					<li>
   						<a href="contactus.php">Contact Us</a>
   					</li>
   				</ul>
   			</div><!--padding nav end-->
   			<a href="cart.php" class="btn btn-primary navbar-btn right">
   				<i class="fa fa-shopping-cart"></i>
   				<span><?php item(); ?> items In Cart</span>
   			</a>

   			<div class="navbar-collapse collapse right"> <!--navbar-collapse collapse right start-->
   				<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
   					<span class="sr-only">Toggle Search</span>
   					<i class="fa fa-search"></i>
   				</button>
   			</div><!--navbar-collapse collapse right End-->

   			<div class="collapse clearfix" id="search">
   				
   				<form class="navbar-form" method="get" action="result.php">
   					<div class="input-group">

   						<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
   				<span class="input-group-btn">
   						<button type="submit" value="Search" name="search" class="btn btn-primary">
   							<i class="fa fa-search"></i>
   						</button>
   				</span>		
   					</div>
   				</form>
   			</div>

   		</div><!--navbar-collapse collapse End-->

   	</div>

   </div><!--navbar navbar-default End-->

   <div class="container" id="slider"><!--slider Start-->

   	<div class="col-md-12">
   		<div class="carousel slide" id="myCarousel" data-ride="carousel"> <!--carousel slide Sart-->
   			<ol class="carousel-indicators">
   				<li data-target="myCarousel" date-slide-to="0" class="action"></li>
   				<li data-target="myCarousel" date-slide-to="1" class="action"></li>
   				<li data-target="myCarousel" date-slide-to="2" class="action"></li>
   				<li data-target="myCarousel" date-slide-to="3" class="action"></li>
   			</ol>
   			<div class="carousel-inner"><!--carousel-inner Start-->
   				
   				<?php
   				$get_slider="select * from slider LIMIT 0,1";
   				$run_slider=mysqli_query($con,$get_slider);
   				while($row=mysqli_fetch_array($run_slider)) {
   					$slider_name=$row['slider_name'];
   					$slider_image=$row['slider_image'];
   					echo "<div class='item active'> 
   					<img src='admin_area/slider_images/$slider_image'>

   					</div>
   					";
   					
   				}
   				?>

   				<?php
   				$get_slider="select * from slider LIMIT 1,3";
   				$run_slider=mysqli_query($con,$get_slider);
   				while($row=mysqli_fetch_array($run_slider)) {
   					$slider_name=$row['slider_name'];
   					$slider_image=$row['slider_image'];
   					echo "<div class='item'> 
   					<img src='admin_area/slider_images/$slider_image'>

   					</div>
   					";
   					
   				}
   				?>


   			</div><!--carousel-inner End-->

   			<a href="#myCarousel" class="left carousel-control" data-slide="next">
   				<span class="glyphicon glyphicon-chevron-left"></span>
   				<span class="sr-only">Previous</span>
   			</a>

   			<a href="#myCarousel" class="right carousel-control" data-slide="prev">
   				<span class="glyphicon glyphicon-chevron-right"></span>
   				<span class="sr-only">next</span>
   			</a>

   		</div><!--carousel slide End-->

   	</div> 
   </div> <!--slider End-->

   <div id="advantage"><!--advantage start-->
   	<div class="container"> <!--container start-->
   		<div class="same-height-row"><!--same-height-row start-->
   			<div class="col-sm-4"> <!--col-sm-4 start-->
   				<div class="box same-height"><!--box same-height start-->
   					<div class="icon">
   						<i class="fa fa-heart"></i>
   					</div>
   					<h3><a href="#">BEST PRODUCT PRICES</a></h3>
   						<p>You can check on all others sites about the prices and then compare with us.</p>
   					
   				</div><!--box same-height start-->
   				
   			</div><!--col-sm-4 end-->
   			
   			<div class="col-sm-4"> <!--col-sm-4 start-->
   				<div class="box same-height"><!--box same-height start-->
   					<div class="icon">
   						<i class="fa fa-heart"></i>
   					</div>
   					<h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
   						<p>Free returns on everything for 3 months</p>
   					
   				</div><!--box same-height start-->
   				
   			</div><!--col-sm-4 end-->

   			<div class="col-sm-4"> <!--col-sm-4 start-->
   				<div class="box same-height"><!--box same-height start-->
   					<div class="icon">
   						<i class="fa fa-heart"></i>
   					</div>
   					<h3><a href="#">WE LOVE OUR CUSTOMER</a></h3>
   						<p>We are khown to provide best possible service</p>
   					
   				</div><!--box same-height start-->
   				
   			</div><!--col-sm-4 end-->

   		</div><!--same-height-row start-->
   	</div> <!--container end-->
   </div> <!--advantage end-->

   <div id="hotbox"><!--hotbox start-->
   	<div class="box">
   		<div class="container">
   			<div class="col-md-12">
   				<h2>Latest this week</h2>
   			</div>
   		</div>
   	</div>
   	
   </div><!--hotbox end-->

   <div id="content" class="container">
   	<div class="row">
			<?php
			 getPro();
			?> 	
   	</div>
   </div>
<!--footer start-->
 <?php 
include("includes/footer.php")
  ?>
<!--footer end-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>