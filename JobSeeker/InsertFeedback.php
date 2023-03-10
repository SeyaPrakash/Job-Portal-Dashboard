<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
</head>
<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	$con = mysqli_connect ("localhost","root","","job");
	$sql = "insert into Feedback(JobSeekId,Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	mysqli_query ($sql,$con);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';
?>
</body>
</html>