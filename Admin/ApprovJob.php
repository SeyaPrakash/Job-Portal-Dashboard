<!DOCTYPE html>
<html>
<head>
<title>ApproveJob</title>
</head>
<body>
<?php
$Id = $_GET['JobId'];
$con = mysqli_connect("localhost","root","","job");
$sql = "Update JobSeeker_Reg set Status='Confirm' where JobSeekId=".$Id."";
mysqli_query($con,$sql);
mysqli_close($con);
echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>