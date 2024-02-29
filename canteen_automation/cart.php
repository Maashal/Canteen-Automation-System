<?php

include('header.php');
include('sidebar.php'); 
?>

<style>

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: darkcyan;
}

</style>


	<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">


			   <div class="col-md-12" style="    border: 1px solid #000; padding: 27px; margin-top: 50px">


			   	<br>
			   	<h3>Shopping Cart</h3>
				<hr>
			   	<br>



<table class="table table-striped ">
							<thead>
								<tr>
									
									
									<th>Item Name</th>
									<th>Item Quantity</th>
									<th>Item Price</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>




      <?php   
      if(!empty($_SESSION["shopping_cart"]))  
      {  
           $total = 0;  
           $arr_count = count($_SESSION["shopping_cart"]);
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
      ?>  
      <tr> 
      		  



<tr>

 
<!-- <td class="text-center"><a href="items.php?id=<?php echo $values["item_id"]; ?>"><img width="200px" height="200px" style="1px solid black;box-shadow:0px 2px 5px black" alt="not"  src="admin/upload/<?php echo $values["item_image"]; ?>" ></a></td> -->
<td class="text-center"><?php echo $values["item_name"]; ?></td> 
<td class="text-center"><?php echo $values["item_quantity"]; ?></td> 
<td class="text-center">Rs. <?php echo $values["item_price"]; ?></td>
<td class="text-center"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="btn btn-sm btn-danger">Remove</a></td> 
 

</tr>	







            
            
             
           
           
      </tr>  
      <?php  
                $total = $total + ($values["item_quantity"] * $values["item_price"]);  
           }  
      ?>  
      <tr>  

				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				
				<td>Total Bill <?php echo number_format($total, 2); ?></td> 

           
            
           <td></td>  
      </tr>  
      


<?php 



 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"]);  
                      
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  



 ?>



      <?php  
      	
      	}else{




      		
      				echo "<h3 class='text-center'>Cart is Empty, Add Item into your Cart.</h3>";
      			
      	}

      ?>  

      


									  
							</tbody>
						</table>


					
					

<p class="buttons center">				


<?php 

	if(!empty($_SESSION['shopping_cart']) AND isset($_SESSION['email'])){

		?>
<a href="index.php">
		<button class="btn btn-success" type="submit" id="checkout">Continue Shopping</button></a>
<button class="btn btn-danger" type="submit" id="checkout" data-toggle="modal" data-target="#myModal">Checkout</button>

		<?php

	}else{

		?>
		
		<a href="login.php"><button class="btn btn-danger" type="submit" id="checkout">Login OR Purchase Something</button></a>

		<?php
	}

 ?>

</p>					
			   </div>










			   
			</div>
		 </div>
		</div>
		


	    
     </div>

	 

	 
	 			
			<?php
		  $link= mysqli_connect ("localhost", "root", "", "canteen_automation");

		  if (isset($_POST['submit'])){
		  
		   $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];	
      $product=$_POST['product']; 	
					  $bill=$_POST['bill'];
					  $method=$_POST['method'];
					  $account=$_POST['account'];
					  $address=$_POST['address'];
					  
$book = "insert into orders (name, email, mobile, city, product,  payment, card, mechanic,status,deliverystatus) VALUES('$name', '$email', '$phone', '$address', '$product', '$bill', '$account', '$method', 'Proceed', 'Pending')";
		  
		  
		
		  
		  $sql = mysqli_query ($link, $book);
		  
		  if ($sql) {
			  
			  echo "<script> window.alert ('Your order has been proceed')</script>";
			  unset($_SESSION["shopping_cart"]);
			  echo "<script> window.open('order_details.php', '_self')</script>";
		  }
		  
		 else {
			 
			  echo "<script> window.alert ('Not submit please check the error..!!')</script>";
			 echo "Error: " . $sql . "<br>" . mysqli_error($link);
		 }
		 
		  }
		  
		  ?>





			 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="color: #000 !important;">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="    color: #000 !important;">Checkout Order</h4>
        </div>
        <div class="modal-body">

          
		    <form role="form" method="post">
  <div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control"  name="name" id="name" value="<?php echo $_SESSION['name']; ?>" required readonly>
  </div>
  <div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control"  name="email" value="<?php echo $_SESSION['email']; ?>" required readonly>
  </div>
  <div class="form-group">
  <label for="email">Phone:</label>
  <input type="text" class="form-control" name="phone" id="pass" placeholder="Enter Your Phone" required>
  </div>
  <div class="form-group">
  <label for="image">Address:</label>
  <input type="text" class="form-control" name="address" id="file" placeholder="Enter Your Address" required >
  </div>


<div class="form-group">
  <label for="email">Canteen Items Name:</label>
  <input type="text" class="form-control" name="product" id="pass" Value="<?php echo $values["item_name"]; ?>" required readonly>
  </div>



  <div class="form-group">
  <label for="email">Total Bill:</label>
  <input type="text" class="form-control" name="bill" id="pass" Value="<?php echo number_format($total, 2); ?>" required readonly>
  </div>
  
  <div class="form-group">
  <label for="email">Payment Method:</label>
  <select class="form-control" name="method">
  <option value="">Select Payment Method
  <option value="Bank Account">Bank Account</option>
  <option value="Card">Credit/Debit Card</option>
  </select>
  </div>
  
  
  <div class="form-group">
  <label for="email">Account / Card Number/Invoice Number:</label>
  <input type="number" class="form-control" name="account" id="pass" required>
  </div>
  
  
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
		  
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




	 
	 
     <?php include_once "footer.php"; ?>