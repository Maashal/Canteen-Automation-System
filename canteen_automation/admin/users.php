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
	
	<h3>Update/Delete Customer/Canteen Rescord</h3>
	<br>
	
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
    		        <th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Mobile Number</th>
				
					<th>City</th>
					<th colspan="2">Action</th>
					
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from user ";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['type']; ?> </td>
						<td> <?php echo $row['name']; ?> </td>
					
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['Passward']; ?> </td>
					<td> <?php echo $row['mobile']; ?> </td>
					
					<td> <?php echo $row['city']; ?> </td>
					<td><a href="edit_users.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a> 
						
					<a href="delete_users.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>