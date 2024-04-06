<?php
	$pcode = $_REQUEST["t1"];
	$pname = $_REQUEST["t2"];
	$ptype = $_REQUEST["r1"];
	$dcode = $_REQUEST["s1"];
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "update programs set pname='" . $pname . "',ptype='" .$ptype ."',dcode='" .$dcode ."' where pcode=" . $pcode  ;
	
	mysqli_query($con,$str);
	header("location:adminpgmall.php"); 
?>