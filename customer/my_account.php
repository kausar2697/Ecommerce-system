<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

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
   				<a href="#" class="btn btn-success btn-sm">
   					 <?php
            if (!isset($_SESSION['customer_email'])) {
              echo "Welcome : Guest";
            }else {
              echo "Welcome :" . $_SESSION['customer_email'] . "";
            }
            ?>
   				</a>
   				<a href="#">Shopping Cart Total Price : ৳ <?php totalPrice1(); ?>, Total Items <?php item1(); ?></a>
   			</div><!--col-md-6 offer END-->

   			<div class="col-md-6 ">
   				<ul class="menu">
   					<li>
   						<a href="../customer_registration.php">Register</a>
   					</li>

   					<li>
   						<?php
              if(!isset($_SESSION['customer_email'])){
                 echo "<a href='checkout.php'>My Account</a>";
              }else{

                 echo "<a href='my_account.php?my_order'>My Account</a>";
              }
              ?>
   					</li>

   					<li>
   						<a href="../cart.php">Goto Cart</a>
   					</li>

   					<li>
   						<a href="">
           

           <?php
                  if (!isset($_SESSION['customer_email'])) {
                      echo "<a href='../checkout.php'>Login</a>";
                    }else {
                      echo "<a href='../logout.php'>Log Out</a>";
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
  				<a class="navbar-band home" href="">
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
   					<li>
   						<a href="../index.php">Home</a>
   					</li>
   					<li >
   						<a href="../shop.php">Shop</a>
   					</li>
   					<li class="active">
   						<?php
              if(!isset($_SESSION['customer_email'])){
                 echo "<a href='../checkout.php'>My Account</a>";
              }else{

                 echo "<a href='my_account.php?my_order'>My Account</a>";
              }
              ?>
   					</li>
   					<li>
   						<a href="../cart.php">Shopping Cart</a>
   					</li>
   					<!-- <li>
   						<a href="../about.php">About Us</a>
   					</li>
   					<li>
   						<a href="../services.php">Services</a>
   					</li> -->
   					<li>
   						<a href="../contactus.php">Contact Us</a>
   					</li>
   				</ul>
   			</div><!--padding nav end-->
   			<a href="../cart.php" class="btn btn-primary navbar-btn right">
   				<i class="fa fa-shopping-cart"></i>
   				<span><?php item1(); ?> items In Cart</span>
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



   <div id="content">
     <div class="container"> <!--Container Start-->
       <div class="col-md-12"><!--col-md-12 Start-->
          <ul class="breadcrumb">
            <li><a href="../index.php">Home</a></li>
            <li>
              My Account
            </li>
          </ul>         
       </div><!--col-md-12 End-->

       <div class="col-md-3"><!--col-md-3 Start-->
         <?php 
            include("includes/sidebar.php");
         ?>
       </div><!--col-md-3 End-->

       <div class="col-md-9">
        <!-- Including My order.php page start -->
         <?php
         if(isset($_GET['my_order'])){
         include("my_order.php");
       }
         ?>
          <!-- Including My order.php page End -->

          <!--Including Pay offline Start-->

          <?php
          if(isset($_GET['pay_offline'])){
            include("pay_offline.php");
          }
          ?>
          <!--Including Pay offline End-->


          <!--Including Edit Account Start-->
          <?php
          if(isset($_GET['edit_act'])){
            include("edit_act.php");
          }
          ?>
         
          <!--Including Edit Account End-->

          <!--Including Change Password  Start-->
          <?php
          if(isset($_GET['change_pass'])){
            include("change_password.php");
          }
          ?>
         
          <!--Including Chage Password End-->



          <!--Including Delete Account  Start-->
         <?php
          if (isset($_GET['delete_ac'])) {
            include("delete_ac.php");
          }
         ?>
         
          <!--Including Delete Account End-->




       </div>

        </div><!--Container End-->
   </div><!--Content End-->


   <!--footer start-->
 <?php 
include("includes/footer.php")
  ?>
<!--footer end-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php } ?>