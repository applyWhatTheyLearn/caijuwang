<?php
include("../include/common.inc.php");
global $msql;
global $fsql;
if (isset($_REQUEST["l_id"])) {
    $l_id = trim($_REQUEST["l_id"]);
}
$Search = "select * from z_product where l_tuijian='推荐' and l_views='显示' order by l_sort desc limit 6";
$msql->query($Search);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>小类信息</title>
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
<body onLoad="parent.window.document.all.window_tuijian.height=document.body.scrollHeight">
<?php if ($msql->num_rows() > 0) { ?>
    <table width="770" height="42" border="0" cellpadding="0" cellspacing="0" class="TableLineColor">
        <tr>
            <td width="702" height="24" background="../images/pic_4_6.gif">&nbsp;&nbsp;&nbsp;<strong><a
                        href="../newproduct/NewProduct_list.php"><font color="#333333">新品推荐</font></a></strong></td>
            <td width="66" background="../images/pic_4_6.gif"><a href="../newproduct/NewProduct_list.php"
                                                                 target="_parent"><font color="#333333">&gt;&gt;
                        More</font></a>
            </td>
        </tr>
        <tr>
            <td height="18" colspan="2"><?php
                $i = 1;
                echo("<table width=760 border=0 cellspacing=0 cellpadding=0>");
                //                行数
                //                $rowNum=ceil($msql->num_rows()/6);
                //                for ($n=0;$n < $rowNum;$n++){
                //
                //                }
                //                while ($msql->next_record()) {
                echo ("<Tr>");
                while ($msql->next_record() && $i <= 6) {
                    $l_id = trim($msql->f("l_id"));
                    $l_name = trim($msql->f("l_name"));
                    $l_price1 = trim($msql->f("l_price1"));
                    $l_price2 = trim($msql->f("l_price2"));
                    $search1 = "select * from z_productpic where l_productid=" . $l_id . " and l_views='显示' order by l_sort desc limit 1";
                    $fsql->query($search1);
                    if ($fsql->next_record()) {
                        $l_title = trim($fsql->f("l_title"));
                        $product_pic = "<img src=../folder/product/"
                            . trim($fsql->f("l_pic")) . "." . trim($fsql->f("l_ext"))
                            . " width=100 height=100  class='picborder' alt='" . $l_title . "'>";
                    } else {
                        $product_pic = "<img src=../images/pic_4_12.gif width=100 height=100 class=picborder>";
                    }

                    $aa = "108";
                    echo ("<td width=" . $aa . " height=135 align=center>");
                    echo ("<a href=../product/product_detail.php?l_id=" . trim($msql->f("l_id")) . " target=_parent>");
                    echo ($product_pic);
                    echo ("</a>");
                    echo ("<table width=108 border=0 cellspacing=0 cellpadding=0>");
                    echo ("<tr>");
                    echo ("<td height=34 valign=middle align=center><font color=#404040 size=2>");
                    echo substr($l_name, 0, 10);
//                        echo left($msql->f("l_name"), 10);
                    echo ("</font>");
                    echo ("</td>");
                    echo ("</tr>");
                    echo ("</table>");
                    echo ("</td>");
                    $i = $i + 1;
                }

                //                    if ($i > 2) {
                //                        $i = 1;
                //                    }

                echo ("</Tr>");

                //                }
                echo ("</table>");
                ?>      </td>
        </tr>
    </table>
<?php } ?>
<p>
</p>
</body>
</html>