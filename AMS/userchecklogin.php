
<?php
session_start();
$user=$_REQUEST["t1"];
$pass=$_REQUEST["t2"];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'amsdb');
$res = mysqli_query($con,"SELECT * FROM user WHERE username='" . $user. "' and password='" . $pass. "'");
$row = mysqli_fetch_row($res);
if($row)

{
    $_SESSION["un"] = $user;
header("location:userhome.php");

}
else
header("location:errorlogin.php");
?>