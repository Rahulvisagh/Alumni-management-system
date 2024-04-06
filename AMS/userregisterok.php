<?php
$name = $_REQUEST["t1"];
$email= $_REQUEST["t2"];
$mnum = $_REQUEST["t3"];
$uname = $_REQUEST["t4"];
$pass = $_REQUEST["t5"];
$conpass = $_REQUEST["t6"];
$pcode = $_REQUEST["s1"];
$year = $_REQUEST["s2"];
$organisation = $_REQUEST["t7"];
$desigination = $_REQUEST["t8"];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'amsdb');
if ($pass == $conpass)
    {
    $str = "INSERT INTO user (name,email,mobilenum,username,password,pcode,year,designation,organisation) VALUES ('" . $name . "','" . $email . "','" .$mnum ."','" .$uname ."','" .$pass ."'," .$pcode. "," .$year. ",'" .$organisation."','" .$desigination."')";
    print($str);
   $result=mysqli_query($con, $str);

   
	 
	header("location:userreglogin.php");

    }

   else { 
	   header("errorpass.php");
    }
?>