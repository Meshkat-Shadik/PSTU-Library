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
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width,initial-scale=1">
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
	<title>Book Management</title>
	  <link rel="stylesheet" href="css/bootstrap.css">
	  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="pagination/dataTables.bootstrap.min.css">
	<script type="text/javascript" src="pagination/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="pagination/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="pagination/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-top">
            <div class="container">
                <div class="navbar-header">
    <!-- <a href="Topper.php" class="navbar-brand"> <img src="img/pstu.png" width="50px" height="45px"> --><!-- <div class="welcome" style="float: left;top:0;"> -->
        <!-- <h3 class="blinking">Welcome <?php //echo $_SESSION['NAME'];?></h3>
   </div></a>  -->
    <ul class="nav navbar-nav navbar-left">
        <!-- <li><a href="#home"><h6 class="blinking">Welcome <?php// echo $_SESSION['NAME'];?></h6></a> -->
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








<div class="container-fluid" style="margin-top: 4%">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Image</th>
                <th>Book Details</th>
                <th>Genre</th>
                <th>Faculty</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $conn = mysqli_connect('localhost','root','','img_show');
            $sql = "select * from book_datas where quan>=1;";
            $result = mysqli_query($conn,$sql);

            ?>
           <?php
                       while($row = mysqli_fetch_object($result))
                    {

                    ?>

                    <tr>
                        <td><?php echo"<img src=".$row->img." width='100' height='120'>";?></td>
                        <td><?php echo $row->name?><p style="color: darkgreen"><br><?php echo $row->author?></p><p style="color: red;"><?php echo " Available(";?><?php echo $row->quan?><?php echo ")"?></p></td>
                        <td><?php echo $row->genre?></td>
                        <td><?php echo $row->faculty?></td>
                    <form action="delete.php" method="POST">
                        <!-- <td><input type="number" name=ds id="chk" value=<?php //echo $row->quan?>></td> -->
                        <td class="text-center"><input type="checkbox" name=ids id="chk" value=<?php echo $row->id?>><button name="dlt" class="btn btn-danger" style="margin-left: 5px">Delete</button></td>
                    </form>
                    <form action="update_book.php" method="POST">
                        <td class="text-center"><input type="checkbox" name=ids id="chk" value=<?php echo $row->id?>><button name="updt" class="btn btn-success" style="margin-left: 5px">Update</button></td>
                    </form>
                    
                    </tr>
                    <?php
                }
                //d     name    author  img     s_name  s_id    s_semester  s_fac   s_email     i_date  r_date  quan 
                ?>
        </tbody>

    </table>

	<div class="pagination-container">
		<nav>
			<ul class="pagination">
				
			</ul>
		</nav>
	</div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
//https://code.jquery.com/jquery-3.3.1.js
//https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
//https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js
</script>

</body>
</html>