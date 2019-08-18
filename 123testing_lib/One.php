  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>ImagePage</title>
        <link rel="stylesheet" href="OneStyle.css">
        <style>
          @import url('https://fonts.maateen.me/charukola-ultra-light/font.css');
        </style>
        
    </head>
    <body>
        <h2 style="color:black;font-family: fantasy;text-align: center;background: beige;box-shadow: 0 15px 25px rgba(255,255,255,0.5);">Novels</h2>
        <hr>
        <nav>
            <ul>
                <li><a href="Topper.php" style="color: white">HOME</a></li> 
            </ul>
        </nav>
        <div class="container">
          <?php
      $conn = mysqli_connect('localhost','root','','img_show');
            $result = mysqli_query($conn,"select * from book_datas where genre='Novels';");
             while($row = mysqli_fetch_object($result))
            { 
                 $name = $row->name;
                 $author = $row->author;
                 $face = $row->img;
                 echo '
        <div class="box">
            <div class="imgbox">
                <img src=./'.$face.' width=300 height=300>
            </div>
            <div class="details">
                <div class="content">
                <div class="extra">
                   <h4>'.$name.'</h4>
                   <br/>
                   <p>'.$author.'</p><br>
                   </div>
                 <input type="Submit" name="SubmitButton" value="Details" style="text-align: center">
                </div>
            </div>
        </div>';
            }
    ?>
        </div>
    </body>
    
</html>