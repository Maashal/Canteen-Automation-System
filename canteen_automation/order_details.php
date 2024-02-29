<?php

include('header.php');
include('sidebar.php'); 


?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
		
<center>
<h2>Orders Summary</h2>

<br>
<table class="table table-bordered" style="width:100%">
  <tr>
    <th>Serial Number</th>
    <th>Name</th> 
    <th>Email</th> 
    <th>Mobile</th> 
    
    <th>Product</th>
    <th>Total Bill</th>
    <th>Account Number</th>
    <th>City</th>
    <th>Order Date</th>
	<th>Order Status</th>
	<th>Delivery Status</th>
	
    
  </tr>
  

  
	   
	<?php
		
		$qry = "select * from orders where email = '" . $_SESSION['email'] . "'  ";
		
		$run = mysqli_query($con, $qry);
		$i = 0;
		
		$run2 = mysqli_num_rows($run);
		
		if (!$run2 > 0) {
			
			echo"<h3>Record not found.</h3>";
		}
		else {
		
		while($row = mysqli_fetch_array($run))
		{
			
			$id = $row ['id'];
			$name = $row ['name'];
			$email = $row ['email'];
			$mobile = $row ['mobile'];
			$product = $row ['product'];
			$payment = $row ['payment'];
			$account = $row ['card'];
			$city = $row ['city'];
			$date = $row ['order_date'];
			$status = $row ['status'];
			$deliverystatus = $row ['deliverystatus']; 
			
			
			
			$i++

	?>
  <tr align="center">
	<td><?php echo $i;?> </td>
	<td><?php echo $name;?></td>	
    <td><?php echo $email; ?></td>
    <td><?php echo $mobile; ?></td>
    <td><?php echo $product; ?></td>
    <td><?php echo $payment; ?></td>
    <td><?php echo $account; ?></td>
    <td><?php echo $city; ?></td>
    <td><?php echo $date; ?></td>
	<td> <span class="btn btn-primary"><?php echo $status; ?> </span> </td>
	<td> <span class="btn btn-warning"><?php echo $deliverystatus; ?> </span> </td>
	
	
   	
	
  </tr>
		<?php }} ?>
</table>




</div>
</div>
</div>




<?php include ('footer.php'); ?>
