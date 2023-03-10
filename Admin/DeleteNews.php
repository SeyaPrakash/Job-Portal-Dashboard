<!DOCTYPE html>
<html>
<head>
<title>DeleteNews</title>
</head>
<body>
<?php
	$Id=$_GET['NewsId'];
$con = mysqli_connect("localhost","root","","job");
	$sql = "delete from News_Master where NewsId='".$Id."'";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>