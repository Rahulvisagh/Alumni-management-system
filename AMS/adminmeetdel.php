<?php
	$ee=$_REQUEST["mid"];
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "delete from meetings where mid=" . $ee ;
	mysqli_query($con,$str);
	header("location:adminmeetall.php")
?>