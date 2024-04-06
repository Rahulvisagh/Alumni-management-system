<?php
$name = $_REQUEST["t1"];
$desc = $_REQUEST["t2"];
$mdate = $_REQUEST["t3"];
$mtime = $_REQUEST["t4"];
$book = $_REQUEST["t5"];
$cordinator = $_REQUEST["t6"];
$mobile = $_REQUEST["t7"];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'amsdb');
    $str = "INSERT INTO meetings (mhead,mdesc,mdate,mtime,mbooking,mcname,mcmob) VALUES ('" . $name . "','" .$desc ."','" .$mdate."','" .$mtime."', '" .$book. "', '" .$cordinator."','" .$mobile."')";
   $result=mysqli_query($con, $str);
   if($result)
header("location:adminmeet.php");
?>