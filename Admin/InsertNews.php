<!DOCTYPE html>
<html>
<head>
<title>InsertNews</title>
</head>
<body>
<?php
	$News=$_POST['txtNews'];
	$Date=$_POST['txtDate'];
$con = mysqli_connect("localhost","root","","job");
	$sql = "insert into News_Master	(News,NewsDate) 	values('".$News."','".$Date."')";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("New News Inserted Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>