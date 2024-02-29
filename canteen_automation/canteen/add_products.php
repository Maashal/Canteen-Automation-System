
<?php include("header.php");
include("db.php");

?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
 	
  <h2>Add Canteen Items Detail</h2>
  <hr>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Canteen Items Name</label>  
  <div class="col-md-5">
  <input id="textinput" name="name" type="text" class="form-control input-md" required>
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Canteen Items Catogery</label>  
  <div class="col-md-5">
  <select class="form-control" name="category">
<option value="">Choose catogery

  <?php
$qry = "select * from categories ";
    
    $run = mysqli_query($con, $qry);
    $i = 0;
    
    
    while($row = mysqli_fetch_array($run))
    {

echo "<option value='".$row['title']."'> ".$row['title']." </option>";

    }


?>
  </select>
    
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Canteen items Price</label>  
  <div class="col-md-5">
  <input id="textinput" name="price" type="text" class="form-control input-md" required>
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Canteen Items Image</label>  
  <div class="col-md-5">
  <input id="textinput" name="img" type="file" class="form-control input-md">
    
  </div>
</div>





<div class="form-group">  
  <div class="col-md-2"></div>
  <div class="col-md-5">
<center> <input name="submit" type="submit" value="Submit" class=" input-md btn btn-success">
    </center>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>



 <?php
if (isset($_POST['submit'])) {
    
    
$name = $_POST['name'];
$category = $_POST['category'];

$price = $_POST['price'];
$image = $_POST['img'];

$image =$_FILES['img']['name'];
$image_tmp = $_FILES['img']['tmp_name'];
move_uploaded_file($image_tmp, "upload/$image");




$update = "insert into items (title,  category,  price, image) values ('$name', '$category', '$price', '$image')";

$sql = mysqli_query($con, $update);

    
    if ($sql) {
        
        
        echo "<script> window.alert ('Record successfully added') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>