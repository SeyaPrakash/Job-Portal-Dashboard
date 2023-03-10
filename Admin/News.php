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
    <link rel="index" href="./" title="Home"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css"/>
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css"/>
    <style type="text/css">
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
</head>
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
    <tr>
        <td id="ds_calclass">
        </td>
    </tr>
</table>
<script type="text/javascript">
    var ds_i_date = new Date();
    ds_c_month = ds_i_date.getMonth() + 1;
    ds_c_year = ds_i_date.getFullYear();
    function ds_getel(id) {
        return document.getElementById(id);
    }
    function ds_getleft(el) {
        var tmp = el.offsetLeft;
        el = el.offsetParent
        while (el) {
            tmp += el.offsetLeft;
            el = el.offsetParent;
        }
        return tmp;
    }
    function ds_gettop(el) {
        var tmp = el.offsetTop;
        el = el.offsetParent
        while (el) {
            tmp += el.offsetTop;
            el = el.offsetParent;
        }
        return tmp;
    }
    var ds_oe = ds_getel('ds_calclass');
    var ds_ce = ds_getel('ds_conclass');
    var ds_ob = '';
    function ds_ob_clean() {
        ds_ob = '';
    }
    function ds_ob_flush() {
        ds_oe.innerHTML = ds_ob;
        ds_ob_clean();
    }
    function ds_echo(t) {
        ds_ob += t;
    }
    var ds_element;
    var ds_monthnames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    var ds_daynames = [
        'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
    ];
    function ds_template_main_above(t) {
        return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
            + '<tr>'
            + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
            + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
            + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
            + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
            + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
            + '</tr>'
            + '<tr>'
            + '<td colspan="7" class="ds_head">' + t + '</td>'
            + '</tr>'
            + '<tr>';
    }
    function ds_template_day_row(t) {
        return '<td class="ds_subhead">' + t + '</td>';
    }
    function ds_template_new_week() {
        return '</tr><tr>';
    }
    function ds_template_blank_cell(colspan) {
        return '<td colspan="' + colspan + '"></td>'
    }
    function ds_template_day(d, m, y) {
        return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
    }
    function ds_template_main_below() {
        return '</tr>'
            + '</table>';
    }
    function ds_draw_calendar(m, y) {
        ds_ob_clean();
        ds_echo(ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
        for (i = 0; i < 7; i++) {
            ds_echo(ds_template_day_row(ds_daynames[i]));
        }
        var ds_dc_date = new Date();
        ds_dc_date.setMonth(m - 1);
        ds_dc_date.setFullYear(y);
        ds_dc_date.setDate(1);
        if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
            days = 31;
        } else if (m == 4 || m == 6 || m == 9 || m == 11) {
            days = 30;
        } else {
            days = (y % 4 == 0) ? 29 : 28;
        }
        var first_day = ds_dc_date.getDay();
        var first_loop = 1;
        ds_echo(ds_template_new_week());
        if (first_day != 0) {
            ds_echo(ds_template_blank_cell(first_day));
        }
        var j = first_day;
        for (i = 0; i < days; i++) {
            if (j == 0 && !first_loop) {
                ds_echo(ds_template_new_week());
            }
            ds_echo(ds_template_day(i + 1, m, y));
            first_loop = 0;
            j++;
            j %= 7;
        }
        ds_echo(ds_template_main_below());
        ds_ob_flush();
        ds_ce.scrollIntoView();
    }
    function ds_sh(t) {
        ds_element = t;
        var ds_sh_date = new Date();
        ds_c_month = ds_sh_date.getMonth() + 1;
        ds_c_year = ds_sh_date.getFullYear();
        ds_draw_calendar(ds_c_month, ds_c_year);
        ds_ce.style.display = '';
        the_left = ds_getleft(t);
        the_top = ds_gettop(t) + t.offsetHeight;
        ds_ce.style.left = the_left + 'px';
        ds_ce.style.top = the_top + 'px';
        ds_ce.scrollIntoView();
    }
    function ds_hi() {
        ds_ce.style.display = 'none';
    }
    function ds_nm() {
        ds_c_month++;
        if (ds_c_month > 12) {
            ds_c_month = 1;
            ds_c_year++;
        }
        ds_draw_calendar(ds_c_month, ds_c_year);
    }
    function ds_pm() {
        ds_c_month = ds_c_month - 1;
        if (ds_c_month < 1) {
            ds_c_month = 12;
            ds_c_year = ds_c_year - 1;
        }
        ds_draw_calendar(ds_c_month, ds_c_year);
    }
    function ds_ny() {
        ds_c_year++;
        ds_draw_calendar(ds_c_month, ds_c_year);
    }
    function ds_py() {
        ds_c_year = ds_c_year - 1; 
        ds_draw_calendar(ds_c_month, ds_c_year);
    }
    function ds_format_date(d, m, y) {
        m2 = '00' + m;
        m2 = m2.substr(m2.length - 2);
        d2 = '00' + d;
        d2 = d2.substr(d2.length - 2);
        return y + '-' + m2 + '-' + d2;
    }
    function ds_onclick(d, m, y) {
        ds_hi();
        if (typeof(ds_element.value) != 'undefined') {
            ds_element.value = ds_format_date(d, m, y);
        } else if (typeof(ds_element.innerHTML) != 'undefined') {
            ds_element.innerHTML = ds_format_date(d, m, y);
        } else {
            alert(ds_format_date(d, m, y));
        }
    }
