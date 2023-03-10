<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>JOB PORTAL</title>
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
    </style>
</head>
<body id="www-url-cz">
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
    <div id="page" class="box">
    <div id="page-in" class="box">
        <div id="strip" class="box noprint">
            <hr class="noscreen" />
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
        </div>
        <div id="content">
            <hr class="noscreen" />
            <hr class="noscreen" />
            <hr class="noscreen" />
            <div class="article">
                <h2><span><a href="#">Walkin Interview Detail</a></span></h2>
                <?php
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from Walkin_Master";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
$Id=$row['WalkInId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
$InterviewDate=$row['InterviewDate'];
$InterviewTime=$row['InterviewTime'];
?>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th width="5%" bgcolor="#1CB5F1" class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></th>
                  <th width="26%" height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong>:</div></th>
                    <th width="69%" height="32" bgcolor="#1CB5F1" class="style3"><div align="left"><strong><?php echo $CompanyName;?></strong></div></th>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                   <td class="style3"><div align="left"><strong>Job Title:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong>:</div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Qualification:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Description:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Date:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewDate;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Time:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewTime;?></strong></div></td>
                  </tr>
                  <?php
}
?></table>
 <?php
mysqli_close($con);
?>
<p>&nbsp;</p>
<p class="btn-more box noprint">&nbsp;</p>
</div>
<hr class="noscreen" />
</div>
<?php
include "right.php"
?>
    </div>
    </div>
<?php
include "footer.php"
?>
</div>
</body>
</html>