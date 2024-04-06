<?php
	$ee=$_REQUEST["pcode"];
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "delete from programs where pcode=" . $ee ;
	mysqli_query($con,$str);
	header("location:adminpgmall.php")
?>