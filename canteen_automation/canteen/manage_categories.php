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
	
	<h3>Manage Prodcut Categories</h3>
	<hr>
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        <th>Serial Number</th>
    		        <th>Product Catogory Name</th>
    		        <th>Description</th>
					
					<th> Image</th>
					<th>Action</th>
					<th>Action</th>
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from categories";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					$i=0;
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;
						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['title']; ?> </td>
					<td> <?php echo $row['location']; ?> </td>
					
					<td><img src="upload/<?php echo $row['image']; ?>" class="img-responsive img-thumbnail" style="max-width: 25%;"> </td>
					<td><a href="edit_category.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Edit</td>
					<td><a href="delete_category.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
					
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>