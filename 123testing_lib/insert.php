<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			font-family: century gothic;
		}
		h2
		{
				font-family: century gothic;
		}
	</style>
	<title>Selected Books</title>
		  <link rel="stylesheet" href="css/bootstrap.css">
<!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="js/modal.js"></script>
</head>
<body style="background: url(img/or.jpg); background-repeat: no-repeat; background-size:cover; ">
	<h2 class="text-center">Selected Books </h2>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
	<table class="table borderd-table">
					<tr style="background-color: #CAEEFF;" class="fixed-top">
						<th>Id</th>
						<th>Image</th>
						<th>Name</th>
						<th>Author</th>
						<th>Genre</th>
						<th>Faculty</th>
						<th>Arrival Date</th>
						<th>Resource</th>
						<!-- <th>Quantity</th> -->
					</tr>
<?php
//global $qu;
$conn = mysqli_connect('localhost','root','','img_show');
	$ids = $_POST['ids'];
	//$qu = $_POST['qu'];
//	$qua = $_POST['ds'];
$arrlength = count($ids);
//echo $qua;
//echo "string";
if($ids == null)
{
	 // echo '<script language="javascript">';
	 // echo 'alert("No data is selected!")';
	 // echo '</script>';
	 // header("Location:issue_form.php");
	echo '<script>alert("No data is selected!!"); location.replace(document.referrer);</script>';
	
}
elseif ($arrlength>3) {
	echo '<script>alert("Select at most 3 datas!!"); location.replace(document.referrer);</script>';
}
else{

// if($arrlength==1)
// {
// 	echo $ids[0];
// }
// elseif($arrlength==2)
// {
// 	echo $ids[0];
// 	echo $ids[1];
// }
// elseif($arrlength==3)
// {
	//if($qua == 0)

// 	echo $ids[0];
// 	echo $ids[1];
// 	echo $ids[2];
// }
}
foreach ($ids as $key => $value) {
	//echo $qu;
	$sq = "Select * from book_datas where id={$value}";
	$result = mysqli_query($conn,$sq);
	 while($row = mysqli_fetch_object($result))
        {
        	$bname[] = $row->name;
        	$bid[] = $row->id;
     //   	var_dump($bname);
        	?>
        		
					<tr>
						<!-- <td><?php //echo $row->i_date?></td> -->
						<td><?php echo $row->id;?></td>
						 <td><img src= <?php echo $row->img;?> width=110 height=110></td>
						<td><?php echo $row->name; ?></td>
						<td><?php echo $row->author; ?></td>
						<td><?php echo $row->genre; ?></td>
						<td><?php echo $row->faculty; ?></td>
						<td><?php echo $row->a_date; ?></td>
						<td><?php echo $row->resource; ?></td>
						<form action="modals_form.php" method="POST"><input type="checkbox" name="ids[]" checked="checked" value=<?php echo $row->id; ?>>
					<!-- <form action="" method="POST"><td><input type="text" name="qu"></td></form> -->
					</tr>
			<?php
        }
}

?>
</table>
		</div>
	</div>
</div>
<div class="col-sm-2">
	<!-- <form action="modals_form.php" method="POST" > -->
<button class="btn btn-success btn-lg" name="mod" style="position: fixed; right: 5px;bottom: 5px">Confirm<br>Selected<br>Books</button></form>
					</div>


<?php
// foreach ($ids as $key => $value) {
// 	//echo $qu;
// 	$sq = "Select * from book_datas where id={$value}";
// 	$result = mysqli_query($conn,$sq);
// 	 while($row = mysqli_fetch_object($result))
//         {
//         	$bname[] = $row->name;
//         	$bid[] = $row->id;
if(isset($_POST['ss'])){
	for($x = 0; $x < $arrlength; $x++) {
						echo $bid[$x];
						echo " ";
					    echo $bname[$x];
					  	echo "       ";
					  	//echo $_POST['qu'];
					    echo "<br>";
					}
					}?>



        	
<!-- // 					<tr> -->
						<!-- <td><?php //echo $row->i_date?></td> -->
<!-- // 						<td><?php //echo $row->id;?></td> -->
						<!--  <td><img src= <?php// echo $row->img;?> width=110 height=110></td>
// 						<td><?php //echo $row->name; ?></td>
// 						<td><?php// echo $row->author; ?></td>
// 						<td><?php// echo $row->genre; ?></td>
// 						<td><?php //echo $row->faculty; ?></td>
// 						<td><?php ///echo $row->a_date; ?></td>
// 						<td><?php //echo $row->resource; ?></td> -->
 					<!-- <form action="" method="POST"><td><input type="text" name="qu"></td></form> -->
<!-- // 					</tr> -->
			<?php
//         }
// }
?>
  </div>
</body>
</html>
