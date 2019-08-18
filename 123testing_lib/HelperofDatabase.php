<?php
         $servername = "localhost";
         $username = "root";
         $password ="";
         $databasename="passwordholder";
         $con = new mysqli($servername,$username,$password,$databasename); 

if(connection_status())
{
    echo'Okay';
}

if(isset($_POST['SubmitButton']))
{
    echo "Value added on the database,refresh your data base";
    
    $username = $_POST['usernamefromform'];
    $userAddress = $_POST['useraddressfromform'];
     $mobile = $_POST['usermobilefromform'];
    $passweord = $_POST['userpasswordfromform'];
    
    
    
    
  //$sql1 = mysqli_query($con,"update usertable set MOBILE = '01521202434' where id = 2");        //2 no ID er no update korsi
//$sql2 = mysqli_query($con,"update usertable set MOBILE = '$mobile' where id = 2"); 
   $sql = mysqli_query($con,"insert into usertable (NAME,ADDRESS,MOBILE,PASS) values ('$username','$userAddress','$mobile','$passweord')");
}


?>