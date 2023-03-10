<!DOCTYPE html>
<html>
<head>
<title>DeleteJob</title>
</head>
<body>
<?php
	$Id=$_GET['JobId'];
$con = mysqli_connect("localhost","root","","job");
	$sql = "delete from Job_Master where JobId='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>