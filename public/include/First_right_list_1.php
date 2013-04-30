<?php
include("../include/common.inc.php");
global $msql;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>�ޱ����ĵ�</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        -->
    </style>
</head>

<body onLoad="parent.window.document.all.window_left.height=document.body.scrollHeight">
<table width="208" height="61" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                height="6"></td>
        <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="195" height="6"></td>
        <td width="209" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                    height="6"></td>
    </tr>
    <tr>
        <td height="48" valign="top" background="../images/huikuang_1_r3_c2.jpg">&nbsp;</td>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
                $msql->query("select  * from z_hot where l_views='显示' order by l_sort desc limit 3");
                ?>
                <tr>
                    <td height="25" background="../images/pic_4_6.gif">&nbsp;<strong><font
                                color="009900">热门促销</font></strong></td>
                    <td background="../images/pic_4_6.gif">
                        <div align="right"><a href="../hot/hot_list.php" target="_parent"><font color="#333333">more&gt;&gt;</font></a>
                        </div>
                    </td>
                </tr>
                <?php
                $num1 = 1;
                while ($msql->next_record()) {

                    $l_id = trim($msql->f("l_id"));
                    $l_title = substr(trim($msql->f("l_title")), 0, 13);
                    ?>
                    <tr>
                        <td height="24" colspan="2" valign="bottom">&nbsp;<strong><font
                                    color="#009900"><?php echo($num1); ?></font></strong>&nbsp;<a
                                href="../hot/hot_detail.php?l_id=<?php echo($l_id); ?>" target="_parent"
                                class="topMenuLink"><?php echo($l_title); ?></a></td>
                    </tr>
                    <tr>
                        <td height="1" colspan="2">
                            <div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </td>
        <td valign="top" background="../images/huikuang_1_r3_c7.jpg">&nbsp;</td>
    </tr>
    <tr>
        <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c5.jpg" width="195" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
    </tr>
</table>
<table width="208" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="4"></td>
    </tr>
</table>
<table width="208" height="138" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                height="6"></td>
        <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="195" height="6"></td>
        <td width="209" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                    height="6"></td>
    </tr>
    <tr>
        <td height="124" valign="top" background="../images/huikuang_1_r3_c2.jpg">&nbsp;</td>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
                $NewOrderList= "SELECT z_user.Meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_order.l_id, z_order.l_orderform, z_order.l_price, z_order.l_mobile, z_order.l_ordertime, z_order.l_orderstatu FROM z_user INNER JOIN z_order ON z_user.Meid = z_order.l_userid";
                $search="SELECT * from (". $NewOrderList .") as tb where tb.l_orderstatu='新订单'";
                $msql->query($search);
                ?>
                <tr>
                    <td height="25" background="../images/pic_4_6.gif">&nbsp;<strong><font color="#333333">已订购用户</font></strong>
                    </td>
                </tr>
                <?php
                while ($msql->next_record()) {
                    $l_username = substr(trim($msql->f("UserName")), 0, 13);
                    $l_ordertime = trim($msql->f("l_ordertime"));

                    ?>
                    <tr>
                        <td height="24" valign="bottom">&nbsp;<strong><font color="#333333"><?php echo($num1); ?>
                                    、</font></strong>&nbsp;<?php echo($l_username); ?></td>
                    </tr>
                    <tr>
                        <td height="1">
                            <div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </td>
        <td valign="top" background="../images/huikuang_1_r3_c7.jpg">&nbsp;</td>
    </tr>
    <tr>
        <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c5.jpg" width="195" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
    </tr>
</table>
</body>
</html>
