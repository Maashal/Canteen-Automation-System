<?php 
include("header.php");
include ("db.php");
?>


  <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
		table, th, td {
	text-align: center;
}
    </style>



<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#myTable').DataTable();
    
});
</script>



<div class="container">
	<div class="row" style="    margin-top: 75px;">
	
		<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Complete  Customer Orders List</h3>
	<hr>
	<br>
	
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		       <th>Serial Number</th>
    		        <th>Name</th>
    		        <th>Email</th>
					<th>Mobile Number</th>
					<th>City</th>
					<th>Total Bill</th>
					<th>Payment Method</th>
					<th>Account Number</th>
					<th>Issued Date </th>
	        
	           
			<th>Order Status</th>
			<th>Delivery Status</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from orders";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{

						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['name']; ?> </td>
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['mobile']; ?> </td>
					<td> <?php echo $row['city']; ?> </td>
					<td> <?php echo $row['payment']; ?> </td>
					<td> <?php echo $row['mechanic']; ?> </td>
					<td> <?php echo $row['card']; ?> </td>
                    <td> <?php echo $row['order_date']; ?> </td>					
				
				<td><span class="btn btn-primary btn-sm"> <?php echo $row['status']; ?> </span></td>	
				<td><span class="btn btn-primary btn-sm"> <?php echo $row['deliverystatus']; ?> </span></td>	
				
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
	</div>
</div>