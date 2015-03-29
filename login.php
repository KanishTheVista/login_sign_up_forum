<?php
include("db_config.php");
//echo "$connect";
$a1=$_POST["NE"];
$b1=$_POST['EL'];
$c1=$_POST['PD'];
//echo "$b1.<br>";
//echo $c1;
$sql="SELECT  * FROM xron WHERE PASSWORD='$c1' and EMAIL='$b1' and NAME='$a1'";
$result=mysql_query($sql);
//echo "$result";
$num=mysql_num_rows($result);
//echo $num;

if($num>0)
{
 header("location:veiw.php?msg=$a1");
}
else
{
header("location:hello.php?msg=0");
}


   
?>
