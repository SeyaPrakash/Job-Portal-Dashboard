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
                <h2><span><a href="#">Latest News</a></span></h2>
                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
  <th bgcolor="#006699" class="style3">&nbsp;</th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News Date</strong></div></th>
</tr>
<?php
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from News_Master";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
$News=$row['News'];
$NewsDate=$row['NewsDate'];
?>
<tr>
  <td class="style3"><img src="design/ico_archive2.gif" alt="" width="9" height="11" /></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $News;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $NewsDate;?></strong></div></td>
</tr>
<?php
}
$records = mysqli_num_rows($result);
?>
<?php
mysqli_close($con);
?>
</table>
    </td>
  </tr>
</table>
</p><p class="btn-more box noprint">&nbsp;</p>
</div><hr class="noscreen" />
</div>
<?php
include "right.php"
?>
</div></div>
<?php
include "footer.php"
?>
</div>
</body>
</html>