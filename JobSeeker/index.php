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
                <h2><span><a href="#">Welcome</a></span></h2>
                <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="design/Profile.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Edu.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Search.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Profile.php"><strong>Profile</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Education.php"><strong>Education</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Job.php"><strong>JOB</strong></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><img src="design/Interview.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Feedback.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Log.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Walkin.php"><strong>Walkin</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Feedback.php"><strong>Feedback</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="logout.php"><strong>Logout</strong></a></div></td>
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