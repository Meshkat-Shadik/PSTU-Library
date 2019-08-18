
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
	<style>
	*
	{
		font-family: century gothic;
	}
	body
	{
		background: url(photos/deer.jpg);
		background-size: cover;
	}

	th {
  text-align: center;
  padding: 15px;
  border: 3px solid white;
}
 td {
  text-align: center;
  /*padding: 30px;*/
   border: 3px solid white;
}
tr:nth-child(even) {
  background-color: #f2f2f2
}
tr:nth-child(odd) {
  background-color: #f3f3f3
}
.button-labels label { 
    display: inline-block; 
    border: solid 1px #ddd; 
    background-color: #0080C0;
    padding: 3px;
}
	</style>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="js/modal.js"></script>
</head>
<body>



	  <nav class="navbar navbar-inverse navbar-fixed-top" id="nav-top">
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





	<p style="font-size: 30px;color: white;text-align: center;margin-top: 20px;"><u>All student's list</u></p>
	<div class="container">
		<div class="row">
			<div style="margin-top: 5%;">
				<div class="row">

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
			 	$sql = "SELECT issue_book.id as id,issue_book.s_name as sname,issue_book.s_id as sid, issue_book.s_semester as ssem, issue_book.s_fac as sfac, issue_book.s_email as semail, issue_book.i_date as idate, issue_book.r_date as rdate, book_datas.img as img, book_datas.name as Name, book_datas.author as author from  issue_book,book_datas WHERE (issue_book.id = book_datas.id and book_datas.name = '$searchkey');" ;

			 }
			 else
			 {
			 	$sql = "SELECT issue_book.id as id,issue_book.s_name as sname,issue_book.s_id as sid, issue_book.s_semester as ssem, issue_book.s_fac as sfac, issue_book.s_email as semail, issue_book.i_date as idate, issue_book.r_date as rdate, book_datas.img as img, book_datas.name as Name, book_datas.author as author from  issue_book,book_datas WHERE issue_book.id = book_datas.id;" ;
			 	$searchkey = "";
			 }
	 		 $result = mysqli_query($conn,$sql);

		?>

				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo $searchkey;?> > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>

					</div>
				</form>

				<br>
				<br>
				</div>
				<table style="width:100%;">
					<tr style="background-color: #CAEEFF;">
						<th>Issued Date</th>
						<th>Id</th>
						<th>Image</th>
						<th>Name</th>
						<th>Author</th>
						<th>Student's Name</th>
						<th>Student's Faculty</th>
						<th>Student's Semester</th>
						<th>Student's Id</th>
						<th>Student's Email</th>
						
						<th>Retain Date</th>
						<!-- <th>Quantity</th> -->
						<th>Message Him/Her</th>
					</tr>
					<?php 

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

// id	s_name	s_id	s_semester	s_fac	s_email	i_date	r_date 	
            		?>

					<tr>
						<td><?php echo $row->idate?></td>
						<td><?php echo $row->id?></td>
						<td><?php echo "<img src=".$row->img." width=110 height=110>" ?> </td>
						<td><?php echo $row->Name?></td>
						<td><?php echo $row->author?></td>
						<td><?php echo $row->sname?></td>
						<td><?php echo $row->sfac?></td>
						<td><?php echo $row->ssem?></td>
						<td><?php echo $row->sid?></td>
						<td><?php echo $row->semail?></td>
						<td><?php echo $row->rdate?></td>
						<td><div class="button-labels">
							<form action="msg.php" method="POST">
						<input type="checkbox" id="finRot" name="something" value=<?php echo $row->sid?> >
			<button name="BTN">Message</button>
			</form>
						</form>
							</div>
						</td>
					</tr>
					<?php
				}
				//d 	name 	author 	img 	s_name 	s_id 	s_semester 	s_fac 	s_email 	i_date 	r_date 	quan 
				?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>