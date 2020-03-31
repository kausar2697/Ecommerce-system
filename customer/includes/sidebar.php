<div class="panel panel-default sidebar-menu">
	<div class="panel-heading"><!--panel heading start-->
		
		  <?php 
        
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_image = $row_customer['customer_image'];
        
        $customer_name = $row_customer['customer_name'];
        
        if(!isset($_SESSION['customer_email'])){
            
        }else{
            
            echo "
            
                <center>
                
                    <img src='customer_images/$customer_image' class='img-responsive'>
                
                </center>
                
                <br/>
                
                <h3 class='panel-title' align='center'>
                
                    Name: $customer_name
                
                </h3>
            
            ";
            
        }
        
        ?>


	</div><!--panel heading end-->
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li class="<?php if(isset($_GET[my_order])){echo "active";}?> ">
				<a href="my_account.php?my_order"><i class="fa fa-list"></i> My Orders</a>
			</li>
			<li class="<?php if(isset($_GET[pay_offline])){echo "active";}?>">
				<a href="my_account.php?pay_offline">
					<i class="fa fa-bolt"></i> Pay Offline
				</a>
			</li>


			<li class="<?php if(isset($_GET[edit_act])){echo "active";}?>">
				<a href="my_account.php?edit_act">
					<i class="fa fa-pencil"></i> Edit Account
				</a>
			</li>

			<li class="<?php if(isset($_GET[change_pass])){echo "active";}?>">
				<a href="my_account.php?change_pass">
					<i class="fa fa-user"></i>Change password
				</a>
			</li>

			<li class="<?php if(isset($_GET[my_wishlist])){echo "active";}?>">
				<a href="my_account.php?my_wishlist">
					<i class="fa fa-bolt"></i> My Wishlist
				</a>
			</li>

			<li class="<?php if(isset($_GET[delete_ac])){echo "active";}?>">
				<a href="my_account.php?delete_ac">
					<i class="fa fa-trash-o"></i> Delete Account
				</a>
			</li>

			<li class="<?php if(isset($_GET[logout])){echo "active";}?>">
				<a href="../logout.php?logout">
					<i class="fa fa-sign-out"></i> Logout
				</a>
			</li>

		</ul>
	</div>
</div>