</script>
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
                    <h2><span><a href="#">DashBoard</a></span></h2>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="27" bgcolor="#A0B9F3"><span class="style4 style10">Create News</span></td>
                        </tr>
                        <tr>
                            <td height="26">
                                <form id="form1" method="post" action="InsertNews.php">
                                    <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="36"><span class="style9">News:</span></td>
                                            <td><span id="sprytextfield1">
                              <label>
                              <input type="text" name="txtNews" id="txtNews"/>
                              </label>
                              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td height="35"><span class="style9">News Date:</span></td>
                                            <td><span id="sprytextfield2">
                              <label>
                              <input type="text" onclick="ds_sh(this);" name="txtDate" id="txtDate"/>
                              </label>
                              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><label>
                                                    <input type="submit" name="button" id="button" value="Submit"/>
                                                </label></td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td height="25" bgcolor="#A0B9F3"><span class="style3">News List</span></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="1" bordercolor="#1CB5F1">
                                    <tr>
                                        <th height="32" bgcolor="#1CB5F1">
                                            <div align="left" class="style12 style13 style7 style8">Id</div>
                                        </th>
                                        <th bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">News</div>
                                        </th>
                                        <th bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">Date</div>
                                        </th>
                                        <th height="32" bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">Edit</div>
                                        </th>
                                        <th bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">Delete</div>
                                        </th>
                                    </tr>
                                    <?php
                                    $con = mysqli_connect("localhost","root","","job");
                                    $sql = "select * from news_master";
                                    $result = mysqli_query($con,$sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['NewsId'];
                                        $News = $row['News'];
                                        $NewsDate = $row['NewsDate'];
                                        ?>
                                        <tr>
                                            <td>
                                                <div align="left" class="style11 style7 style8"><?php echo $Id; ?></div>
                                            </td>
                                            <td>
                                                <div align="left"
                                                     class="style11 style7 style8"><?php echo $News; ?></div>
                                            </td>
                                            <td>
                                                <div align="left"
                                                     class="style11 style7 style8"><?php echo $NewsDate; ?></div>
                                            </td>
                                            <td>
                                                <div align="left" class="style11 style7 style8"><a
                                                        href="EditNews.php?NewsId=<?php echo $Id; ?>">Edit</a></div>
                                            </td>
                                            <td>
                                                <div align="left" class="style11 style7 style8"><a
                                                        href="DeleteNews.php?NewsId=<?php echo $Id; ?>">Delete</a></div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    $records = mysqli_num_rows($result);
                                    ?>
                                    <tr>
                                        <td colspan="5">
                                            <div align="left"
                                                 class="style11 style7 style8"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="26">
                                <form method="post" action="InsertNews.php">
                                    <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                                    </table>
                                </form>
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
    include "footer.php"
    ?>
</div>
<script type="text/javascript">
</script>
</body>
</html>