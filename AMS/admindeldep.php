<?php
	$ee=$_REQUEST["dcode"];
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "delete from admindept where dcode=" . $ee ;
	mysqli_query($con,$str);
	header("location:admindeptall.php")
?>