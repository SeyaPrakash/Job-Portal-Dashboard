<!DOCTYPE html>
<html>
<head>
<title>InsertJob</title>
</head>
<body>
<?php
	$CompanyName=$_POST['txtCompanyName'];
	$JobTitle=$_POST['txtJobTitle'];
    $Vacancy=$_POST['txtVacancy'];
    $MinQualification=$_POST['txtMinQualification'];
    $Description=$_POST['txtDescription'];
	$con = mysqli_connect ("localhost","root","","job");
	$sql = "insert into Job_Master (CompanyName, JobTitle, Vacancy, MinQualification, Description)  values('".$CompanyName."','".$JobTitle."','".$Vacancy."','".$MinQualification."','".$Description."')";
	mysqli_query ($con,$sql);
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>