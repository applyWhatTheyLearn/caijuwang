<?php
include("../include/common.inc.php");
$Search = "select * from z_class where l_fid=0 order by l_tuijian desc ,l_sort ";
$msql->query($Search);

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <script src="subMenu.js"></script>
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
<table width="213" height="115" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                height="6"></td>
        <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="200" height="6"></td>
        <td width="209" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                    height="6"></td>
    </tr>
    <tr>
        <td height="102" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height=100?></td>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100%" height="25" background="../images/pic_4_6.gif">&nbsp;<strong><a
                                href="../product/product_list.php" target="_parent"><font color="009900">产品分类|全部</font></a></strong>
                    </td>
                </tr>
            </table>
            <?php
            $num1 = 1;
            while ($msql->next_record()) {
                $l_id = trim($msql->f("l_id"));
                $l_name = trim($msql->f("l_name"));
                ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td height="24" valign="bottom">&nbsp;<strong><font color="#009900"><?php echo($num1); ?></font></strong>&nbsp;<a
                                href="#" class="topMenuLink"
                                onClick="showSubMenu(<?php echo($l_id); ?>,<?php echo($num1); ?>);"><?php echo($l_name); ?></a>
                        </td>
                    </tr>
                    <tr>
                        <td height="1">
                            <div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div>
                        </td>
                    </tr>
                </table>
                <div id="submenu<?php echo($num1);?>"></div>
                <?php
                $num1 = $num1 + 1;

            }

            ?>
        </td>
        <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height=100?></td>
    </tr>
    <tr>
        <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c5.jpg" width="200" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
    </tr>
</table>
<table width="213" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="6"></td>
    </tr>
</table>
<table width="213" height="115" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                height="6"></td>
        <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="200" height="6"></td>
        <td width="209" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                    height="6"></td>
    </tr>
    <tr>
        <td height="102" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height=100?></td>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
                $msql->query("select * from z_hot where l_views='显示' order by l_sort desc limit 6");
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
                    $num1 = $num1 + 1;

                }

                ?>
            </table>
        </td>
        <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height=100?></td>
    </tr>
    <tr>
        <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c5.jpg" width="200" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
    </tr>
</table>
<table width="213" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="6"></td>
    </tr>
</table>
<table width="213" height="115" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                height="6"></td>
        <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="200" height="6"></td>
        <td width="209" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                    height="6"></td>
    </tr>
    <tr>
        <td height="102" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height=100?></td>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="9%" height="25" background="../images/pic_4_6.gif">&nbsp;<img src="../images/pic_4_7.gif"
                                                                                             width="5" height="14"></td>
                    <td width="58%" background="../images/pic_4_6.gif"><strong><font
                                color="#FF3300">热销排行</font></strong></td>
                    <td width="33%" background="../images/pic_4_6.gif">
                        <div align="right"><a href="../paihang/ph_list.php" target="_parent"><font
                                    color="#333333">more&gt;&gt;</font></a></div>
                    </td>
                </tr>
                <?php
                $msql->query("select  * from z_product where l_views='显示' order by l_shuliang desc limit 9");

                while ($msql->next_record()) {
                    $l_id3 = trim($msql->f("l_id"));
                    $l_name = substr(trim($msql->f("l_name")), 0, 13);

                    ?>
                    <tr>
                        <td height="24" colspan="3" valign="bottom">&nbsp;<font color="#FF6600" size="1">■</font>&nbsp;<a
                                href="../product/product_detail.php?l_id=<?php echo($l_id3); ?>" class="topMenuLink"
                                target="_parent"><?php echo($l_name); ?></a></td>
                    </tr>
                    <tr>
                        <td height="1" colspan="3">
                            <div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div>
                        </td>
                    </tr>
                <?php

                }

                ?>

            </table>
        </td>
        <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height=100?></td>
    </tr>
    <tr>
        <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c5.jpg" width="200" height="7"></td>
        <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
    </tr>
</table>
</body>
</html>
