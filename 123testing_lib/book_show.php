 
        
<html>
    <head>
        <title>Query Test</title>
            <style>
            .all
            {
                border: 2px solid black;
                background-color: activeborder;
                text-align:center;
                visibility: hidden;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="OneStyle.css">
    </head>
    <body>

    <center>
        <form action="" method="POST">
            <div class="all">
            <div class="box">
                <input type="text" name="search" placeholder="Search by name">
            </div>
            <button class="btn">Search</button>
            </div>
        </form>
    </center>

    <?php
      $conn = mysqli_connect('localhost','root','','img_show');
      global $searchkey;
           if(isset($_POST['search']))
           {
               $searchkey = $_POST['search'];
               // $sql10 = "select * from users where name like '%$searchkey%'";
           }
          // else
           //{
             //  $searchkey="";
          // }
           if($searchkey == "All"){
             $result = mysqli_query($conn,"select * from book_datas where genre='Text_Book';");
           }
           else{
            $result = mysqli_query($conn,"select * from book_datas where faculty like '%$searchkey%' and genre='Text_Book';");
          }
    ?>
    <h1 style="color: black; text-align: center; font-family: century gothic"><?php echo $searchkey; ?></h1>
    <hr>
        <div class="container">

            <?php
                       if($searchkey !="")
           {
             $i=0;
            while($row = mysqli_fetch_object($result))
            {    
                 $name = $row->name;
                 $author = $row->author;
                 $face = $row->img;
                 $i++;
                 echo '
        <div class="box">
            <div class="imgbox">
                <img src=./'.$face.' width=300 height=300>
            </div>
            <div class="details">
                <div class="content">
                  <div class="extra">
                   <h4>'.$name.'</h4>
                   <p>'.$author.'</p><br>
                   </div>
                 <div class="xtra"><input type="Submit" name="SubmitButton" value="Details" style="text-align: center"></div>
                </div>
            </div>
        </div>';
          }
          if($i==0)
          {
            echo'<p><center><i  style="color: red; margin-left:490px; font-size: 40px">No Results Found</i></center></p>'; 
          }
          }
          else if($searchkey =="")
           {
               echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
           }
              else
           {
               echo '<script language="javascript">';
echo 'alert("Not found")';
           echo '</script>';
           }
            ?>
          </div>

    </body>
</html>