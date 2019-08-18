<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Love+Ya+Like+A+Sister|Nothing+You+Could+Do|Poiret+One|Rajdhani|Reenie+Beanie" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custome.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
</head>




<body data-spy="scroll" data-target=".navbar">
	<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-top">
			<div class="container">
				<div class="navbar-header">
					<a href="Topper.php" class="navbar-brand"><img src="img/pstu.png" width="50px" height="45px"></a>
					<button class="navbar-toggle" data-toggle="collapse" data-target="#nav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="nav">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="https://www.pstu.ac.bd"><span class="fa fa-window-maximize" style="margin-left: 40px;"></span><br>Main Website</a>
		<li><a href="#home"><span class="fa fa-home" style="margin-left: 13px;"></span><br>Home</a>
		<li><a href="#bookk"><span class="fa fa-book" style="margin-left: 12px;"></span><br>Books</a>
			<li><a href="#a_us"><span class="fa fa-users" style="margin-left: 24px;"></span><br>About us</a>
			<li><a href="#c_us"><span class="fa fa-envelope-o" style="margin-left: 30px;"></span><br>Contact us</a>
			<li><a href="loginPage.php"><span class="fa fa-user-circle-o" style="margin-left: 11px;"></span><br>Login</a>

		</ul>
		</div>
			</div>
	</nav>
	<!-- <div class="container-fluid">
		<div class="row">
			<img class="img-responsive" src="img/bg.JPG">
		</div>
	</div> -->

	<div id='home' class="jumbotron top-main-div" style="background: url('img/bg.JPG') no-repeat center center; background-size: cover;">
		<div class="overlay">
			
		</div>
		<div class="container text-center main-heading">
		<h2 style= "color: yellow; font-family: 'Nothing You Could Do', cursive; color: yellow">Hey there!</h2>
		<sup style="font-size: 26px;font-family: 'Reenie Beanie', cursive; color: black"> This is &nbsp;</sup><text class="textpstu">PSTU LIBRARY</text><text class="textpstutwo">&nbsp;&nbsp;'s</text><sup style="font-size: 26px;font-family: 'Reenie Beanie', cursive; color: black">&nbsp; webpage</sup>
		<br>
		<h3 style="color: #0088CA;font-family: 'Love Ya Like A Sister', cursive">You can find <span id="that" class="typewrite" data-period="2000" data-type='[ "Academic Books.", "Novel Books.", "Liberation war Books", "Poems and so on........" ]' style="color: red;"></span></h3>

  </a>
		</div>
	</div>


<!--  <div id="search" style="margin-top: 80px">
        <form action="MainPage.php" method="post">
      <center>  <input class="form-control text-center" type="text" name="search" value="" placeholder="Type to search your books"></center>
            <input class="pull-left" type="Submit" name="loginButton" value="Search" style="text-align: center;">
        </form>
    </div> -->


	


  <section class="section-padding contact-us" id='bookk'>
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-md-offset-3">
                   <div class="section-title">
                       <h2>Books <span>Genre</span></h2>
                       <p>Here you will find information about many books.
							There are about 4 types of book information.
							Approximately the genre of the books are academic, novel, liberation war and others. To see specific books click on the specific category.</p>
                   </div>
               </div>
           </div>
           <div class="row" id="srch">
        <div class="col-sm-6 col-sm-offset-3" style="margin-bottom: 40px;">
            <div id="imaginary_container"> 
            	     <form action="MainPage.php" method="post">
                <div class="input-group stylish-input-group">
                    <input class="form-control text-center one" type="text" name="search" value="" placeholder="Type to search your books">
                    <span class="input-group-addon" style=" background:#66afe9;">
                        <input type="Submit" name="loginButton" value="Search" style="text-align: center; border: none; background: #66afe9;color: white">
                    </span>
                </div>
            </form>
            </div>
        </div>
	</div>
           <div class="row">
               <div class="col-md-3">
                   <div class="single-pricing-box">
                       <h3 style="background: #E2D5CC;">Academic</h3>
                       <div class="pricing-icon">
                           <i class="fa fa-book"></i>
                       </div>
                       <div class="pricing-list">
                           <ul>
                           <li>7 faculties book</li>
                           <li>Reference book</li>
                           <br>
                          <!--  <li class="off">Managed CMS</li> -->
                      
                       </ul>
                       </div>
                       <a href="academic_list.php" class="bordered-btn">Visit</a>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="single-pricing-box">
                       <h3 style="background: #E2D5CC;">Novel Books</h3>
                       <div class="pricing-icon">
                           <i class="fa fa-sticky-note"></i>
                       </div>
                       <div class="pricing-list">
                           <ul>
                           <li>Various novel writer's book</li>
                           <br>
                       </ul>
                       </div>
                       <a href="One.php" class="bordered-btn">Visit</a>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="single-pricing-box">
                       <h3 style="background: #E2D5CC;">Liberation War</h3>
                       <div class="pricing-icon">
                           <i class="fa fa-tint"></i>
                       </div>
                       <div class="pricing-list">
                           <ul>
                           <li>History of 1971</li>
                           <li>Books about Bangabandhu.</li>
                       </ul>
                       </div>
                       <a href="" class="bordered-btn">Visit</a>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="single-pricing-box">
                       <h3 style="background: #E2D5CC;">Others</h3>
                       <div class="pricing-icon">
                           <i class="fa fa-question-circle"></i>
                       </div>
                       <div class="pricing-list">
                           <ul>
                           <li>Other genre books</li>
                           <li>poems/ journal/ history and more.</li>
                       </ul>
                       </div>
                       <a href="" class="bordered-btn">Visit</a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   
 <?php
      $conn = mysqli_connect('localhost','root','','img_show');
      global $searchkey;
          $result = mysqli_query($conn,"SELECT * FROM book_datas ORDER BY DATE(a_date) DESC LIMIT 5 ");
    ?>


 <div class="container" style=" margin-top: 50px ;border: 1px dashed #BFBFBF;box-shadow:  0 0 10px #BFBFBF; ;padding-left: 25px; padding-right: 25px">
   	<div class="row">
   		 <div class="section-title">
   		<h2>Recent<span> Books</span></h2>
   	</div>

   		 <div class="owl-carousel owl-theme">
            <?php
            while($row = mysqli_fetch_object($result))
            { 
               $face = $row->img;
               $name = $row->name;
               $author = $row->author;
              echo'
            <div class="item" id="over">
               <img src=./'.$face.' width="300px" height="250px">
                 <div class="text-block"> 
                  <h4 style="color:red;">'.$name.'</h4>
                  <p>'.$author.'</p>
                </div>
            </div>';
          }
            ?>
      
         </div>
   	</div>
   </div>





	<div id='a_us' class="container-fluid content-padding">
		<div class="row">
			 <div class="section-title">
			<h2>About <span>Us</span></h2>
		</div>
			<div class="col-sm-2">
				<img class="img-responsive" id="height-weight" src="img/pic_one.jpg">
			</div>
			<div class="col-sm-10">
				<h4>heading</h4>
				<p class="text-justify">Welcome! On behalf of the staff of Cornell University Library, I’m pleased to invite you to take advantage of everything the Library has to offer.

