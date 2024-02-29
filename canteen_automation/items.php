<?php 
include('header.php');
include('sidebar.php'); 

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo "<script> window.alert('Item Added in Cart')</script>";
			echo "<script> window.open('cart.php', '_self')</script>";
			
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="home.php"</script>';
			}
		}
	}
}

?>
		<div class="container">
			<br />
			<div class="row">
			<h2 align="center">Selected Catogery Items</h2>
		<hr>
		<br>
		<br>
		
			<?php
			
		
				$query = "SELECT * FROM items where category='".$_GET['view']."' ORDER BY id ASC";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-3" style="text-align: center; background-color: whitesmoke; padding: 20px; border-radius: 10px; margin-bottom: 50px;text-align: center; background-color: whitesmoke; padding: 20px; border-radius: 10px; margin-bottom: 50px !important;     margin: 0px 30px">
				<form method="post" action="items.php?id=<?php echo $row["id"]; ?>">
					<div class="card">
						<img src="canteen/upload/<?php echo $row["image"]; ?>" class="img-responsive" style="max-width: 85%; margin-left: auto; margin-right: auto; height: 160px;" /><br />

						<h4 class="text-info" style="color:#000 !important"><?php echo $row["title"]; ?></h4>

						<h4 class="text-danger" style="color:#000 !important">PKR <?php echo $row["price"]; ?></h4>
						

						<input type="number" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />
						

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary btn-block" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
		
		</div>
	</div>
	
<?php	include ('footer.php'); ?>

