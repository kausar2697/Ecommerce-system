<div id="footer"> <!--Footer Section start-->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 start-->
				<h4>Pages</h4>
				<ul>
					<li><a href="../cart.php">Shopping Cart</a></li>
					<li><a href="../contact.php">Contact</a></li>
					<li><a href="../shop.php">Shop</a></li>
					<li>
						<?php
              if(!isset($_SESSION['customer_email'])){
                 echo "<a href='../checkout.php'>My Account</a>";
              }else{

                 echo "<a href='my_account.php?my_order'>My Account</a>";
              }
              ?>
              	
              </li>
				</ul>
				<hr>
				<h4>User Sections</h4>
				<ul>
					<li><?php
						if(!isset($_SESSION['admin_email'])){
                 echo "<a href='../admin_area/login.php'>Admin Login</a>";
              }else{

                 echo "<a href='../admin_area/index.php?dashboard'>Admin Profile</a>";
              }
						?>							
					</li>

					<li>
						<?php
              if(!isset($_SESSION['customer_email'])){
                 echo "<a href='../checkout.php'>My Account</a>";
              }else{

                 echo "<a href='my_account.php?my_order'>My Account</a>";
              }
              ?>
					</li>
					<li>
						<?php
              if(!isset($_SESSION['customer_email'])){
                 echo "<a href='../customer_registration.php'>Register</a>";
              }else{

                 echo "<a href='my_account.php?edit_act'>Edit Account</a>";
              }
              ?>
					</li>
				</ul>
				<hr class="hidden-md hidden-lg hidden-sm">
			</div> <!--col-md-3 col-sm-6 End-->

			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
				<h4>Top Product Catergories</h4>
				<ul>
					<?php
						$get_p_cats="select * from product_categories";
						$run_p_cats=mysqli_query($con,$get_p_cats);
						while ($row_p_cat=mysqli_fetch_array($run_p_cats)) {
							$p_cat_id=$row_p_cat['p_cat_id'];
							$p_cat_title=$row_p_cat['p_cat_title'];
							echo "<li><a href='../shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>";
						}
						?>
				</ul>
				<hr class="hidden-md hidden-lg">
			</div><!--col-md-3 col-sm-6 End-->

			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
				<h4>Where to find us</h4>
				<p>
					<strong>Asthaonline.com</strong>
					<br>Bashundhara
					<br>Pragati Sharani
					<br>Badda,Dhaka-1229
					<br>asthaonline24@gmail.com
					<br>+88015*********
				</p>
				<a href="../contact.php">Goto contact us page</a>
				<hr class="hidden-md hidden-lg">
			</div><!--col-md-3 col-sm-6 End-->
			
			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
				<h4>Get the News</h4>
				<p class="text-muted">
					Subscribe here for getting news
				</p>
				<form action="" method="post">
					<div class="input-group">
						<input type="text" name="email" class="form-control">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-default" value="Subscribe">
						</span>
					</div>
				</form>
				<hr>
				<h4>Stay In Touch</h4>
				<p class="social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-envelope"></i></a>
				</p>
			</div><!--col-md-3 col-sm-6 End-->

		</div>
	</div>
</div><!--Footer Section End-->

<div id="copyright"><!--Copyright Section start-->
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">
				&copy; 2019 Group:Circle
			</p>
		</div>
		
	</div>
</div><!--Copyright Section End-->