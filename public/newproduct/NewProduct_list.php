<?php
include("../include/common.inc.php");
include_once("../include/SubPages.php");
session_start();
$GetTempNum1 = isset($_SESSION["GetTempNum"]) ? trim($_SESSION["GetTempNum"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
$msql->query("select * from z_product where l_tuijian='推荐' and l_views='显示' order by l_sort desc limit 50");

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <script src="../order/order.js"></script>
    <title>新品推荐</title>
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

<body>
<div align="center">
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_top id="topiframe" scrolling="no" src=../include/top.php
                        style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="762" valign="top">
                <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
                    <tr>
                        <td height="32">&nbsp;&nbsp;首页：&gt; 新品推荐</td>
                    </tr>
                </table>
                <table width="760" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="24">
                            <div align="right">
                                <div align="right">
                                    <?php
                                    //每页显示的条数
                                    $page_size = 4;
                                    //总条目数
                                    $nums = $msql->num_rows();
                                    //每次显示的页数
                                    $sub_pages = 5;
                                    //得到当前是第几页
                                    $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                    if (empty($l_classid)) {
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "NewProduct_list.php?pageno=", 2);
                                    } else {
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "NewProduct_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                    }
                                    ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td height="6"></td>
                    </tr>
                </table>
                <?php
                if ($msql->num_rows() > 0) {
                    $num = 1;
                    $beginPosition = $page_size * ($pageno - 1);
                    $endPosition = $page_size * $pageno;
                    //定位到开始位置
                    for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
                    for ($m = 0; $m < $endPosition; $m++) {
                        if ($msql->next_record()) {
                            $l_id = $msql->f("l_id");
                            $l_name = $msql->f("l_name");
                            $l_basic = $msql->f("l_basic");
                            $l_price1 = $msql->f("l_price1");
                            $l_price2 = $msql->f("l_price2");
                            $jiesheng = $l_price1 - $l_price2;
                            $search1 = "select * from z_productpic where l_productid=" . $l_id . " and l_views='显示' order by l_sort desc limit 1";
                            $fsql->query($search1);
                            if ($fsql->next_record()) {
                                $product_pic = "<img src=../folder/product/" . trim($fsql->f("l_pic")) . "." . trim($fsql->f("l_ext")) . " width=90 border=0>";
                            } else {
                                $product_pic = "<img src=../images/pic_4_12.gif width=90 border=0>";
                            }
                            ?>
                            <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">

                                <tr>
                                    <td width="25" rowspan="4">&nbsp;</td>
                                    <td width="126" rowspan="4" valign="top"><a
                                            href="../product/product_detail.php?l_id=<?php echo($l_id) ?>"><?php echo($product_pic); ?></a>
                                    </td>
                                    <td width="597" height="27"><font color="#333333"><?php echo($num); ?>
                                            、</font><strong><a
                                                href="../product/product_detail.php?l_id=<?php echo($l_id); ?>"><font
                                                    color="#FF6600"><?php echo($l_name); ?></font></a></strong></td>
                                </tr>
                                <tr>
                                    <td height="1" valign="top" background="../images/pic_4_9.gif"></td>
                                </tr>
                                <tr>
                                    <td height="27" valign="top"><span style="line-height: 130%"><font
                                                color="404040"><?php echo($l_basic); ?></font></span></td>
                                </tr>
                                <tr>
                                    <td height="27">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td width="75%"><font color="404040">定价：￥<?php echo($l_price1); ?>
                                                        &nbsp;商城价：<strong><font
                                                                color="#FF0000">￥<?php echo($l_price2); ?></font></strong>&nbsp;节省：￥<?php echo($jiesheng); ?>
                                                    </font></td>
                                                <td width="25%">
                                                    <div align="right"><a href="#"
                                                                          onClick="orderSub(<?php echo($l_id); ?>,'<?php echo($GetTempNum1);?>');"><img
                                                                src="../images/pic_4_13_1.gif" alt="订购此商品" width="69"
                                                                height="21" border="0"></a><a href="#"
                                                                                              onClick="collection('<?php echo($l_id); ?>','<?php echo($UserLoginUserID);?>');"><img
                                                                src="../images/pic_4_13_2.gif" alt="收藏此商品" width="75"
                                                                height="21" border="0"></a></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <table width="760" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="6" colspan="2"></td>
                            </tr>
                        <?php
                        } else {
                            break;
                        }
                        $num += 1;
                    }
                    ?>
                    </table>
                <?php } ?>
            </td>
            <td width="222" align="right" valign="top">
                <iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php
                        style=WIDTH:213;Z-INDEX:2
                " target="main"></iframe></td>
        </tr>
        <tr>
            <td height="6" colspan="2"></td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_bottom scrolling="no" src=../include/copyright.php
                        style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <br>
    <br>
</div>
</body>
</html>
