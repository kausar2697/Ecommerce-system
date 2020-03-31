<?php
$active='cart';
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<?php
if(isset($_GET['pro_id'])){
  $pro_id=$_GET['pro_id'];
  $get_product="select * from products where product_id='$pro_id' ";
  $run_product=mysqli_query($con,$get_product);
  $row_product=mysqli_fetch_array($run_product);
  $p_cat_id=$row_product['p_cat_id'];
  $p_title=$row_product['product_title'];
  $p_price=$row_product['product_price'];
  $pro_sale_price = $row_product['product_sale'];
  $p_desc=$row_product['product_desc'];
  $p_img1=$row_product['product_img1'];
  $p_img2=$row_product['product_img2'];
  $p_img3=$row_product['product_img3'];
  $pro_label = $row_product['product_label'];
  $pro_qty = $row_product['product_qty'];
  if($pro_label == ""){

    }

    elseif ($pro_qty<=0){

           $product_label = "
            
                <a href='#' class='label $pro_label'>
                
                    <div class='theLabel'>Stock out</div>
                    <div class='labelBackground'>  </div>
                
                </a>
            
            ";
        }

    else{

        $product_label = "
        
            <a href='#' class='label $pro_label'>
            
                <div class='theLabel'> $pro_label </div>
                <div class='labelBackground'>  </div>
            
            </a>
        
        ";

    }
  $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
  $run_p_cat=mysqli_query($con,$get_p_cat);
  $row_p_cat= mysqli_fetch_array($run_p_cat) ;
  $p_cat_id=$row_p_cat['p_cat_id'];
  $p_cat_title=$row_p_cat['p_cat_title'];

}
?>

<?php
addCart();
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
   				<a href="#">Shopping Cart Total Price : ৳<?php totalPrice(); ?>, Total Items <?php item(); ?></a>
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
   						<a href="index.php">Home</a>
   					</li>
   					<li class="active">
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



   <div id="content">
     <div class="container"> <!--Container Start-->
       <div class="col-md-12"><!--col-md-12 Start-->
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>
              Shop
            </li>
            <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
           </li>
            <li><?php echo $p_title; ?></li>
          </ul>         
       </div><!--col-md-12 End-->

       <div class="col-md-3"><!--col-md-3 Start-->
         <?php 
            include("includes/sidebar.php");
         ?>
       </div><!--col-md-3 End-->


       <div class="col-md-9">
         <div class="row" id="productmain"> <!--Row Start-->
           <div class="col-sm-6"><!--col-sm-6 slider start-->
             <div id="mainimage">
               <div id="mycarousel" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                   <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#mycarousel" data-slide-to="1"></li>
                   <li data-target="#mycarousel" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner"> <!--carousel Inner Start-->
                   <div class="item active">
                     <center>
                       <img src="admin_area/product_images/<?php echo $p_img1; ?>" class="img-responsive" height='450' width='450'>
                     </center>
                   </div>

                   <div class="item">
                     <center>
                      <img src="admin_area/product_images/<?php echo $p_img2; ?>" class="img-responsive" height='450' width='450'>
                     </center>
                   </div>

                   <div class="item">
                     <center>
                      <img src="admin_area/product_images/<?php echo $p_img3; ?>" class="img-responsive" height='450' width='450'>
                     </center>
                   </div>
                 </div><!--carousel-inner  End-->
                 <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                 </a>

                 <a href="#mycarousel" class="right carousel-control" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                 </a>
               </div>
             </div>

             <?php echo $product_label; ?>

           </div><!--col-sm-6 slider End-->

           <div class="col-sm-6">
             <div class="box"> <!--Box start-->


               <h1 class="text-center"><?php echo $p_title; ?>
               </h1>

              
               <form action="details.php?add_cart=<?php echo $pro_id; ?>" method="post" class="form-horizontal"> <!--form start-->
                 <div class="form-group"><!--form-group start-->
                   <label class="col-md-5 control-label">Product Quantity</label>
                   <div class="col-md-7"><!--col-md-7 start-->
                     <select name="product_qty" class="form-control"> 
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                     </select>

                   </div><!--col-md-7 End-->
                 </div><!--form-group End-->

                 <div class="form-group">
                   <label class="col-md-5 control-label">Product Size</label>
                   <div class="col-md-7">
                     <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">
                      <option disabled selected>Select A size</option>
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>
                      <option>Extra Large</option>
                     </select>
                   </div>
                 </div>
                 
                 <?php 

                                  if ($pro_qty<=0) {
                                      echo "

                                            <p class='price'>

                                            Stock Out

                                            </p>

                                        ";

                                    }

                                    elseif($pro_label == "sale"){

                                        echo "

                                            <p class='price'>

                                            PRICE: <del> ৳ $p_price</del><br/>

                                            SALE: ৳ $pro_sale_price

                                            </p>

                                        ";

                                    }
                                    
                                    else{

                                        echo "

                                            <p class='price'>

                                            PRICE: ৳  $p_price

                                            </p>

                                        ";

                                    }
                               
                               ?>


                 <p class="text-center buttons">
                   <button class="btn btn-primary" type="submit">
                     <i class="fa fa-shopping-cart"></i>Add to cart
                   </button>
                 </p>
               </form><!--Form end-->
             </div><!--Box End-->

             <div class="col-xs-4">
               <a href="#" class="thumb">
                <img src="admin_area/product_images/<?php echo $p_img1; ?>" class="img-responsive" height='100' width='100'>
               </a>
             </div>

             <div class="col-xs-4">
               <a href="#" class="thumb">
                <img src="admin_area/product_images/<?php echo $p_img2; ?>" class="img-responsive" height='100' width='100'>
               </a>
             </div>

             <div class="col-xs-4">
               <a href="#" class="thumb">
                <img src="admin_area/product_images/<?php echo $p_img3; ?>" class="img-responsive" height='100' width='100'>
               </a>
             </div>
           </div>
         </div><!--row End-->
         <div class="box" id="details">
           <h4>Product Details</h4>
           <p>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
           <h4>Size</h4>
           <ul>
             <li>Small</li>
             <li>Medium</li>
             <li>Large</li>
             <li>Extra Large</li>
           </ul>
         </div>

         <div id="row same-height-row"><!--row same-height-Start-->

           <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6-Start-->

             <div class="box same-height headline"><!--box same-height headline Start-->
               <h3 class="text-center"> You Also Like These Products</h3>
             </div><!--box same-height headline  End-->

           </div><!--col-md-3 col-sm-6 End-->

         <?php
