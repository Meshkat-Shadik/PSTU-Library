
<?php


// $_SESSION['loggedin']= TRUE;
// $conn = mysqli_connect('localhost','root','','img_show');
// if(isset($_POST['submit']))
// {
// $book_id=$_POST['book_id'];
// $s = date("sihdmy").str_replace(" ","_",$_FILES['image']['name']);
// $destination = "images/".$s;
// $filename =  $_FILES['image']['tmp_name'];
// move_uploaded_file($filename, $destination);

// $bookname= str_replace(" ","_",$_POST['bookname']);
// $author=str_replace(" ","_",$_POST['author']);
// $genre=$_POST['genre'];
// $faculty=$_POST['faculty'];
// $arrival_date=$_POST['arrival_date'];
// $resource=str_replace(" ","_",$_POST['resource']);
// $quan=$_POST['quan'];
 
// if($arrival_date=='' and $genre=='' and $destination=='' and $resource=='' )
// {
//  echo "<script>alert('Any of the fields is Empty ')</script>";
 
// }
// else
// {
// $query= "INSERT INTO book_datas(id, img, name, author, genre, faculty, a_date, resource,quan)
// values('$book_id','$destination','$bookname','$author','$genre','$faculty','$arrival_date','$resource','$quan')";
//  $sql = mysqli_query($conn,$query);
//  //echo $newdate;
// echo "done";
// }
 
 
// }
$conn = mysqli_connect('localhost','root','','img_show');
	$hd = $_POST['hd'];
	$s_name= $_POST['sname'];
	$s_fac=$_POST['faculty'];
	$s_semester=$_POST['Semester'];
	$s_id=$_POST['sid'];
	$s_email=$_POST['semail'];
	$i_date =$_POST['i_date'];
	$r_date =$_POST['r_date'];
$arrlength = count($hd);
$key =  false;
$k2 = false;
foreach ($hd as $key => $value) {
	//echo $qu;
	//	$bname[] = {$value};
	//$sq = "Select * from book_datas where id={$value}";
	$sq = "INSERT INTO `issue_book`(`id`, `s_name`, `s_id`, `s_semester`, `s_fac`, `s_email`, `i_date`, `r_date`) VALUES ({$value},'$s_name','$s_id','$s_semester','$s_fac','$s_email','$i_date','$r_date')";
//	$sq1 = "INSERT INTO `details`(`idate`, `id`, `img`, `name`, `author`, `sname`, `ssem`, `sfac`, `sid`, `semail`, `rdate`) VALUES ('$i_date',{$value},[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])";
	$result = mysqli_query($conn,$sq);
if($result)
{
	$key = TRUE;
	//echo "Success";
	for($i=1;$i<=2;$i++){
	$sql = "UPDATE `book_datas` SET `quan`= quan-1 WHERE id = {$value};";
	$res2 = mysqli_query($conn,$sql);
	if($res2)
	{
		$res2 = true;
	}
	break;
}
}
}

if($key==true and $res2==true)
{
	echo ' Success and updated';
}
else
{
	echo "error";
}


?>