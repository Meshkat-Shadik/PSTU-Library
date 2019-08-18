<?php
session_start();
 $_SESSION['loggedin']= TRUE;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Academic</title>
	<link rel="stylesheet" type="text/css" href="Academic_Style.css">
	<style>
</style>
</head>
<body>
	<h1 style="text-align: center;color: white; background-color: black"> Academic Books</h1>
	       <div class="container">

<div class="box"style="background: #1D262D;">
            <div class="imgbox"style="background: white;">
                <img src="./photos/rgb.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>All</h2>
                    <form action="book_show.php" method="post">
        <input class="search-txt" type="text" name="search" value="All" placeholder="Type to search your books" style="visibility: collapse;">
            <!--input type="Submit" name="loginButton" value="Search" style="text-align: center;margin-top: 8px;margin-left: 30px"-->
  
               <center><a href="MainPage.php"style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
   					      </form>
                </div>
            </div>
        </div>


 		<div class="box">
            <div class="imgbox"style="background: white;">
                <img src="./photos/ag.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Agriculture</h2>
                    <form action="book_show.php" method="post">
        <input class="search-txt" type="text" name="search" value="Agriculture" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
           </form>
                </div>
            </div>
        </div>
        <div class="box" style="background-color:  #2F005E">
            <div class="imgbox" style="background: white;">
                <img src="./photos/computer.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Computer Science</h2>
                   <form action="book_show.php" method="post">
                   <input class="search-txt" type="text" name="search" value="Computer_Science" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
           </form>
                </div>
            </div>
        </div>


       
        <div class="box"  style="background-color: #1D6D6D">
            <div class="imgbox"  style="background-color: white">
                <img src="./photos/bam.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Business Administration</h2>
                   <form action="book_show.php" method="post">
                   <input class="search-txt" type="text" name="search" value="Business_Administration" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
                </form>
                </div>
            </div>
        </div>
         <div class="box" style="background-color: darkblue">
            <div class="imgbox" style="background: white;">
                <img src="./photos/fsh.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Fisheries</h2>
                   <form action="book_show.php" method="post">
                   <input class="search-txt" type="text" name="search" value="Fisheries" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
                </form>
                </div>
            </div>
        </div>
        <div class="box" style="background-color: #4A4A00">
            <div class="imgbox" style="background: white;">
                <img src="./photos/nfs.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Nutrition and Food Science</h2>
                   <form action="book_show.php" method="post">
                   <input class="search-txt" type="text" name="search" value="Nutrition_and_Food_Science" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
           </form>
                </div>
            </div>
        </div>
        <div class="box"  style="background: #7D0202;">
            <div class="imgbox"  style="background: white;">
                <img src="./photos/land.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Disaster Management</h2>
                   <form action="book_show.php" method="post">
                   <input class="search-txt" type="text" name="search" value="Disaster_Management" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
               </form>
                </div>
            </div>
        </div>
        <div class="box" style="background: #404040">
            <div class="imgbox"  style="background: white;">
                <img src="./photos/lma.png">
            </div>
            <div class="details">

                <div class="content">
                	
                   <h2>Land Management</h2>
                   <form action="book_show.php" method="post">
                   <input class="search-txt" type="text" name="search" value="Land_Management" style="visibility: collapse;">
               <center><a href="MainPage.php" style="text-decoration: none"><input type="Submit" name="SubmitButton" value="Visit" style="text-align: center"></a></center>
           </form>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>