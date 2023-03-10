<!DOCTYPE html>
<html>
<head>
<title>DeleteUser</title>
</head>
<body>
<?php
	$Id=$_GET['UserId'];
$con = mysqli_connect("localhost","root","","job");
	$sql = "delete from User_Master where UserId='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>