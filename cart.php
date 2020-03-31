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
   					<li class="active">
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
            <li><a href="shop.php">Shop</a></li>
            <li>
              cart
            </li>
          </ul>         
       </div><!--col-md-12 End-->

       <div class="col-md-9" id="cart"><!--col-md-9 start-->
         <div class="box"><!---box start-->
           <form action="cart.php" method="post" enctype="multipart-form-data">


             <h1>Shopping Cart</h1>

             <?php
             $total=0;
             $ip_add=getUserIp();
             $select_cart="select * from cart where ip_add='$ip_add'";
             $run_cart=mysqli_query($con,$select_cart);
             $count=mysqli_num_rows($run_cart);
             ?>
             <p class="text-muted">Currently you have <?php echo $count; ?> items in your cart</p>
             <div class="table-resposive"><!--table-resposive Start-->

               <table class="table">
                 <thead>
                   <tr>
                     <th colspan="2">Product</th>
                     <th>Quantity</th>
                     <th>Unit Price</th>
                     <th>Size</th>
                     <th colspan="1">Delete</th>
                     <th colspan="1">Sub Total</th>
                   </tr>
                 </thead>

                 <tbody>
                   <?php
                  while ($row=mysqli_fetch_array($run_cart)) {
                     $pro_id=$row['p_id'];
                     $pro_size=$row['size'];
                     $pro_qty=$row['qty'];
                     $get_product="select * from products where product_id='$pro_id'";
                     $run_pro=mysqli_query($con,$get_product);
                     while ($row=mysqli_fetch_array($run_pro)) {
                                      
                      $p_title=$row['product_title'];
                      $p_img1=$row['product_img1'];
                      $p_price=$row['product_price'];
                      $sub_total=$row['product_price']*$pro_qty;
                      $total +=$sub_total; 




                                               
                  ?>

                   <tr>
                     <td><img src="admin_area/product_images/<?php echo $p_img1; ?>"></td>
                     <td><a href="details.php?pro_id=<?php echo $pro_id ?>"><?php echo $p_title; ?></a></td>
                     <td><?php echo $pro_qty; ?></td>
                     <td>৳<?php echo $p_price; ?></td>
                     <td><?php echo $pro_size; ?></td>
                     <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                     <td>৳<?php echo $sub_total; ?></td>
                   </tr>

                    <?php
                       }  }
                    ?>


                    
                 </tbody>
                 <tfoot>
                   <tr>
                     <td>
                       <th colspan="5">Total</th>
                       <th colspan="2">৳<?php echo $total; ?></th>
                     </td>
                   </tr>
                 </tfoot>
               </table>
             </div><!--table-resposive End-->

             <div class="box-footer">
               <div class="pull-left"><!--pull-left Start-->
                 <a href="index.php" class="btn btn-default">
                   <i class="fa fa-chevron-left"></i>Continue Shopping
                 </a>
               </div><!--pull-left Start-->
               <div class="pull-right">
                 <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                   <i class="fa fa-refresh">Update Cart</i>
                 </button>
                 <a href="checkout.php" class="btn btn-primary">
                   Proceed to checkout<i class="fa fa-chevron-right"></i>
                 </a>
               </div>
             </div>
           </form>
         </div><!---box End-->

         <?php
         function update_cart(){
          global $con;
          if(isset($_POST['update'])){
            foreach ($_POST['remove'] as $remove_id) {
                  $delete_product="delete from cart where p_id='$remove_id'";
                  $run_del=mysqli_query($con,$delete_product);
                  if ($run_del) {
                    echo "<script>window.open('cart.php','_self')</script>";
                  }
            }
          }

         }

         echo @$up_cart=update_cart();
         ?>

         <div id="row same-height-row"><!--row same-height-Start-->

           <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6-Start-->

             <div class="box same-height headline"><!--box same-height headline Start-->
               <h3 class="text-center"> You Also Like These Products</h3>
             </div><!--box same-height headline  End-->

           </div><!--col-md-3 col-sm-6 End-->



           
          

          <?php
$get_product="select * from products order by rand() LIMIT 0,3" ;
            $run_product=mysqli_query($con,$get_product);
            while ($row=mysqli_fetch_array($run_product)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $pro_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
               $pro_label =$row['product_label'];
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
                            
                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'height='200' width='200'>
                            
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
                                
                            
                            </div>
            
                            $product_label
                        
                        </div>
                    
                    </div>
                    
                    ";
            }
          ?>

         </div><!--row same-height-row End-->

       </div><!--col-md-9 end-->

       <div class="col-md-3"><!--col-md-3 Start-->
         <div class="box" id="order-summary">
           <div class="box-header">
              <h3>Order Summary</h3>
           </div>
           <p class="text-muted">
             Shipping And addintional Costs are calculated based on the values you have entered
           </p>
           <div class="table-resposive">
             <table class="table">
             <tr>
               <td>Order Subtotal</td>
               <th><?php echo $total; ?></th>
             </tr>
             <tr>
               <td>Shipping and Handlaing</td>
               <td>
                 <?php
                 if($count<=0){echo "৳ 0";}else{echo "৳ 60";};
                 ?>

               </td>
             </tr>
             <tr>
               <td>Tax</td>
               <td>৳ 0</td>
             </tr>
             <tr class="total">
               <td>Total</td>
               <td>৳<?php 
                if($count<=0){echo "0";}else{echo ($total+60);};

                ?></td>
             </tr>
           </table>
           </div>
         </div>
       </div><!--col-md-3 end-->

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