$get_product="select * from products where p_cat_id='$p_cat_id' order by rand() LIMIT 0,3" ;
            $run_product=mysqli_query($con,$get_product);
            while ($row=mysqli_fetch_array($run_product)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $pro_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
              $pro_label = $row['product_label'];
              $pro_sale_price = $row['product_sale'];
              $pro_qty = $row['product_qty'];

              if($pro_label == "sale"){
            
                        $product_price = " <del> ৳ $pro_price </del> ";
            
                        $product_sale_price = "/ ৳ $pro_sale_price ";
            
                    }else{
            
                        $product_price = "  ৳ $pro_price  ";
            
                        $product_sale_price = "";
            
                    }
            
                    if($pro_label == ""){
            
                    }
                    elseif ($pro_qty<=0){

                                 $product_label = "
                                  
                                      <a href='#' class='label $pro_label'>
                                      
                                          <div class='theLabel'>Stock out</div>
                                          <div class='labelBackground'>  </div>
                                      
                                      </a>
                                  
                                  ";
                              }

                    else{
            
                        $product_label = "
                        
                            <a href='#' class='label $pro_label'>
                            
                                <div class='theLabel'> $pro_label </div>
                                <div class='labelBackground'>  </div>
                            
                            </a>
                        
                        ";
            
                    }
                    
              echo "
                    
                    <div class='col-md-3 col-sm-6 center-responsive'>
                    
                        <div class='product'>
                        
                            <a href='details.php?pro_id=$pro_id'>
                            
                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                            
                            </a>
                            
                            <div class='text'>
            
                            
                            
                                <h3>
                        
                                    <a href='details.php?pro_id=$pro_id'>
            
                                        $product_title
            
                                    </a>
                                
                                </h3>
                                
                                <p class='price'>
                                
                                $product_price &nbsp;$product_sale_price
                                
                                </p>
                                
                                <p class='button'>
                                
                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
            
                                        View Details
            
                                    </a>
                                
                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
            
                                        <i class='fa fa-shopping-cart'></i> Add to Cart
            
                                    </a>
                                
                                </p>
                            
                            </div>
            
                            $product_label
                        
                        </div>
                    
                    </div>
                    
                    ";
            }
          ?>

         </div><!--row same-height-row End-->
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