<?php
session_start();
    $name=$_REQUEST["t1"];
    $email=$_REQUEST["t2"];
    $mobilenum=$_REQUEST["t3"];
    $username=$_REQUEST["t4"];
    $org=$_REQUEST["t5"];
    $desig=$_REQUEST["t6"];
    $con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "update user set name='" . $name . "',email='" .$email ."',mobilenum='".$mobilenum."',organisation='".$org."',designation='" .$desig. "' where username='".$_SESSION["un"]."'";
	//print($str);
    mysqli_query($con,$str);
	header("location:userprofile.php"); 
?>
    