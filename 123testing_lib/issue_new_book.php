

<html>
<head>
    <title>Query Test</title>
    <style>
        .all
        {
            border: 2px solid black;
            background-color: activeborder;
            text-align:center;


        }
        *
        {
            font-family: "Century Gothic";
        }
        table,th,tr,td{
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
}
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
    
    </style>
</head>
<body>
   

<center><h2>Assign a new book</h2></center>

 <form method="POST" action="" enctype="multipart/form-data">
 <center>
     <div class="parent">
<table>
    <div class="tablebox">
    	   <tr>
            <td height="34" align="right">
                <div align="left" class="style5 style15"><strong>Issued Date:</strong></div></td>
            <td>

                <div align="left">
                    <input name="arrival_date" type="date" size="50" placeholder="Enter Registration Date......" />
                </div></td>
        </tr>
	<tr>
            <td style="text-align:left""><strong>Book ID:</strong><td>
            <div align="left">
                <input name="book_id" type="text" size="50" placeholder="Enter the id of the book" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>
        <tr>
            <!--td height="32" align="right">
                <div align="left" class="style5 style15"><strong>Upload Image</strong></div></td>
            <td>
                <div align="left">
                    <input name="image" type="file" size="50"/>
                </div></td-->
        </tr>
        <tr>
            <td style="text-align: left"><strong>Book Name:</strong><td>
            <div align="left">
                <input name="bookname" type="text" size="50" placeholder="Enter the name of the book" required="" style="border:none"/>
                <br>
            </div></td>
        </tr>
        <tr>
            <td style="text-align: left"><strong>Book Author:</strong><td><div align="left">
            <input name="author" type="text" size="50" placeholder="Enter the name of the author" required="" style="border:none"/>
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
     <input type="submit" name="submit"  value="Insert">
     </div>
</center>

 </form>
</body>
</html>


<?php
//session_start();
 $_SESSION['loggedin']= TRUE;
$conn = mysqli_connect('localhost','root','','img_show');
if(isset($_POST['submit']))
{
$book_id=$_POST['book_id'];
$destination = "issued_book/".$_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];

move_uploaded_file($filename, $destination);

$bookname= $_POST['bookname'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$faculty=$_POST['faculty'];
$arrival_date=$_POST['arrival_date'];
$resource=$_POST['resource'];
$quan=$_POST['quan'];
 
if($arrival_date=='' and $genre=='' and $destination=='' and $resource=='' )
{
 echo "<script>alert('Any of the fields is Empty ')</script>";
 
}
else
{
$query= "INSERT INTO book_datas(id, img, name, author, genre, faculty, a_date, resource,quan)
values('$book_id','$destination','$bookname','$author','$genre','$faculty','$arrival_date','$resource','$quan')";
 $sql = mysqli_query($conn,$query);
 //echo $newdate;
echo "done";
}
 
 
}
?>