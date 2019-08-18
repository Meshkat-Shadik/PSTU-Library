<html>   
    <body>
         <form method="POST" action="" enctype="multipart/form-data">
        <table>
<tr>
            <td height="34" align="right">
                <div align="left" class="style5 style15"><strong>Arrival Date:</strong></div></td>
            <td>

                <div align="left">
                    <input name="arrival_date" type="date" size="50" placeholder="Enter Registration Date......" />
                </div></td>
        </tr>
        </table>
             <input type="submit" name="submit"  value="Published Now">
         </form>

</body>
</html>
<?php
echo"dsalkda";
if(isset($_POST['submit']))
{
$arrival_date=$_POST['arrival_date'];
$a_d_res = explode('-', $arrival_date);
$dt = $a_d_res[2];
$mn = $a_d_res[1];
$yr = $a_d_res[0];
$newdate = $dt.'-'.$mn.'-'.$yr;
echo $newdate;
}
?>