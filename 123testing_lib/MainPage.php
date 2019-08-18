 
        
<html>
    <head>
        <title>Query Test</title>
            <style>
            body
            {
              
              background: url(photos/deer.jpg);
    background-size: cover;
            }
            *
            {
              font-family: century gothic;
            }
            .all
            {
                border: 2px solid black;
                background-color: activeborder;
                text-align:center;
                visibility: collapse;
            }
            table,th,tr,td{

                 background-color: rgba(213,241,255,0.5);
            }
            .blinking{
    animation:blinkingText 2s infinite;
}

@keyframes blinkingText{
    0%{     color: red;    }

  
    40%{    color: red;    }
    50%{    color:transparent;  }
  
    60%{    color: red;    }
  
    100%{   color: red;    }
    }
    h3
    {
        color: red;
            font-family: century gothic;
        background-color: yellow;
    }
        </style>
         <link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="js/modal.js"></script>
    </head>
    <body>
    <!--center>
        <form action="" method="POST">
            <div class="all">
            <div class="box">
                <input type="text" name="search" placeholder="Search by name">
            </div>
            <button class="btn">Search</button>
            </div>
        </form>
    </center-->
    <h1 style="color: white; text-align: center;">Search Result</h1>
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
            $result = mysqli_query($conn,"select * from book_datas where name like '%$searchkey%';");
    ?>
    <hr>
    

            <?php
                       if($searchkey !="")
           {
            while($row = mysqli_fetch_object($result))
            {  
               if( $row->id== null)
              {
                echo '<script language="javascript">';
                echo 'alert("The given name of the book is not in the library!")';
                echo '</script>';
              }  
            ?>
         <div class="container col-sm-3">
          <div class="row">
            <div class="col-sm-3">
              <table class="table borderd-table">
            <tr class="text-center">
                <th style="background-color: #FFDDDD;" class="text-center">Book ID:<?php echo $row->id ?></th>
            </tr>
             <tr>
                 <td><?php echo"<img src=".$row->img." width=320 height='280'>";?></td>
            </tr>
                 <tr>
                <td style="text-align: center; padding-bottom: 20px;">Book Name:<br> <?php echo $row->name;?></td>
                 </tr >
                  <tr>
                      <td style="text-align: center">Author : <?php echo $row->author ?></td>
                 </tr>
                 <tr>
                      <td style="text-align: center">Genre : <?php echo $row->genre ?></td>
                 </tr>
                   <tr>
                      <td style="text-align: center">Faculty : <?php echo $row->faculty ?></td>
                 </tr>
                   <tr>
                    <div class="welcome" style="float: left">
                      <td style="text-align: center"> Quantity : <a class="blinking" style="color:red;"> <?php echo $row->quan?> available</a></td>
                    </div> 
                 </tr>
               </table>
                 </div>
                 </div>
               </div>
         </div>
         </table>
            <?php
            }
           }
              
         /* else if($searchkey =="")
           {
               echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
           }*/
              /*else
           {
               echo '<script language="javascript">';
echo 'alert("Not found")';
           echo '</script>';
           }*/
            ?>
        
    </body>
</html>