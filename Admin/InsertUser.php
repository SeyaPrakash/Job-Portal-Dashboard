<!DOCTYPE html>
<html>
<head>
<title>InsertUser</title>
</head>
<body>
<?php
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$con = mysqli_connect ("localhost","root","","job");
	$sql = "insert into User_Master	(UserName,Password) values('".$UserName."','".$Password."')";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>