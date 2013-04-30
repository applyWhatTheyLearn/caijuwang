<?php
include("include/common.inc.php");
$piclist = "";
$msql->query("Select  * From z_class where l_fid=0 AND l_views =  '显示'  order by l_sort desc limit 4");
while ($msql->next_record()) {
    $l_id = $msql->f("l_id");
    $l_name = $msql->f("l_name");
    $l_pic = $msql->f("l_pic");
    $l_ext = $msql->f("l_ext");
    $piclist = $piclist . "<a href=product/product_list.php?l_fid=" . $l_id . "><img src=folder/productClassPic/" . $l_pic . "." . $l_ext . " alt=" . $l_name . " width=186 height=173 class=FirstProPciSytle1></a>";
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <title>SYCWEB欢迎您的到来</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .findpass {
            background-image: url(images/firstPic-6.gif);
            height: 19px;
            width: 57px;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
        }

        .FirstReg {
            background-image: url(images/firstPic-5.gif);
            height: 19px;
            width: 57px;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
        }

        .FirstLogin {
            background-image: url(images/firstPic-4.gif);
            height: 19px;
            width: 57px;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
        }

        -->
    </style>

    <script language="javascript">
        function CheckForm(frm) {

            if (frm.username.value.length == 0) {
                frm.username.focus();
                frm.username.select();
                alert("用户姓名不能为空！");
                return false;

            }

            if (frm.userpass.value.length == 0) {
                frm.userpass.focus();
                frm.userpass.select();
                alert("用户密码不能为空！");
                return false;

            }


        }
    </script>
</head>

<body>
<div align="center">
    <table width="984" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_top scrolling="no" src=include/top.php
                        style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="top"><?php echo($piclist);?></td>
            <td width="213" align="right" valign="top">
                <table width="208" height="174" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="6" height="6" align="left" valign="top"><img src="images/huikuang_1_r2_c2.jpg"
                                                                                width="6" height="6"></td>
                        <td width="195" height="6" valign="top"><img src="images/huikuang_1_r2_c3.jpg" width="195"
                                                                     height="6"></td>
                        <td width="10" height="6" align="center" valign="top"><img src="images/huikuang_1_r2_c7.jpg"
                                                                                   width="7" height="6"></td>
                    </tr>
                    <tr>
                        <td height="160" valign="top"><img src="images/huikuang_1_r3_c2.jpg" width="6" height=160></td>
                        <td valign="top">
                            <table width="100%" height="160" border="0" cellpadding="0" cellspacing="2">
                                <form name="form1" method="post" action="myshop/user_login_check.php"
                                      onSubmit="return CheckForm(this);">
                                    <tr>
                                        <td height="23" colspan="2" background="images/pic_4_6.gif">
                                            &nbsp;<strong>用户登录：</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="40%" height="23">&nbsp;用户名称：</td>
                                        <td width="60%"><input name="username" type="text" class="picborder"
                                                               id="username" size="15" maxlength="20"></td>
                                    </tr>
                                    <tr>
                                        <td height="24">&nbsp;用户密码：</td>
                                        <td><input name="userpass" type="password" class="picborder" id="userpass"
                                                   size="15" maxlength="20"></td>
                                    </tr>
                                    <tr>
                                        <td height="36" colspan="2">
                                            <div align="center">
                                                <input name="button" type="submit" class="FirstLogin" id="button"
                                                       value=" ">
                                                <input name="button2" type="button" class="FirstReg" id="button2"
                                                       value=" " onClick="location='myshop/user_reg.php'">
                                                <input name="button3" type="button" class="findpass" id="button3"
                                                       value=" ">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="1" colspan="2" background="images/pic_4_9.gif"></td>
                                    </tr>
                                    <tr>
                                        <td height="39" colspan="2" valign="bottom">
                                            <div align="center"><img src="images/firstPic-7.jpg" width="91" height="29">
                                                <img src="images/firstPic-8.jpg" width="91" height="29"></div>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </td>
                        <td valign="top"><img src="images/huikuang_1_r3_c7.jpg" width="7" height=160></td>
                    </tr>
                    <tr>
                        <td height="7"><img src="images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
                        <td><img src="images/huikuang_1_r5_c5.jpg" width="195" height="7"></td>
                        <td><img src="images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="6" colspan="2"></td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="90" valign="top"><img src="images/firstPic-4.jpg" width="767" height="90"></td>
            <td width="213" rowspan="3" align="right" valign="top">
                <iframe frameborder=0 name=window_left scrolling="no" src=include/First_right_list_1.php
                        style="HEIGHT:255px;WIDTH:208;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
        <tr>
            <td height="4" valign="top"></td>
        </tr>
        <tr>
            <td width="771" valign="top">
                <iframe frameborder=0 name=window_tuijian scrolling="no" src=include/firstProducttj.php
                        style="HEIGHT:162px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
                <br></td>
        </tr>
    </table>
    <table width="984" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td height="6" colspan="2"></td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="771" valign="top">
                <iframe frameborder=0 name=window_bottom scrolling="no" src=include/firstHotProductlist.php
                        style="HEIGHT:185px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
            <td width="213" align="right" valign="top">
                <iframe frameborder=0 name=window_left scrolling="no" src=include/First_right_list_3.php
                        style="HEIGHT:185px;WIDTH:208;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <?php
    $msql->query("select * from z_link where 1=1 order by w_sort desc");
    $linkinfo = "";
    while ($msql->next_record()) {
        $w_name = trim($msql->f("w_name"));
        $w_url = trim($msql->f("w_url"));
        $linkinfo = $linkinfo . "<a href=http://" . $w_url . " target=_blank>" . $w_name . "</a> <font color=404040> | </font>";
    }

    ?>
    <table width="984" border="0" cellpadding="0" cellspacing="0" class="TableLineColor">
        <tr>
            <td height="6" colspan="2" valign="top"></td>
        </tr>
        <tr>
            <td width="92" height="23" valign="top">&nbsp;&nbsp;&nbsp;<font color="ff0000"><strong>友情连接</strong>：</font>
            </td>
            <td width="890" valign="top"><span style="line-height: 130%"><?php echo($linkinfo);?></span></td>
        </tr>
    </table>
    <table width="984" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td height="6" colspan="2"></td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_bottom scrolling="no" src=include/copyright.php
                        style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <br>
    <br>
</div>
</body>
</html>
