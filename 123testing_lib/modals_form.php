<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student's Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body  style="background: url(img/graa.jpg); background-repeat: no-repeat; background-size:cover; ">

		<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-top" style="margin-bottom: 4%">
			<div class="container">
				<div class="navbar-header">
	<!-- <a href="Topper.php" class="navbar-brand"> <img src="img/pstu.png" width="50px" height="45px"> --><!-- <div class="welcome" style="float: left;top:0;"> -->
        <!-- <h3 class="blinking">Welcome <?php //echo $_SESSION['NAME'];?></h3>
   </div></a>  -->
    <ul class="nav navbar-nav navbar-left">
        <li><a href="#home"><h6 class="blinking">Welcome <?php echo $_SESSION['NAME'];?></h6></a>
        </ul>
					<button class="navbar-toggle" data-toggle="collapse" data-target="#nav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="nav">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="https://www.pstu.ac.bd">Main Website</a>
		<li><a href="Topper.php">Home Page</a>
		<li><a href="#bookk">Books</a>
			<li><a href="#a_us">About us</a>
			<li><a href="#c_us">Contact us</a>
			<li style="margin-top: 15px; margin-left: 5px; color:grey"><form action="MainPage.php" method="post"><a href="logout.php">Logout</a></form></li>

		</ul>
		</div>
			</div>
	</nav>
<h3 class="text-center"><u>Student's Data</u></h3>
<div class="container col-sm-4" style="margin-top: 5%;margin-left: 35%;">
	<form action="student_save.php" method="POST">
	<div class="row">
		Student's Name:
		<input type="text" name="sname" class="form-control" required="">
	</div>
		<div class="row">
		Student's Faculty:
		<br>
		   <label>
                    <select name="faculty"class="form-control" required="">
                    	<option disabled="">Faculty</option>
                        <option>All</option>
                        <option>Agriculture</option>
                        <option>Computer_Science</option>
                        <option>Business_Administration</option>
                        <option>Fisheries</option>
                        <option>Nutrition_and_Food_Science</option>
                        <option>Disaster_Management</option>
                        <option>Land_Management</option>
                    </select>
            </label>
	</div>
		<div class="row">
		Student's Semester:
		<br>
		 <label>
                    <select name="Semester" class="form-control" required="">
                        <option>1st</option>
                        <option>2nd</option>
                        <option>3rd</option>
                        <option>4th</option>
                        <option>5th</option>
                        <option>6th</option>
                        <option>7th</option>
                        <option>8th</option>
                        <option>Masters</option>
                    </select>
	</div>
	
		<div class="row">
		Student's ID:
		<input type="text" name="sid" class="form-control" required="">
	</div>
		<div class="row">
		Student's Email:
		<input type="email" name="semail" class="form-control" required="">
	</div>
		<div class="row">
		Issued Date:
		<input type="date" name="i_date" class="form-control" required="">
	</div>
		<div class="row">
		Retain Date:
		<input type="date" name="r_date" class="form-control" required="">
	</div>
	<div class="row">
		<table class="table borderd-table">
	</form>		
	<?php
	$conn = mysqli_connect('localhost','root','','img_show');
	$hds = $_POST['ids'];
	foreach ($hds as $key => $value) {
	//echo $qu;
	$sq = "Select * from book_datas where id={$value}";
	$result = mysqli_query($conn,$sq);
	 while($row = mysqli_fetch_object($result))
        {
        	$bname[] = $row->name;
        	$bid[] = $row->id;
     //   	var_dump($bname);
        	?>
        	
					<tr>
						<!-- <td><?php //echo $row->i_date?></td> -->
						<td><?php echo $row->id;?></td>
						 <td><img src= <?php echo $row->img;?> width=110 height=110></td>
						<td><?php echo $row->name; ?></td>
						<td><?php echo $row->author; ?></td>
						<td><?php echo $row->genre; ?></td>
						<td><?php echo $row->faculty; ?></td>
						<td><?php echo $row->a_date; ?></td>
						<td><?php echo $row->resource; ?></td>
						<input type="text" name="hd[]" value=<?php echo $row->id;?> required="">
						<!-- <inout type="text" name="xx" value="kanke mage higab koi"> -->
					<!-- <form action="" method="POST"><td><input type="text" name="qu"></td></form> -->
					</tr>
			<?php
        }
}

?>
<button class="btn btn-success btn-lg" name="mod" style="position: fixed; right: 5px;bottom: 5px">Confirm</button></form>
		</div>
	</table>
	</div>

</div>

</table>
</body>
</html>