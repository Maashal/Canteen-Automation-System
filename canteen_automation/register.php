<?php include('connection.php');
include('header.php');
include('sidebar.php'); 

if (isset($_POST['submit']))
{
	$type= $_POST['type'];
	$name= $_POST['name'];

	$email= $_POST['email'];
	$password= $_POST['password'];
	$mobile = $_POST['mobile'];
	$city= $_POST['city'];
	$date= $_POST['date'];
	$img=$_FILES['image']['name'];
	 
    $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname, "upload/$img");
	
	$xyz="insert into User(type,name,email,Passward,mobile,city,register_date,image,status) values ('$type','$name', '$email', '$password', '$mobile', '$city', '$date','$img', 'pending')";
	
	
	
	$sql= mysqli_query($con, $xyz);

	
	if ($sql) {
		
		echo "<script> alert (' Your data has been submitted', '".$name."')</script>";
		
		
	}
	
	else {
		
		 echo "not";
		
	}
	
	
}




?>
  
<style type="text/css">
	label{
		color: black;
	}

	body {
		
		
		background-image: url(images/text.jpg);
	}
</style>
 

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			



<form class="form-horizontal" method="post" enctype="multipart/form-data">

<h1 align="center">Registration Panal For Customer/Canteen</h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> User Type</font></label>  
  <div class="col-md-4">
  <select name="type" class="form-control">
			
			
			<option value="customer">customer</option>
			<option value="canteen">canteen</option>
			</select>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> User Name</font></label>  
  <div class="col-md-4">
  <input name="name" type="text" placeholder="Enter your Name" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</font></label>  
  <div class="col-md-4">
  <input name="email" type="email" placeholder="Enter Email" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</font></label>  
  <div class="col-md-4">
  <input name="password" type="password" placeholder="Enter Password" class="form-control input-md" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mobile Number</font></label>  
  <div class="col-md-4">
  <input name="mobile" type="number" placeholder="Enter Mobile Number" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</font></label>  
  <div class="col-md-4">
  <input name="city" type="text" placeholder="Enter City Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Registration Date</font></label>  
  <div class="col-md-4">
  <input name="date" id="txtDate" type="text" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Profile Picture</font></label>  
  <div class="col-md-4">
  <input type="file" class="form-control" name="image">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <center><input name="submit" type="submit" placeholder="Submit" class="btn btn-success">
  <a href="index.php" class="btn btn-danger">Cancel</a>
    </center>
  </div>
</div>




</fieldset>
</form>
	
		</div>
	</div>
</div>




