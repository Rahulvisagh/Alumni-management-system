
<?php

$u=$_REQUEST["t1"];
$p=$_REQUEST["t2"];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'amsdb');
$res = mysqli_query($con,"SELECT * FROM admin WHERE aname='" . $u . "' and apass='" . $p . "'");
$row = mysqli_fetch_row($res);
if($row)
{

header("location:adminhome.php");

}
else
header("location:errorlogin.php");
?>