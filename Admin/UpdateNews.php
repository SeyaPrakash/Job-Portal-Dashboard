
<!DOCTYPE html>
<html>
<head>
<title>UpdateNews</title>
</head>
<body>
<?php
$Id = $_POST['txtNewsId'];
$News=$_POST['txtNews'];
$Date=$_POST['txtDate'];
$con = mysqli_connect("localhost","root","","job");
$sql = "Update News_Master set News='".$News."',NewsDate='".$Date."' where NewsId=".$Id."";
mysqli_query($con,$sql);
mysqli_close($con);
echo '<script type="text/javascript">alert("News Updated Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>