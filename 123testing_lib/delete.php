<?php

 $conn = mysqli_connect('localhost','root','','img_show');
if(isset($_POST['dlt']))
{
	//var_dump($_POST['ids']);

	$varr =  $_POST['ids'];
	// echo $varr;
	$sql2 = "DELETE FROM `details` WHERE id='$varr'";
	$sql3 = "DELETE FROM `book_datas` WHERE id='$varr'";

     $result2 = mysqli_query($conn,$sql2);
     $result3 = mysqli_query($conn,$sql3);
	//DELETE FROM `book_datas` WHERE 0
	if($result2 && $result3)
	{
		echo '<script>alert("Book deleted!"); location.replace(document.referrer);</script>';
	}
	else
	{
		echo '<script>alert("Error!"); location.replace(document.referrer);</script>';
	}
}

else if (isset($_POST['updt']))
{
	//header("Location:xxx.php");
}


?>