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
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>            
<?php
$ID=$_SESSION['ID'];
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $row['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Resume:</strong></td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              <p>&nbsp;</p>
                <p class="btn-more box noprint">&nbsp;</p>
          </div>
            <?php
            mysqli_close($con);
            ?>
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