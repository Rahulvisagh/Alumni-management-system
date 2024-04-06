<?php
session_start();
?>
<html>
<body>
<?php
	
	$name = $_SESSION["un"];
	$oldpass = $_REQUEST["t2"];
	$newpass = $_REQUEST["t3"];
	$confnewpass = $_REQUEST["t4"];

	$con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'amsdb');

	 $res = mysqli_query($con,"SELECT * FROM user WHERE username='" . $name. "' and password='" . $oldpass . "'");
	$row = mysqli_fetch_row($res);
	if($row)
	{
		if($newpass == $confnewpass)
		{
			$new = mysqli_query($con,"Update user set password='$newpass' where username='$name'");

			if($new);
			{
				print(" changed sucessfully");
			}
		}
		else
		{
			print("new password dosent match");
		}
	}
	else
	{
		print("invalid old password ");
	}
	
?>

</body>
</html>