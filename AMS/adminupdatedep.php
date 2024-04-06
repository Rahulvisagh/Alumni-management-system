<?php
	$pcode = $_REQUEST["t1"];
	$pname = $_REQUEST["t2"];
	$ptype = $_REQUEST["r1"];
	$dname = $_REQUEST["s1"];
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "update admindept,admindept set pname='" . $pname . "',ptype='" .$ptype ."',dnam'" .$dname ."' where pcode=" . $pcode ;
	mysqli_query($con,$str);
	header("location:admindeptall.php"); 
?>