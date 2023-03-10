<?php
session_start();
if(isset($_SESSION['$UserName'])){
} 
else{
		header('location:../index.php');
}
?>
<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" /> 
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
            <p id="breadcrumbs">You are here: <a href="index.php">Home</a></p>
          <hr class="noscreen" /> 
        </div>
        <div id="content">
            <hr class="noscreen" />
            <hr class="noscreen" />
            <hr class="noscreen" />
            <div class="article">
                <h2><span><a href="#">Dashboard</a></span></h2>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>Job List</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Title</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Min. Qualification</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>
</tr>
<?php
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from Job_Master";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
$Id=$row['JobId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
<?php
}
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
mysqli_close($con);
?>
</table>
          </td>
        </tr>
      </table>
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