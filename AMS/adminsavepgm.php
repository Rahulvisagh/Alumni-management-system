<?php
	$pcode = $_REQUEST["t1"];
	$pname = $_REQUEST["t2"];
	$ptype = $_REQUEST["r1"];
	$pdep = $_REQUEST["s1"];
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'amsdb');
	$str = "INSERT INTO  programs VALUES (" . $pcode . ",'" .$pname ."','" .$ptype. "'," .$pdep. ")";
	$result=mysqli_query($con, $str);
	if($result)
 header("location:adminpgm.php");
 ?>