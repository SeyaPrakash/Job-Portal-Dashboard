<!DOCTYPE html>
<html>
<head>
    <title>JOB PORTAL</title>
    <link rel="index" href="./" title="Home"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css"/>
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css"/>
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
                <hr class="noscreen"/>
                <p id="breadcrumbs">&nbsp;</p>
                <hr class="noscreen"/>
            </div>
            <div id="content">
                <hr class="noscreen"/>
                <hr class="noscreen"/>
                <hr class="noscreen"/>
                <div class="article">
                    <h2><span><a href="#">Dashboard</a></span></h2>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $ID = $_GET['JobId'];
                                $con = mysqli_connect("localhost", "root", "", "job");
                                $sql = "select * from JobSeeker_Reg where JobSeekId='" . $ID . "'  ";
                                $result = mysqli_query($con,$sql);
                                $row = mysqli_fetch_array($result)
                                ?>
                                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <tr>
                                        <td>Id:</td>
                                        <td><?php echo $row['JobSeekId']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $row['JobSeekerName']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><?php echo $row['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td><?php echo $row['City']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><?php echo $row['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile:</td>
                                        <td><?php echo $row['Mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Highest Qualification:</td>
                                        <td><?php echo $row['Qualification']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td><?php echo $row['Gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Birth Date:</td>
                                        <td><?php echo $row['BirthDate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Resume:</td>
                                        <td><a href="../upload/<?php echo $row['Resume']; ?>" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong><a href="ApprovJob.php?JobId=<?php echo $row['JobSeekId']; ?>">Approve
                                                    Job Seeker</a></strong></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <p>&nbsp;</p>
                    <p class="btn-more box noprint">&nbsp;</p>
                </div>
                <hr class="noscreen"/>
            </div>
            <?php
            include "right.php"
            ?>
        </div>
    </div>
    <?php
    mysqli_close($con);
    include "footer.php"
    ?>
</div>
</body>
</html>