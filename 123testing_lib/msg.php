 <?php
session_start();

?>
<?php
	//var_dump($_POST['something']);
// $conn = mysqli_connect('localhost','root','','img_show');
// 			 if(isset($_POST['BTN']))
// 			 {
// 			 //	$searchkey = $_POST['search'];
// 			 	$val = $_POST['something'];
// 			 	$sql = "SELECT * from  details orderby idate where sid='$value';";
// 			 	   while($row = mysqli_fetch_object($result))
//             		{
//             			echo "<tr>
// 					/
// 					</tr>";
//             		}

//			 }

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Message a student</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>


<body style="background: url(img/bb.jpg);background-size:cover; background-repeat: no-repeat; ">

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


	<div class="container" style="margin-top: 4%">
		<p style="font-size: 30px;color: black;text-align: center;margin-top: 20px;"><u>Book list</u></p>
		<div class="row">
			<div style="margin-top: 1%;">
				<div class="row">

		<?php
		// function dateDiff ($d1, $d2)
		//     {
  // 				return round(abs(strtotime($d1)-strtotime($d2))/86400);
		// 	}
			 $conn = mysqli_connect('localhost','root','','img_show');
			  global $id,$idd,$img,$n,$a,$sn,$sf,$ss,$si,$se,$rd;
			 if(isset($_POST['BTN']))
			 {
			// 	$searchkey = $_POST['search'];
			 	$val = $_POST['something'];

			 //	var_dump($val);
 			 	$sql = "SELECT issue_book.id as id,issue_book.s_name as sname,issue_book.s_id as sid, issue_book.s_semester as ssem, issue_book.s_fac as sfac, issue_book.s_email as semail, issue_book.i_date as idate, issue_book.r_date as rdate, book_datas.img as img, book_datas.name as Name, book_datas.author as author from  issue_book,book_datas WHERE (issue_book.id = book_datas.id and s_id='$val');";

			 }
			 // else
			 // {
			 // 	$sql = "select * from details;";
			 // 	$searchkey = "";
			 // }
	 		 $result = mysqli_query($conn,$sql);

		?>

			<!-- 	<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php// echo $searchkey;?> > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>

					</div>
				</form> -->

				<br>
				<br>
				</div>
				<table class="table borderd-table">
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
						<!-- <th>Message Him/Her</th> -->
					</tr>
					<?php 

					   while($row = mysqli_fetch_object($result))
            		{
            			 $id = $row->idate; 
            			 $idd = $row->id;
            			 $img = $row->img; 
            			 $n = $row->Name; 
            			 $a= $row->author; 
            			 $sn= $row->sname; 
            			 $sf= $row->sfac; 
            			 $ss= $row->ssem; 
            			 $si= $row->sid; 
            			 $se= $row->semail; 
            			 $rd= $row->rdate; 
            			// $dd= dateDiff($rt,$pt);
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
						
					</tr>
					<?php
				}
				//d 	name 	author 	img 	s_name 	s_id 	s_semester 	s_fac 	s_email 	i_date 	r_date 	quan 
				?>
				</table>

				<div class="container-fluid" style="background: #A0CFCF; padding: 20px; margin-bottom: 100px;box-shadow:  0 0 30px #BFBFBF; border: 1px solid black;">
					<form action="mail.php" method="POST">
					<div class="row">
						<label>To:</label><p style="background: white;"><input type="Email" name="xx" style="width: 250px;" value=<?php echo $se; ?>></p>
					</div>
						<div class="row">
						<label>From:</label><p style="background: white;">unknown1602058@gmail.com</p>
					</div>
						<div class="row">
						<label>Subject:</label>
						<input rows="5" class="col-sm-12" name="sub" placeholder="Enter mail subject"></input>
					</div>
					<div class="row">
						<label>Text:</label>
						<textarea rows="5" class="col-sm-12" name="msg"  placeholder="Enter all text"></textarea>
					</div><br>
					<button class="btn btn-primary pull-right" name="btn" >Send</button>
				</form>
				</div>



			</div>
		</div>
	</div>

</body>
</html>