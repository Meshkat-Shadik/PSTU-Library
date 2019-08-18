<?php
session_start();




?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		*
		{
			font-family: century gothic;
		}
	</style>
	<title>Fees</title>
</head>
<body style="background-color:#FFEFDF ">
	<div class="container-fluid text-center" style="margin-left: 41%; margin-top: 20%">
	<p><?php
	 $conn = mysqli_connect('localhost','root','','img_show');
	 echo"you have to pay ";
	 echo $_SESSION['datediff']*0.5;
	 echo " taka for ";
	 echo $_SESSION['datediff'];
	 echo " days late";
	 ?></p>
<form action="" method="POST">
	amount: <input type="text" name="amount"><br><br>
	cardno: <input type="text" name="acc">
	<!-- <button name ="btnn" class="btn btn-info"></button> -->
	<input type="submit" name="btnn" value="Pay" class="btn btn-info">
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['btnn'])){
$val =	$_SESSION['val'];
if (($_SESSION['datediff']*0.5) == $_POST['amount'])
{
	echo "Success";
	$sql = "SELECT `id`FROM `issue_book` WHERE s_id='$val'";
		 $result = mysqli_query($conn,$sql);
	 		 	   while($row = mysqli_fetch_object($result))
            		{
            			//echo $row->id;
            			for($i=1;$i<=2;$i++){
            				$sql2 = "DELETE FROM `issue_book` WHERE id='$row->id'";
            				$sql4 = "DELETE FROM `details` WHERE id='$row->id'";
            				$result2 = mysqli_query($conn,$sql2);
            				$result4 = mysqli_query($conn,$sql4);
            				if($result2 && $result4)
            				{
            					//break;
            					$sql3 = "UPDATE `book_datas` SET `quan`= `quan`+1 WHERE id='$row->id'";
            					$result3 = mysqli_query($conn,$sql3);

            					if($result3)
            					{
            						echo"Okay";
            						header("Location:retain.php");
            					}
            					else
            					{
            						echo"error";
            					}
            					break;
            				}
            			}
            				break;

            		}
}
else
{
	echo "Please enter amount again";
}
}

?>