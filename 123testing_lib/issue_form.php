<?php
session_start();
  if(($_SESSION['NAME'])== null)
    {
         header("Location:Topper.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.float{
	position:fixed;
	width:60px;
	height:60px;
	/*bottom:0px;*/
	right:40px;
	top:10px;
/*	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;*/
}
*
{

}

.my-float{
	margin-top:22px;
}
	</style>
	<title>Issue a new book</title>
	  <link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>




<body style="background: url(img/yl.jpg); background-repeat: no-repeat; background-size:cover; ">
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
            <li><a href="admin_login.php">Admin Page</a>
        <li><a href="Topper.php">Home Page</a>
        <li><a href="updateadmin.php">Profile</a>
            <li><a href="#a_us">News</a>
            <li><a href="#c_us">Feedbacks</a>
            <li style="margin-top: 15px; margin-left: 5px;"> <form action="MainPage.php" method="post" ><a href="logout.php" style="color: grey">Logout</a></form></li>

        </ul>
        </div>
            </div>
    </nav>



	<h3 class="text-center" style="margin-top: 4%"><u>All Book List</u></h3>
	<?php
		function dateDiff ($d1, $d2)
		    {
  				return round(abs(strtotime($d1)-strtotime($d2))/86400);
			}
			 $conn = mysqli_connect('localhost','root','','img_show');
			 global $mm,$sn,$sf,$ss,$si,$rt,$pt,$bn,$ba,$q,$dd;
			 if(isset($_POST['search']))
			 {
			 	$searchkey = $_POST['search'];
			 	$sql = "SELECT * from   book_datas where name like '%$searchkey%'";

			 }
			 else
			 {
			 	$sql = "select * from   book_datas where quan>=1;";
			 	$searchkey = "";
			 }
	 		 $result = mysqli_query($conn,$sql);

		?>
		<div class="container-fluid" style="margin-top: 100px; margin-bottom: 30px; left: 0">
			<div class="row">
		<form action="" method="POST"> 
					<div class="col-md-4">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo $searchkey;?> > 
					</div>
		</form>			
					<div class="col-md-2 text-left">
						<button class="btn">Search</button>
					</div>
					<div class="col-md-4 text-left">
						<button class="btn">Search</button>
						<button class="btn">Search</button>
						<button class="btn">Search</button>
						<button class="btn">Search</button>
						<div>
							<span id ="notvalid" style="color: red;"> </span>
						</div>
					</div>
				
			</div>
		</div>
			<form action="insert.php" method="POST">	

					
<div class="container-fluid col-sm-11">
	<div class="row">
		<div class="col-sm-12">
	<table class="table borderd-table">
					<tr style="background-color: #CAEEFF;" class="fixed-top">
						<th>Id</th>
						<th>Image</th>
						<th>Name</th>
						<th>Author</th>
						<th>Genre</th>
						<th>Faculty</th>
						<th>Arrival Date</th>
						<th>Resource</th>
						<th>Available Quantity</th>
						
						<th>Select</th>
						<th> </th>
						<th> </th>
						<th> </th>

					</tr>
					<?php 
// `id`=[value-1],`img`=[value-2],`name`=[value-3],`author`=[value-4],`genre`=[value-5],`faculty`=[value-6],`a_date`=[value-7],`resource`=[value-8],`quan`=[value-9] WHERE 1
					   while($row = mysqli_fetch_object($result))
            		{
            			// $mm = $row->s_email; 
            			// $sn = $row->s_name; 
            			// $sf = $row->s_fac; 
            			// $ss= $row->s_semester; 
            			// $si= $row->s_id; 
            			// $rt= $row->r_date; 
            			// $pt= $row->i_date; 
            			// $bn= $row->name; 
            			// $ba= $row->author; 
            			// $q= $row->quan; 
            			// $dd= dateDiff($rt,$pt);
            			//if()

            		?>

					<tr>
						<!-- <td><?php //echo $row->i_date?></td> -->
						<td><?php echo $row->id?></td>
						<td><?php echo "<img src=".$row->img." width=110 height=110>" ?> </td>
						<td><?php echo $row->name?></td>
						<td><?php echo $row->author?></td>
						<td><?php echo $row->genre?></td>
						<td><?php echo $row->faculty?></td>
						<td><?php echo $row->a_date?></td>
						<td><?php echo $row->resource?></td>
						<td><?php echo $row->quan?></td>
						
						<td><input type="checkbox" name=ids[] id="chk" value=<?php echo $row->id?> ></td>
						<!-- <td><input type="number" name=ds id="chk" value=<?php //echo $row->quan?>></td> -->
						<td></td>
						<td> </td>
						<td> </td>
					
					</tr>
					<?php
				}
				//d 	name 	author 	img 	s_name 	s_id 	s_semester 	s_fac 	s_email 	i_date 	r_date 	quan 
				?>

				</table>
				<div class="col-sm-2">
						<button class="btn btn-success btn-lg" style="position: fixed; right: 5px;bottom: 5px">Confirm<br>Selected<br>Books</button>
				</div>
			</form>
		</div>
	</div>

</div>

</body>
</html>