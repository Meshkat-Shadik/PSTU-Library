
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
<title>Testing!</title>
<style>
< meta charset="UTF-8"/>
</style>

<link rel="stylesheet" href="admin_page_style.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--     <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Love+Ya+Like+A+Sister|Nothing+You+Could+Do|Poiret+One|Rajdhani|Reenie+Beanie" rel="stylesheet">  -->
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custome.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar">

<!-- <div id="all"> -->
<!-- <div class="imgcontainer">
<ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#news">Notice</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">More</a>
        <div class="dropdown-content">
            <a href="#">Administrator Panel</a>
            <a href="#">Stuffs</a>
            <a href="#">--</a>
        </div>
    </li>
</ul>
</div> -->
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
		<li><a href="updateadmin.php">Profile</a>
			<li><a href="#a_us">News</a>
			<li><a href="#c_us">Feedbacks</a>
			<li> <form action="MainPage.php" method="post"><a href="logout.php">Logout</a></form></li>

		</ul>
		</div>
			</div>
	</nav>
<!-- </div> -->
<!-- <header style="height: 500px;">
    <div id="image-head" class="image-head">
    <img name="slide" height="500px" width="100%">
    

    <br><br><br>
    <img src="pstu.png" width="80px" height="80px" style="margin-right: 120px;">
    <h1 style="font-size: 60px"><marquee width=75% behavior = "alternate" scrollamount = "1" ><img src="ee.png" width="70%"></marquee></h1>
    </div>
</header> -->
 <div class="owl-carousel owl-theme" style="padding-left: 20px; padding-right: 20px; margin-top: 65px;">
    <div class="item"><img src="./img/1.jpg" height="520px">
     <div class="text-block"> 
        <h4 style="color: #DBDBDB">The world is a book and those who do not travel reads only one page</h4>
        </div> 
    </div>
     <div class="item"><img src="./img/2.jpg" height="520px">
     <div class="text-block"> 
        <h4 style="color: #DBDBDB"></h4>
        </div> 
    </div>
      <div class="item"><img src="./img/3.jpg" height="520px">
     <div class="text-block"> 
        <h4 style="color: #DBDBDB">A library is not a luxury but one of the necessities of life</h4>
        </div> 
    </div>
      <div class="item"><img src="./img/4.jpg" height="520px">
     <div class="text-block"> 
        <h4 style="color: #DBDBDB">PSTU LIBRARY</h4>
        </div> 
    </div>
    <!-- <div class="item"><img src="./img/1.jpg" height="480px"></div> -->
 </div>
<SECTION>
   <!-- <div id="hide">
    <button onclick="myFunction()" style="  margin-bottom: 8px;
                                            margin-left: 45%;
                                            padding-right:60px;
                                            padding-left: 60px;
                                            padding-top: 10px;
                                            padding-bottom: 10px;
                                            background-color: transparent;
                                            border: none;
                                            color:white;
                                            "><img src="down-arrow.png" title="Expand For more!"></button>
    </div>
    <div id="hideup" style="display: none;">
    <button onclick="myFunction()" style="  margin-bottom: 8px;
                                            margin-left: 45%;
                                            padding-right:60px;
                                            padding-left: 60px;
                                            padding-top: 10px;
                                            padding-bottom: 10px;
                                            background-color: transparent;
                                            border: none;
                                            color:white;
                                            "><img src="up-arrow.png" title="Expand For more!"></button>
    </div>
    !-->
<!-- <div id="all">
<div class="imgcontainer"> -->
<!-- <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#news">Notice</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">More</a>
        <div class="dropdown-content">
            <a href="#">Administrator Panel</a>
            <a href="#">Stuffs</a>
            <a href="#">--</a>
        </div>
    </li>
</ul> -->
 <!--    <div id="search" style="margin-top: 80px">
        <form action="MainPage.php" method="post">
        <input class="search-txt" type="text" name="search" value="" placeholder="Type to search your books">
            <input type="Submit" name="loginButton" value="Search" style="text-align: center;margin-top: 8px;margin-left: 30px">
        </form>
    </div> -->

<!-- <script>
      var images = ["lt.jpg",
  "lth.jpg",
  "lo.jpg",
  "lf.jpeg"
]

var imageHead = document.getElementById("image-head");
var i = 0;

setInterval(function() {
      imageHead.style.backgroundImage = "url("+images[i]+")";
      i = i + 1;
      if (i == images.length) {
      	i =  0;
      }
}, 1000);
    </script> -->



