<?php 

include('connection.php');
include('header.php');
include('sidebar.php');
?>


<style type="text/css">
   body{
    background: url(123.jpg);
   } 

</style>

<body>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
    <center><h2> All Available Canteen Items</h2></center>
   
   <hr>
   <br><br>

<?php
        
        $xyz= "select * from categories";
        
        $sql = mysqli_query($con, $xyz);
        
        while ($rows= mysqli_fetch_array($sql)) {
            $id         = $rows['id'];
            $name       = $rows['title'];
            $img        = $rows['image'];
        
        ?>


<div class="col-md-2" style="margin-bottom:30px">
    <figure class="card card-product" style="    border: 1px solid !important; background-color: #cccccc57 !important; border-radius: 10px !important;">
        <div class="img-wrap"> 
            <img src="canteen/upload/<?php echo $img; ?>" width="100px" height="100px" style="    margin: 20px;">
        </div>
        <figcaption class="info-wrap">
            <h4 class="title text-dots" align="center"><?php echo $name; ?></h4>
            <div class="action-wrap">
    <a href="items.php?view=<?php echo $name; ?>" class="btn btn-success btn-block">View Items Detail</a>
                
            </div> <!-- action-wrap -->
        </figcaption>
    </figure> <!-- card // -->
</div> <!-- col // -->

        <?php } ?>

<!--container end-->
</div></div></div>

<br>
<br>
<br>











