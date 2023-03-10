<!DOCTYPE html>
<html>
<head>
<title>DenyJob</title>
</head>
<body>
<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];
$con = mysqli_connect("localhost","root","","job");
$sql = "Update User_Master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
mysqli_query($con,$sql);
mysqli_close($con);
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>