We believe outstanding scholarship begins with an outstanding library experience. I hope you’ll make frequent use of our cutting-edge services, world-class collections and inspiring study spaces, all of which are all here to help you succeed.

You don’t have to take my word for it: Cornell’s graduating seniors consistently rate the Library the No. 1 service on campus. Faculty members rank the Library as the most satisfying aspect of their work life, contributing to research breakthroughs.

Librarians are experts in the tools of 21st century scholarship, and can help Cornellians save time and enhance their research with innovative methods. Our work in digitization, preservation, open access and fair use makes information more accessible and broadens Cornell’s reach. Library partnerships and programs expand international access to information, advancing Cornell’s land-grant mission and helping to create positive change through the spread of knowledge around the world.

I hope you’ll learn more about this wonderful Library by exploring our website, and visiting in person. Please get in touch with any comments or suggestions about how we can make the Library even better.</p>
				<button class="btn btn-default btn-lg">button</button>
			</div>
		</div>
	</div>
	<div id='c_us' class="container-fluid contact-us content-padding">
		<div class="row">
			 <div class="section-title">
			<h2>Contact <span>Us</span></h2>
		</div>
			<p class="text-center"><i>Don't Shy to Drop Us a Mail</i></p>
			<div class="col-sm-4">
				<p><i>Quick Contact</i> </p>
				<p><i class="fa fa-phone-square"></i> Phone : +8801236124142</p>
				<p><span class="fa fa-map-marker"></span> Address : Patuakhali </p>
				<p><span class="fa fa-envelope"></span> Email : admin@yahoo.com</p>
			</div>
			<div class="col-sm-8">
        <form method="post" action="">
				<div class="row">
				<div class="form-group col-sm-6">
					<input class="form-control" type="text" placeholder="Name" name ="ame">
				</div>
				<div class="form-group col-sm-6">
					<input class="form-control"  type="text" placeholder="Email" name="Email">
				</div>
				</div>
					<textarea  class="form-group form-control"cols="30" rows="5" placeholder="Text" name="textarea"></textarea>
					<input  class="btn-default pull-right" type="Submit" name="SubmitButton" value="Submit" style="text-align: center">
			</div>
    </form>
    <?php

if(isset($_POST["SubmitButton"])) {
    $recipient="unknown1602058@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["ame"];
    $senderEmail=$_POST["Email"];
    $message=$_POST["textarea"];
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","465");
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    // $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
		</div>
	</div>













	<div class="container-fluid" style="background:url(./lf.png); background-attachment: fixed; background-repeat: no-repeat; background-position: center;">
    <div class="neww" style="background-color: rgba(70,65,60,0.7); margin-top: 5px;">
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
        margin-top: 5px;   " allowfullscreen></iframe></p>
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
				<h6 style="line-height: 1px; text-align: center; margin-left: 80px;color:white ">Developer's information</h6>
		<p class="v"><a href="https://www.facebook.com/shadik.faysalmeshkat"><span class="fa fa-facebook"  style="color: #66afe9"></span>&nbsp;Facebook</a></p>
		<p class="v"><a href=""><span class="fa fa-phone-square" style="color: #00AA00"></span>&nbsp;Contact</a></p>
		<p class="v"><a href=""><span class="fa fa-twitter" style="color: #66afe9"></span>&nbsp;Twitter</a></p>
		<p class="v"><a href=""><span class="fa fa-envelope" style="color: #D20000"></span>&nbsp;Email</a></p>
		<p class="v"><a href=""><span class="fa fa-linkedin" style="color: #66afe9"></span>&nbsp;LinkedIn</a></p>
		</div>
		</div>
</div>
	</footer>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                autoplay:true,
                autoplayTimeout: 3000,
                 center: true,
                 responsiveClass:true,
                responsive: {
                  0: {
                    items: 1
                  },
                  500: {
                    items: 3
                  },
                  700:
                  {
                  	 items: 3
                  },
                  1000: {
                    items: 3

                  }
                }
              })
            })
  </script>
</body>
</html>