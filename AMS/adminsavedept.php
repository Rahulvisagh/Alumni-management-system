<?php
$dcode = $_REQUEST["t1"];
$dname = $_REQUEST["t2"];
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'amsdb');
    $str = "INSERT INTO admindept (dcode,dname) VALUES ('" . $dcode . "','" .$dname ."')";
   $result=mysqli_query($con, $str);
   if($result)
header("location:admindept.php");
?>