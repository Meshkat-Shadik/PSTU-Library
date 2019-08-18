<?php
//     $conn = mysqli_connect('localhost','root','','img_show');
//     if(isset($_POST['SubmitButton']))
// {
//     $valuee = $_POST['textarea'];
//     //INSERT INTO `news`(`News`) VALUES ([value-1])
//     $query = "INSERT INTO `news` (`News`) VALUES ('$valuee');";
//      $sql = mysqli_query($conn,$query);

//      if($sql)
//      {
//         echo '<script>alert("News Updated"); location.replace(document.referrer);</script>';
//      }
//      else
//      {
//          echo '<script>alert("Error!"); location.replace(document.referrer);</script>';

//Hi!This is PSTU Library's official webpage.You're warmly welcomed!
//      }
//  }
         $servername = "localhost";
         $username = "root";
         $password ="";
         $databasename="img_show";
         $con = new mysqli($servername,$username,$password,$databasename); 

if(isset($_POST['SubmitButton']))
{
    //echo "Value added on the database,refresh your data base";
    
     $valuee = $_POST["aa"];
    // $passweord = $_POST['userpasswordfromform'];
 //   echo $valuee;
   $sql = mysqli_query($con,"INSERT INTO `news` (`Msg`) VALUES ('$valuee');");
   if($sql)
   {
     echo '<script>alert("News Updated!"); location.replace(document.referrer);</script>';
   }
}
?>

