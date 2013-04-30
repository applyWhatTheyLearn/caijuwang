<?php
include("../include/common.inc.php");
global $msql;
$Search = "select w_tel,w_email,w_qq,w_msn,w_open_time from z_contact";
$msql->query($Search);
if ($msql->next_record()) {
    $w_tel = trim($msql->f('w_tel'));
    $w_email = trim($msql->f('w_email'));
    $w_qq = trim($msql->f('w_qq'));
    $w_msn = trim($msql->f('w_msn'));
    $w_open_time = trim($msql->f('w_open_time'));
}
$msql->query("select * from w_copyright");
if ($msql->next_record()) {
    $w_companyname = trim($msql->f("w_companyname"));
    $w_copyright = trim($msql->f("w_copyright"));
    $w_tongji = trim($msql->f("w_tongji"));
    $w_beiannum = trim($msql->f("w_beiannum"));
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>关于我们</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
        }

        .topbuttom {
            background-image: url(../images/pic_4_5.gif);
            height: 22px;
            width: 58px;
            margin: 0px;
            clear: none;
            float: none;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;
        }

        -->
    </style>
</head>

<body>
<div align="center">
    <table width="984" height="91" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                    height="6"></td>
            <td height="6" colspan="3" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="971" height="6">
            </td>
            <td width="7" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                      height="6"></td>
        </tr>
        <tr>
            <td height="78" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height="78"></td>
            <td width="16" valign="top">&nbsp;</td>
            <td width="213"><img src="../images/logo_bottom.gif" width="196" height="60"></td>
            <td width="742"><font color="#555555"><a href="../index.php" target="_parent">商城</a> | <a
                        href="../AboutUs/contactus$_REQUEST[" target="_parent">联系我们</a> | <a href="../Comate/Comate_list.php"
                                                                                       target="_parent">合作伙伴</a> | <a
                        href="../link/link_list.php" target="_parent">友情连接</a> | <a href="../helpcenter/help_list.php"
                                                                                    target="_parent">帮助中心</a> | <a
                        href="../AboutUs/law.html" target="_parent">法律声明</a> | <a href="../AboutUs/return.html"
                                                                                  target="_parent">意见反馈</a> | <a
                        href="../myshop/user_login.php" target="_parent">用户登录</a> | <a href="../index.php"
                                                                                       target="_parent">首页</a> | <br>
                    在线客服 QQ: <?php echo($w_qq); ?> MSN: <?php echo($w_msn); ?><br>
                    客服电话 <?php echo($w_tel); ?> 工作时间: <?php echo($w_open_time); ?><br>
                    版权所有: <?php echo($w_companyname); ?> |  <?php echo($w_beiannum); ?> | <?php echo($w_tongji); ?>
                </font></td>
            <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height="78"></td>
        </tr>
        <tr>
            <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
            <td colspan="3"><img src="../images/huikuang_1_r5_c5.jpg" width="971" height="7"></td>
            <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
        </tr>
    </table>
</div>
</body>
</html>
