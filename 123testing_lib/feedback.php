<?php



//INSERT INTO `feedback`(`Id`, `Name`, `Email`, `Message`) VALUES ([value-1],[value-2],[value-3],[value-4])
?>

<?php
         $servername = "localhost";
         $username = "root";
         $password ="";
         $databasename="img_show";
         $con = new mysqli($servername,$username,$password,$databasename); 

if(isset($_POST['SubmitButton']))
{
    //echo "Value added on the database,refresh your data base";
    
    $name = $_POST['ame'];
    $email = $_POST['Email'];
     $texts = $_POST['texts'];
    // $passweord = $_POST['userpasswordfromform'];
    
   $sql = mysqli_query($con,"INSERT INTO `feedback`(`Name`, `Email`, `Message`) VALUES ('$name',' $email','$texts')");
   if($sql)
   {
   	 echo '<script>alert("Feedback sent!"); location.replace(document.referrer);</script>';
   }
}


?>