<div class="container-fluid" style="padding: 5px;">
    <div class="row">
        <div class="col-sm-4 text-center" style="height: 700px; background: #A9D3D3; ">
        <div class="row" style="background: black; color: white">
            <h4>Admin</h4>
        </div>
            <div class="row">
                <!-- "<img src=".$row->img." width=110 height=110>" -->
                <img src= <?php echo $_SESSION['IMG'];?> height="200px" width="200px" style="margin-top: 20px;border-radius: 100%;border: 1px solid black;">
            </div>
            <h4><i>Name :</i> <?php echo $_SESSION['NAME'];?></h4>
            <h4><i>Password :</i> <?php echo $_SESSION['PASS'];?></h4>
          <h4><i>Mobile :</i> <?php echo $_SESSION['MOBILE'];?></h4>
           <h4><i>Email :</i> <?php echo $_SESSION['ADDRESS'];?></h4>
          <a href="updateadmin.php">  <span class="fa fa-pencil-square-o"></span>Edit Profile</a>
        </div>
           

        <div class="col-sm-4 text-center" style="height: 700px; background: white;padding-left: 50px; padding-right: 50px;">
           <div class="row two text-center" style="background: #F5F5F5; color: black">
               <a href="assign.php" style="color:black"><h3>Add a new Book</h3></a>
           </div>
            <div class="row two text-center" style="background: #F5F5F5; color: black">
               <a href="academic_list.php" style="color: black"><h3>All Books</h3></a>
           </div>
            <div class="row two text-center" style="background: #F5F5F5; color: black">
               <a href="pagination.php" style="color: black"><h3>Book Management</h3></a>
           </div>
            <div class="row two text-center" style="background: #F5F5F5; color: black">
               <a href="issue_student.php" style="color: black"><h3>Issued Students</h3></a>
           </div>
            <div class="row two text-center" style="background: #F5F5F5; color: black">
               <a href="issue_form.php" style="color: black"><h3>Issue a new book</h3></a>
           </div>
            <div class="row two text-center" style="background: #F5F5F5; color: black">
               <a href="retain.php" style="color: black"><h3>Retain a book</h3></a>
           </div>
            <div class="row two text-center" style="background: #F5F5F5; color: black">
              <form action="MainPage.php" method="post"><a href="logout.php" style="color: black"><h3>Logout</h3></a></form>
           </div>
        </div>
        <div class="col-sm-4 text-center" style="height: 700px; background: lightblue;">
              <div class="row" style="background: black; color: white">
            <h4>Set News</h4>
             </div>
             <div class="row" style="padding-top: 20px; padding-left: 20px; padding-bottom: 20px; padding-right:  27px;">
                <form action="setnews.php" method="POST"> <textarea  class="form-group form-control"cols="30" rows="5" placeholder="Set news" name="aa"></textarea>
                 <input type="Submit" name="SubmitButton" value="Set News"class="btn btn-primary text-center"></form>

             </div>
              <div class="row" style="background: black; color: white">
            <h4>Last News</h4>

         </div>
           
            <div class="row">
                     <table class="table borderd-table">
                    <tr>
                        <td>Id</td>
                        <td>News</td>
                     <!--    <td>dghajsdjas</td> -->
                    </tr>
                <?php
                 $conn = mysqli_connect('localhost','root','','img_show');
                $query = "select * from news ORDER BY Id DESC LIMIT 2 ";
                $result = mysqli_query($conn,$query);
                 while($row = mysqli_fetch_object($result))
            { 
               echo' <tr>
                        <td>'.$row->Id.'</td>
                        <td>'.$row->Msg.'</td>
                    </tr>';
            }
                        ?>
                 </table>
             </div>
             <div class="row" style="margin-top: 100px;background: black; color: white">
                 <h4>Recent Feedbacks</h4>
             </div>
             <div class="row">
                     <table class="table borderd-table">
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Message</td>
                     <!--    <td>dghajsdjas</td> -->
                    </tr>
                        <?php
                 $conn = mysqli_connect('localhost','root','','img_show');
                $query = "select * from feedback ORDER BY Id DESC LIMIT 2 ";
                $result = mysqli_query($conn,$query);
                 while($row = mysqli_fetch_object($result))
            { 
               echo' <tr>
                        <td>'.$row->Name.'</td>
                        <td>'.$row->Email.'</td>
                        <td>'.$row->Message.'</td>
                    </tr>';
            }
                        ?>
                 </table>
                     
                 </table>
             </div>
        </div>
    </div>
</div>

<!-- <div id="flex-container">
<div class="cat1">
    <div class="up">
        <p class="txt">Add a new Book</p>
    </div>
  <div class="imgg" ><img src="./photos/add.png"></div><br>
    <a href="assign.php"><input type="Submit" name="SubmitButton" value="Go" style="text-align: center"></a>
