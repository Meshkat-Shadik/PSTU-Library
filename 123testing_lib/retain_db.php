<?php
session_start();
	 function dateDiff ($d1, $d2) {
// Return the number of days between the two dates:

  return round(abs(strtotime($d1)-strtotime($d2))/86400);

}
 $conn = mysqli_connect('localhost','root','','img_show');
			  global $id,$idd,$img,$n,$a,$sn,$sf,$ss,$si,$se,$rd;
			 if(isset($_POST['BTN']))
			 {
			// 	$searchkey = $_POST['search'];
			 	$val = $_POST['something'];
			 	$_SESSION['val'] =$val;
			 	$_SESSION['dt1'] = $_POST['dt1'];
			 	echo $_SESSION['dt'];
			 	echo '<br>';
			 	echo $_SESSION['dt1'];
			 	echo '<br>';
			 	echo $val;
				echo'<br>';
			 //	echo dateDiff($dt,$val);
if( strtotime($_SESSION['dt']) < strtotime($_SESSION['dt1']) ){
    // Your date is in the past
    echo "Date passed\n";
    $_SESSION['datediff'] = dateDiff($_SESSION['dt'],$_SESSION['dt1']);
    echo  $_SESSION['datediff'];
    header("Location:jorimana.php");




} else {
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
//   echo "Date ashe nai";
}
		
			 //	var_dump($val);
 			 	//$sql = "DELETE FROM `issue_book` WHERE s_id='$val';";
 			 	//$sql2 = "UPDATE `book_datas` SET `quan`= `quan`+1 WHERE 1"
 //$sql = "SELECT `id`FROM `issue_book` WHERE s_id='$val'";
 			 	//while()

			 }
			 // else
			 // {
			 // 	$sql = "select * from details;";
			 // 	$searchkey = "";
			 // }




	 			 // $result = mysqli_query($conn,$sql);
	 		 	//    while($row = mysqli_fetch_object($result))
      //       		{
      //       			//echo $row->id;
      //       			for($i=1;$i<=2;$i++){
      //       				$sql2 = "DELETE FROM `issue_book` WHERE id='$row->id'";
      //       				$sql4 = "DELETE FROM `details` WHERE id='$row->id'";
      //       				$result2 = mysqli_query($conn,$sql2);
      //       				$result4 = mysqli_query($conn,$sql4);
      //       				if($result2 && $result4)
      //       				{
      //       					//break;
      //       					$sql3 = "UPDATE `book_datas` SET `quan`= `quan`+1 WHERE id='$row->id'";
      //       					$result3 = mysqli_query($conn,$sql3);

      //       					if($result3)
      //       					{
      //       						echo"Okay";
      //       						header("Location:retain.php");
      //       					}
      //       					else
      //       					{
      //       						echo"error";
      //       					}
      //       					break;
      //       				}
      //       			}
      //       				break;

      //       		}

?>