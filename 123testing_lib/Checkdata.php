<?php
session_start();
$error;
 $servername = "localhost";
        $username = "root";
         $password ="";
         $databasename="passwordholder";
            $con = new mysqli($servername,$username,$password,$databasename); 
            global  $username10;
            global $passweord10;
            
            if($_SERVER['REQUEST_METHOD']!= "POST") // ($_SESSION['loggedin'])== false)
            {
              //if($_SESSION['loggedin'])== false){
              header("Location:Topper.php");
                //}
            }
            else
            {
if(isset($_POST['loginButton']))
{    
    $username10 = ($_POST['usernamefromform']);
    $passweord10 = ($_POST['userpasswordfromform']);
}
        
  //$sql1 = mysqli_query($con,"update usertable set MOBILE = '01521202434' where id = 2");        //2 no ID er no update korsi
//$sql2 = mysqli_query($con,"update usertable set MOBILE = '$mobile' where id = 2"); 
    //$sql = mysqli_query($con,"insert into usertable (NAME,ADDRESS,MOBILE,PASS) values ('$username','$userAddress','$mobile','$passweord')");
$sql3 = mysqli_query($con,"select * from  usertable");
$fl = false;
while($result = mysqli_fetch_array($sql3))
{
    if($username10 == $result['NAME'] && $passweord10 == $result['PASS'])
    {
        $fl = true;
        $_SESSION['NAME']=$username10;
        $_SESSION['PASS']=$passweord10;
        $_SESSION['MOBILE']=$result['MOBILE'];
        $_SESSION['ID']=$result['ID'];
        $_SESSION['IMG']=$result['IMG'];
        $_SESSION['ADDRESS']=$result['ADDRESS'];
     //   $_SESSION['ADDRESS']
    }
}
    if($fl==true)
    { 
        
           header("Location:admin_login.php");        
            //include './admin_login.php';
         //   var_dump($_SESSION);
    }
    else
    {
      echo '<script>alert("Wrong username/password!"); location.replace(document.referrer);</script>';
    }
}
?>