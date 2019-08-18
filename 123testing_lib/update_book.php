
<?php
session_start();
?>
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
        }
/*        table,th,tr,td{
            border-collapse: collapse;
            border-radius: 20px;
           
        }
        table
        {
            border-collapse: collapse;
            margin-top: 9%;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            border-radius: 20px;
        }
        th, td {
  text-align: left;
  padding: 10px;
}

td
{
    border-left: 1px solid black;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}*/
        *:focus {
            outline: none;
        }
        .parent
        {
     
        }
      body
      {
          background-image: url(yellow.jpg);
          background-repeat: no-repeat;
          background-size: cover;
      }
       input[type="submit"]
        {
            background: transparent;
            border:none;
            outline: none;
            color:white;
            background: rgba(128, 128, 255,1);
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
<center><h2><u>Update a book</u></h2></center>
</div>

<?php
     $conn = mysqli_connect('localhost','root','','img_show');
    // global $id;
    global $id ;
    $id= $_POST['ids'];
    $sqll = "SELECT * from  book_datas where id='$id'";
     $result = mysqli_query($conn,$sqll);


            global $bn, $bimg,$ba,$bg,$fac;
                while ($row =  mysqli_fetch_object($result))
                 {
                   $bn = $row->name;
                   $bimg =$row->img;
                   $ba = $row->author;
                   $bg = $row->genre;
                   $fac =$row->faculty; 
                }
            ?>
<div class="row">
    <div class="col-sm-5">
        <img id="blah" src=<?php echo $bimg; ?> height="650" width="550" style="border: 2px solid black; margin: 20px;box-shadow: 16px 8px 16px 8px rgba(0,0,0,.5);" />
    </div>



<p id="echoo"><?php echo $_SESSION['NAME'];?></p>
<div class="col-sm-6" style="margin-top: 10%;">
 <form method="POST" action="" enctype="multipart/form-data">
 <center>
     <div class="parent">
<table class="table borderd-table">
    <div class="tablebox">
    <tr>
            <td style="text-align:left""><strong>Book ID:</strong><td>
            <div align="left">
                <input name="book_id" type="text" size="50" placeholder="Enter the id of the book" required="" style="border:none" value=<?php echo $id; ?>>
                <br>
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
            <td style="text-align: left"><strong>Book Name:</strong><td>
            <div align="left">
                <input name="bookname" type="text" size="50" placeholder="Enter the name of the book" required="" value = <?php echo $bn; ?> style="border:none"/>
                <br>
            </div></td>
        </tr>
        <tr>
            <td style="text-align: left"><strong>Book Author:</strong><td><div align="left">
            <input name="author" type="text" size="50" placeholder="Enter the name of the author" value = <?php echo $ba; ?> required="" style="border:none"/>
            <br>
        </div></td>


        </tr>
        <tr>
            <td style="text-align: left"><strong>Genre:</strong></td>  <td>

            <div align="left">
                <label>
                    <select name="genre">
                        <option>Text_Book</option>
                        <option>Novels</option>
                        <option>Poem</option>
                        <option>Liberation_War</option>
                    </select>
                </label>
            </div></td>
        </tr>

        <tr>
            <td style="text-align: left"><strong>Faculty:</strong></td>  <td>

            <div align="left">
                <label>
                    <select name="faculty">
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
            </div></td>
        </tr>
        <tr>
            <td height="34" align="right">
                <div align="left" class="style5 style15"><strong>Arrival Date:</strong></div></td>
            <td>

                <div align="left">
                    <input name="arrival_date" type="date" size="50" placeholder="Enter Registration Date......" />
                </div></td>
        </tr>
        <tr>
            <td style="text-align:left"><strong>Resource:</strong><td>
            <div align="left">
                <input name="resource" type="text" size="50" placeholder="Enter the resource of the book" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>
         <tr>
            <td style="text-align:left"><strong>Quantity:</strong><td>
            <div align="left">
                <input name="quan" type="text" size="50" placeholder="Enter the quatity of the book (Number)" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>

            
    </div>
</table>
     <br/>
     <input type="submit" name="submit"  value="UPDATE">
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

$_SESSION['loggedin']= TRUE;
$conn = mysqli_connect('localhost','root','','img_show');
if(isset($_POST['submit']))
{
 $book_id=$_POST['book_id'];
// $s = date("sihdmy").str_replace(" ","_",$_FILES['image']['name']);
// $destination = "images/".$s;
// $filename =  $_FILES['image']['tmp_name'];
// move_uploaded_file($filename, $destination);

// $bookname= str_replace(" ","_",$_POST['bookname']);
// $author=str_replace(" ","_",$_POST['author']); 
// $genre=$_POST['genre'];
// $faculty=$_POST['faculty'];
// $arrival_date=$_POST['arrival_date'];
$resource=str_replace(" ","_",$_POST['resource']);
$quan=$_POST['quan'];
 
// if($arrival_date=='' and $genre=='' and $destination=='' and $resource=='' )
// {
//  echo "<script>alert('Any of the fields is Empty ')</script>";
 
// }
// else
// {
    //UPDATE `book_datas` SET `resource`=[value-8],`quan`=[value-9] WHERE id=$id;
$query= "UPDATE `book_datas` SET `resource`='$resource',`quan`='$quan' WHERE id= $book_id;";
 $sql = mysqli_query($conn,$query);
 //echo $newdate;
if($sql)
{
    echo '<script>alert("Book Updated!"); location.replace(document.referrer);</script>';
}
 
 
}
?>