</div>
    <div class="cat2">
        <div class="up">
        <p class="txt">All books</p>
        </div>
    
       <div class="imgg" > <img src="./photos/allbook.png"></div><br>
     <a href="academic_list.php">  <input type="Submit" name="SubmitButton" value="Go" style="text-align: center"></a>
    </div>
    <div class="cat3">
        <div class="up">
        <p class="txt">Book Management</p>
        </div>
      
        <div class="imgg" ><img src="./photos/delete.png"></div><br>
          <input type="Submit" name="SubmitButton" value="Go" style="text-align: center">
    </div>
    <div class="cat4">
        <div class="up">
        <p class="txt">Issued students</p>
    </div>
  <div class="imgg" ><img src="./photos/team.png"></div><br>
    <a href="issue_student.php"><input type="Submit" name="SubmitButton" value="Go" style="text-align: center"></a>
    </div>
    <br>
 <div class="cat6">
        <div class="up">
        <p class="txt">Issue a new book</p>
        </div>
          <div class="imgg" ><img src="./photos/writing.png"></div><br>
    <a href="issue_form.php"><input type="Submit" name="SubmitButton" value="Go" style="text-align: center"></a>
</div>
</div>
   

    <br>
</div>

</div>
    </div> -->
    <script>
/*function myFunction() {
    var x = document.getElementById("all");
    var y = document.getElementById("hide");
    var z = document.getElementById("hideup");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "block";
    } 
    else{
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";
    }
}    
</script>
</SECTION>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                autoplay:true,
                autoplayTimeout: 5000,
                 center: true,
                 responsiveClass:true,
                responsive: {
                  0: {
                    items: 1
                  },
                  500: {
                    items: 1
                  },
                  700:
                  {
                     items: 1
                  },
                  1000: {
                    items: 1

                  }
                }
              })
            })
  </script>
<br>
    <div class="container-fluid" style="background:url(./lf.png);background-attachment: fixed; background-repeat: no-repeat; background-position: center;">
    <div class="neww" style="background-color: rgba(70,65,60,0.8); margin-top: 5px;">
        <div class="row">
            <div class="col-sm-4 text-center" style="margin-top: 150px;">
                <h4 style="color: white"><strong>PSTU Library</strong></h4>
                <p class="text-center" style="color: white;">Patuakhali Scienece and Technology University</p>
        <p class="text-center" style="color: white;"><span class="fa fa-map-marker text-left"></span>  Dumki, Patuakhali, 8602</p></li>
        <p class="text-center" style="color: white;"><span class="fa fa-envelope text-left"></span>  pstu@pstu.ac.bd</p></li>
            </div>
          <div class="col-sm-1 text-center"  style="margin-top: 150px;">
     <div style="background-color: white; width: 1px; height: 150px;">
      </div>
     </div>
            <div class="col-sm-3 text-center"  style="margin-top: 150px;">

                <h4 style="color: white;"><strong>Library Hours</strong></h4>
                 <p class="text-center" style="color: white;">Monday-Thursday > 9:00 AM - 5:00 PM</p>
         <p class="text-center" style="color: white;">** Launch Break > 1:00 PM - 2:00 PM</p>
         <p class="text-center" style="color: white;">** Friday & Saturday > Off,due to weekend.</p>
            </div>
      
            <div class="col-sm-4 text-center">
                <p style=" margin:20px;box-shadow:0 0 30px #000; background-color: #dbdbdb "><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d960.6503906926841!2d90.38218280289313!3d22.46564380320426!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aacf2fbeb3938d%3A0xc2da611c2d31433f!2sCentral+Library%2C+PSTU!5e1!3m2!1sen!2sus!4v1546674339260" width="480" height="350" frameborder="" style="border:0;
        margin-top: 5px;padding-right: 50px; padding-left: 5px;   " allowfullscreen></iframe></p>
            </div>

        </div>
        </div>
    </div>

    
    <footer class="footer" style="box-shadow: 0 -10px 10px -10px #000;">
        <div class="footer-inner text-left">
      <div class="row">
        <div class="col-sm-4 text-left">
        <p><a href=""><span class="fa fa-facebook fa-2x"></span></a> </p>
        <p><a href=""><span class="fa fa-twitter fa-2x"></span></a> </p>
        <p><a href=""><span class="fa fa-google fa-2x"></span></a> </p>
        <p><a href=""><span class="fa fa-linkedin fa-2x"></span></a> </p>
        </div>
    <div class="col-sm-1 text-right" >
     <div style="background-color: white; width: 1px; height: 50px;">
      </div>
     </div>
        <div class="col-sm-3 text-center">
            <p>All rights reserved &copy PSTU</p>

        </div>
      
    <div class="col-sm-1 text-left" >
     <div style="background-color: white; width: 1px; height: 50px;">
      </div>
     </div>

            <div class="col-sm-3 text-right">
        <a href="mypage.html"><button type="button" class="btn btn-link text-center"style="color: white;">About Developer</button></a>
        </div>
</div>
    </footer>
</body>
</html>
<?php
   // session_start();
    $_SESSION['loggedin']= TRUE;
// var_dump($_SESSION);
?>