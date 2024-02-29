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
	<div class="row" style="margin: 50px">
	<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Payment Detail</h3>
	<hr>
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
    
    <th>Food Name</th>
   
    <th>Price</th>
   
     <th>Payment Method</th>
        <th>Account Number</th>
   
    <th>Payment Status</th>
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from Items  ";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['title']; ?> </td>
						
					
					<td> <?php echo $row['price']; ?> </td>
					
					
					<td> <?php echo $row['method']; ?> </td>
					<td> <?php echo $row['account']; ?> </td>
					
					<td><span class="btn btn-primary btn-sm"> <?php echo $row['status']; ?> </span></td>
					
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>