

<html>
<head>
    <title>Query Test</title>
    <style>
        .all
        {
            border: 2px solid black;
            /*background-color: activeborder;*/
            text-align:center;


        }
        *
        {
            font-family: "Century Gothic";
            /*color:white;*/
        }
        *:focus {
            outline: none;
        }
        .parent
        {
     
        }
      body
      {
          background-image: url(img/pif.jpg);
          background-repeat: no-repeat;
          background-size: cover;
      }
       input[type="submit"]
        {
            background: transparent;
            border:none;
            outline: none;
            color:white;
            background: rgba(0,0,0,1);
            cursor: pointer;
            padding:10px 20px;
            border-radius: 5px;
        }
        #echoo
        {
            display: none;
        }
      </style>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script class="jsbin" src="img/images/jss.min.js"></script>
</head>
<body>
   
<?php session_start();
        if(($_SESSION['NAME'])== null)
    {
         header("Location:Topper.php");
    }
 ?>


<div class="conatiner-fluid">
<div class="row">
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
            <li><a href="https://www.pstu.ac.bd">Main Website</a>
        <li><a href="Topper.php">Home Page</a>
        <li><a href="#bookk">Books</a>
            <li><a href="#a_us">About us</a>
            <li><a href="#c_us">Contact us</a>
            <li> <form action="MainPage.php" method="post"><a href="logout.php">Logout</a></form></li>

        </ul>
        </div>
            </div>
    </nav>
</div>
<div class="row" style="margin-top: 4%">
<center><h2><u>Update Your Information</u></h2></center>
</div>



<div class="row">
    <div class="col-sm-5">
        <img id="blah" src="img/images/default.png" height="650" width="550" style="border: 2px solid black; margin: 20px;box-shadow: 16px 8px 16px 8px rgba(0,0,0,.5);" />
    </div>



<p id="echoo"><?php echo $_SESSION['NAME'];?></p>
<div class="col-sm-6" style="margin-top: 10%;">
 <form method="POST" action="" enctype="multipart/form-data">
 <center>
     <div class="parent">
<table class="table borderd-table">
    <div class="tablebox">
    <tr>
            <td style="text-align:left""><strong>User ID:</strong><td>
            <div align="left">
            	<p><?php echo $_SESSION['ID'];?></p>
            </div></td>
        </tr>
        <tr>
            <td height="32" align="right">
                <div align="left" class="style5 style15"><strong>Upload Image</strong></div></td>
            <td>
                <div align="left">
                    <input name="image" type="file" size="50" onchange="readURL(this);" />
                </div></td>
        </tr>
        <tr>
            <td style="text-align: left"><strong>Name:</strong><td>
            <div align="left">
                <input name="aname" type="text" size="50" placeholder="Enter the name" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>

        <tr>
            <td height="34" align="right">
                <div align="left" class="style5 style15"><strong>Previous Password:</strong></div></td>
            <td>

                <div align="left">
                    <input name="oldpass" type="password" size="50" placeholder="Enter previous password" required="" />
                </div></td>
        </tr>
        <tr>
            <td style="text-align:left"><strong>New Password:</strong><td>
            <div align="left">
                <input name="newpass" type="password" size="50" placeholder="Enter new password" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>
           <tr>
            <td style="text-align:left"><strong>New Email:</strong><td>
            <div align="left">
                <input name="newemail" type="email" size="50" placeholder="Enter new email" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>
           <tr>
            <td style="text-align:left"><strong>New Contact no:</strong><td>
            <div align="left">
                <input name="newphn" type="text" size="50" placeholder="Enter new Contact no" required="" minlength="11" maxlength="11" style="border:none"/>
                <br>
            </div></td>
        </tr>


            
    </div>
</table>
     <br/>
     <input type="submit" name="submit"  value="Insert">
     </div>
</center>

 </form>
 </div>
</div>
 </div>
   <script type="text/javascript">
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(550)
                    .height(650);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</body>
</html>



<?php
//session_start();
 //   session_start();
$Idd = $_SESSION['ID'];
$_SESSION['loggedin']= TRUE;
$conn = mysqli_connect('localhost','root','','passwordholder');
if(isset($_POST['submit']))
{
//$book_id=$_POST['book_id'];
$s = date("sihdmy").str_replace(" ","_",$_FILES['image']['name']);
$destination = "images/".$s;
$filename =  $_FILES['image']['tmp_name'];
move_uploaded_file($filename, $destination);

$aname= str_replace(" ","_",$_POST['aname']);
$old=($_POST['oldpass']);
$new=($_POST['newpass']);
$emaill = $_POST['newemail'];
$phnn = $_POST['newphn'];
// $genre=$_POST['genre'];
// $faculty=$_POST['faculty'];
// $arrival_date=$_POST['arrival_date'];
// $resource=str_replace(" ","_",$_POST['resource']);
// $quan=$_POST['quan'];
 
// if($arrival_date=='' and $genre=='' and $destination=='' and $resource=='' )
// {
//  echo "<script>alert('Any of the fields is Empty ')</script>";
 
// }

$qqq = "select * from usertable where ID='$Idd'";
$result = mysqli_query($conn,$qqq);
while($row = mysqli_fetch_object($result))
{
	if($row->PASS==$old)
	{
		$qq ="UPDATE `usertable` SET `NAME`='$aname',`ADDRESS`='$emaill',`MOBILE`='$phnn',`PASS`='$new',`IMG`='$destination' where ID='$Idd'";
		 $sql = mysqli_query($conn,$qq);
		 if($sql)
		 {
		 	echo"Successfully Updated";
		 }
		 else
		 {
		 	echo "error";
		 }
	}
}
// else
// {
// $query= "INSERT INTO book_datas(id, img, name, author, genre, faculty, a_date, resource,quan)
// values('$book_id','$destination','$bookname','$author','$genre','$faculty','$arrival_date','$resource','$quan')";
//  $sql = mysqli_query($conn,$query);
//  //echo $newdate;
// echo "done";
// }
 
 
}
?>