<?php
session_start();
if(isset($_SESSION['$UserName'])){
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
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
              <h2><span><a href="#">Dashboard</a></span></h2>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Create New User</strong></td>
        </tr>
        <tr>
          <td height="26"><form id="form1" name="form1" method="post" action="InsertUser.php">
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35"><span class="style10">User Name:</span></td>
                <td><span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td><span class="style10">Password:</span></td>
                <td><span id="sprytextfield2">
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
            </table>
                    </form>            </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>User List</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>UserName</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
</tr>
<?php
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from User_Master";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
$Id=$row['UserId'];
$UserName=$row['UserName'];
?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $UserName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteUser.php?UserId=<?php echo $Id;?>">Delete</a></strong></div></td>
</tr>
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
<script type="text/javascript">
</script>
</body>
</html>