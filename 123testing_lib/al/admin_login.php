<!DOCTYPE html>
<?php
    session_start();
    if(($_SESSION['NAME'])== null)
    {
         header("Location:Topper.php");
    }
?>
<html>
<head>
	<title>Test</title>
	<style type="text/css">
	*
	{
		font-family: century gothic;
	}
	.colw
	{
		color: white;
	}

		.pad
		{
			padding-right: 80px;
			padding-left: 80px;
			padding-bottom: 80px;
		}
		body
		{
			background-image: url(imm.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.lowpad
		{
			padding: 10px;
		}
		.cont {
  position: relative; /* Center it */
}

.text-block {
  position: absolute;
  bottom: -5px;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.0);
  color: #f1f1f1;
  width: 100%; 
  padding: 20px; 
}
.img-block {
  position: absolute; 
  bottom: -15px;
  left: -2px;
  background: rgb(0, 0, 0); 
  background: rgba(0, 0, 0, 0.0); 
  color: #f1f1f1;
  width: 100%; 
  padding: 20px; 
}
	</style>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div class="container-fluid pad cont">
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="up.png">
			  <div class="text-block"> 
                <h1 class="text-center colw lowpad">PSTU LIBRARY</h1>
                </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
			  	    <div class="welcome" >
                <h1 class="text-center colw lowpad blinking">Welcome <?php echo $_SESSION['NAME'];?></h1>
                </div>
                </div>
		</div>
	</div>
		<div class="row">
		<div class="col-sm-12 text-center">
			<img src="bdy.png">
			  <div class="img-block lowpad"> 
                <img src="photo.jpg">
               </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
                <a href="assign.php"> <h1 class="text-center colw lowpad">Add a new book</h1></a>
                </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
                <a href="academic_list.php"> <h1 class="text-center colw lowpad">See all books</h1></a>
                </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
                <h1 class="text-center colw lowpad">Manage Books</h1>
                </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
            <a href="issue_student.php"><h1 class="text-center colw lowpad">Issued Students</h1></a>
                </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
               <a href="issue_form.php"><h1 class="text-center colw lowpad">Issue a new book</h1></a>
                </div>
		</div>
	</div>
		<div class="row">
		<div class="col-sm-12 text-center">
			<img src="single.png">
			  <div class="text-block"> 
              <a href="logout.php"><h1 class="text-center colw lowpad">Log Out</h1></a>
                </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="up_l.png">
		</div>
	</div>
</div>
</body>
</html>