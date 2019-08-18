<!DOCTYPE html>
<html>
<head>
<title>Testing!</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<meta charset="UTF-8"/>
<style>
 @import url('https://fonts.maateen.me/charukola-ultra-light/font.css');
</style>
<header style="height: 600px;">
    <div id="image-head" class="image-head">
    <img name="slide" height="600px" width="100%">
    <div class="last" style="float: right">
  <a href="loginPage.php">LOGIN</a>
    </div>
    <br><br><br>
    <img src="pstu.png" width="110px" height="110px">
   <h1 style="font-size: 60px"><marquee width=75% behavior = "alternate" scrollamount = "1" ><img src="ee.png"></marquee></h1>
    </div>
</header>
<SECTION>
    <div id="hide">
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
<div id="all">
<div class="imgcontainer">
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
    <div id="search" style="margin-top: 80px">
        <form action="MainPage.php" method="post">
        <input class="search-txt" type="text" name="search" value="" placeholder="Type to search your books">
            <input type="Submit" name="loginButton" value="Search" style="text-align: center;margin-top: 8px;margin-left: 30px">
        </form>
    </div>

<script>
      var images = ["lt.jpg",
  "lth.jpg",
  "lo.jpg",
  "ls.jpg",
  "lf.png"
  
]

var imageHead = document.getElementById("image-head");
var i = 0;

setInterval(function() {
      imageHead.style.backgroundImage = "url("+images[i]+")";
      i = i + 1;
      if (i == images.length) {
      	i =  0;
      }
}, 15000);
    </script>






    <div id="flex-container">
<div class="cat1">
    <div class="up">
        <p class="txt">সাহিত্য</p>
    </div>
  <div class="imgg" ><img src="./photos/novel.png"></div><br>
    <a href="One.php"><input type="Submit" name="SubmitButton" value="Details" style="text-align: center"></a>
</div>
    <div class="cat2">
        <div class="up">
        <p class="txt">একাডেমিক</p>
        </div>
    
       <div class="imgg" > <img src="./photos/aca.png"></div><br>
	 <a href="academic_list.php">  <input type="Submit" name="SubmitButton" value="Details" style="text-align: center"></a>
    </div>
    <div class="cat3">
        <div class="up">
        <p class="txt">কবিতা</p>
        </div>
      
        <div class="imgg" ><img src="./photos/poem.png"></div><br>
		  <input type="Submit" name="SubmitButton" value="Details" style="text-align: center">
    </div>
    <div class="cat4">
        <div class="up">
        <p class="txt">মুক্তিযুদ্ধ</p>
        </div>
  
        <div class="imgg" ><img src="./photos/icon.png"></div><br>
		   <input type="Submit" name="SubmitButton" value="Details" style="text-align: center">
    </div>
</div>
</div>
    </div>
    <script>
function myFunction() {
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
<footer style="padding: 10px;background-color:#333;color: white;text-align: center">&copy; Shadik Faysal</footer>
</body>
</html>
