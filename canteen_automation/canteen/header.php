<?php 

include('db.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Canteen Panel</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="img/ico" href='img/favicon-icon.png'>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="https://use.fontawesome.com/10a964325b.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
	
		$(document).ready(function(){
    $("#menu_icon").click(function(){
        $(".open_sidbar").toggleClass("small_sidebar");
        $('.remove_text').toggleClass('text_hide');
        $('#content_body').toggleClass('margin_left');
    });
});
	
	</script>
</head>

<body style="background-color:#00FF33">


 <!--////////////////TOP NAVBAR FIXED NAVBAR////////////////-->
    <div class="main-container">
        <nav class="navbar navbar-fixed-top admin-navbar">
            <div class="container-fluid" style="background:black !important;">
                <div class="navbar-header" style="display: inline-block;">
                    <button id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></button>
                   
                </div>

				<h1 style="color: #fff" align="CENTER">WELCOME TO CANTEEN PANAEL </h1>
                
            </div>
        </nav>

        <aside class="hit_sidebar open_sidbar sidebar-slide-push">
            <br>
			<br>
			<ul>
               
               


                
            
               
				<li><a href="users.php">
            <span class="remove_text">Update/Delete Profile</span></a></li>

<li><a href="add_category.php">
            <span class="remove_text">Add Canteen Items Catogory</span></a></li>
                <li><a href="manage_categories.php">
            <span class="remove_text">Manage Catogery</span></a></li>
            

            <li><a href="add_products.php">
            <span class="remove_text">Add Items Detail</span></a></li>
			 
            
			
                <li><a href="manage_products.php">
            <span class="remove_text"> Manage Detail</span></a></li>
            <li><a href="manage_orders.php">
            <span class="remove_text"> Manage/View Custonmer Order</span></a></li>
          
               
       


           

        
			
			 
			
                <li><a href="logout.php">
           
            <span class="remove_text">Logout</span> </a></li>
            </ul>
        </aside>
     



    </div>









</body>
</html>