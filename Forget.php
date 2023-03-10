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
            <p id="breadcrumbs">You are here: <a href="index.php">Home</a></p>
          <hr class="noscreen" />
        </div>
        <div id="content">
            <hr class="noscreen" />
            <hr class="noscreen" />
            <hr class="noscreen" />
            <div class="article">
                <h2><span><a href="#">Welcome</a></span></h2>
                <form id="form2" method="post" action="ForPass.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="middle">Select User:</td>
                      <td><p>
                        <label>
                          <input type="radio" name="rdUser" value="Administrator" id="rdUser_0" />
                          Administrator</label>
                        <br />
                        <label>
                          <input type="radio" name="rdUser" value="JobSeeker" id="rdUser_1" />
                          JobSeeker</label>
                        <br />
                      </p></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><select name="cmbQue" id="cmbQue">
                        <option selected="selected">What is Your Pet Name?</option>
                        <option>Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                        </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button2" id="button2" value="Submit" />
                      </label></td>
                    </tr>
                  </table>
              </form>
                <p>&nbsp;</p>
              <p class="btn-more box noprint">&nbsp;</p>
          </div> 
            <hr class="noscreen" />
        </div>
<?php
include "right.php"
?>
</div></div>
<?php
include "footer.php"
?>
</div>
<script type="text/javascript">
</script>
</body>
</html>