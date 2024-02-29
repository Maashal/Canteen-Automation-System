
    <?php
session_start();

require('connection.php');

?>
 
 
 <style>

.menu
{
background-color: black;

height: auto;
padding: 0 50px;
margin: 0px;
z-index: 1;
opacity: 0.9;
}

.menu  .navbar-nav > .active > a
{
background-color : black;
color: white;
font-weight: bold;
}

.menu  .navbar-nav >  li >  a
{
font-size: 20px;
background-color: black;
color: white;


}
.menu  .navbar-nav >  li >  a:hover
{
background-color: Black;
}

.navbar-header > a
{
font-family: 'Ubuntu Condensed', sans-serif;
padding: 0px;
margin: 0px;
text-decoration: none;
color: white;
font-size: 100px;
padding: 10px 30px;
}
.navbar-header > a:hover
{
text-decoration: none;
color: #04A3ED;
}



</style>






<div class="menu">
    
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	
  
 
    <ul class="nav navbar-nav">
     
    
	

	
	<?php

	
if (isset($_SESSION['name']))

{
	echo '
		
</a></li>
	<li><a href="index.php">Home</a></li>

	
	<li><a href="order_details.php">Order Details</a></li>
<li><a href="users.php">Update/Delete Profile</a></li>

	
	
	  

	        
      <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class=""></span>Logout</a></li></ul>
';
}
else {
	
	echo '



</a></li>

<ul class="nav navbar-nav navbar-right">

<li><a href="index.php">Home</a></li>
	
		 <li><a href="login.php">Customer Login</a></li>

		 
		  <li><a href="register.php">Register</a></li>
		   <li><a href="admin/login.php">Admin Login</a></li>
		   <li><a href="canteen/login.php">Canteen Login</a></li> </ul>';
}

?>

</ul>

<ul class="nav navbar-nav navbar-right">

 <li ><a href="cart.php" class="btn btn-info" style="font-size:18px !important">Shopping Cart <?php
						error_reporting(0);
                        // count products in cart
                        $cart_count=count($_SESSION['shopping_cart']);
                        ?>
						<i class="" aria-hidden="true"></i>

                      <span class="qty"> <?php echo $cart_count; ?> </span>
					   <i class="" aria-hidden="true" style="margin-left: 25px;"></i>
						<?php echo $_SESSION['Name']; ?></a></li>
    </ul>
  </div>
</nav>
</div>
</div>
</div>
</div>
