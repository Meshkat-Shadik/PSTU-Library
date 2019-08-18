  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>ImagePage</title>
        <link rel="stylesheet" href="OneStyle.css">
    </head>
    <body>
        <h2 style="color:black;font-family: fantasy;text-align: center;background: beige;box-shadow: 0 15px 25px rgba(255,255,255,0.5);">সাহিত�?য</h2>
        <hr>
        <nav>
            <ul>
                <li><a href="Topper.php" style="color: white">HOME</a></li> 
            </ul>
        </nav>
        <div class="container">
          <?php
      $conn = mysqli_connect('localhost','root','','img_show');
            $result = mysqli_query($conn,"select * from users;");
             while($row = mysqli_fetch_object($result))
            { 
                 $name = $row->name;
                 $rank = $row->rank;
                 $face = $row->face;
                 echo '
        <div class="box">
            <div class="imgbox">
                <img src=./'.$face.' width=300 height=300>
            </div>
            <div class="details">
                <div class="content">
                   <h2>'.$name.'</h2>
                <p>Sketch from Canvas group</p><br>
                 <input type="Submit" name="SubmitButton" value="Details" style="text-align: center">
                </div>
            </div>
        </div>';
            }
    ?>
        </div>
    </body>
    
</html>