<div class="box col-md-9"><!--box begin-->

	<?php
	 $session_email=$_SESSION['customer_email'];
	 $select_customer="select * from customers where customer_email='$session_email'";
	 $run_customer=mysqli_query($con,$select_customer);
	 $row_customer =mysqli_fetch_array($run_customer);
	 $customer_id=$row_customer['customer_id'];
	?>
	<h1 class="text-center">Payment Option For You</h1>

	<p class="lead text-center">
	
	<a href="order_cash_on.php?c_id=<?php echo $customer_id ?>" class="btn btn-primary navbar-btn right">
   				<i class="fa fa-fw fa-money"></i>
   				<span>Cash On Delivery</span>
   	</a>
	</p>
	

	<p class="lead text-center">
	<a href="order.php?c_id=<?php echo $customer_id ?>" class="btn btn-primary navbar-btn right">
   				<i class="fa fa-fw fa-money"></i>
   				<span>Offline Payment</span>
   	</a>
	</p>

	<p class="lead text-center">
	<a href="#" class="btn btn-primary navbar-btn right">
   				<i class="fa fa-fw fa-money"></i>
   				<span>Online Payment</span>
   	</a>
   	<center>
   	<img class="img-responsive" src="admin_area/admin_images/2.jpg" alt="img-paypal" height="400" width="400">
	</center>
	</p>
  
</div><!--Box end-->