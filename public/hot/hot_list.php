<?php
include("../include/common.inc.php");
include_once("../include/SubPages.php");
$Search = "select * from z_hot where l_views='显示' order by l_sort desc";
$msql->query($Search);

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>热门促销</title>
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
                        <td height="32">&nbsp;&nbsp;首页：&gt; 热门促销</td>
                    </tr>
                </table>
                <table width="760" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="24"><?php if ($msql->num_rows() > 0) { ?>
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
                                            $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Hot_list.php?pageno=", 2);
                                        } else {
                                            $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Hot_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                        }


                                        ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td height="6"></td>
                    </tr>
                </table>
                <?php if ($msql->num_rows() > 0) {
                    $num = 1;
                    $beginPosition = $page_size * ($pageno - 1);
                    $endPosition = $page_size * $pageno;
                    //定位到开始位置
                    for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
                    for ($m = 0; $m < $endPosition; $m++) {
                        if ($msql->next_record()) {
                            $l_id = trim($msql->f("l_id"));
                            $l_title = trim($msql->f("l_title"));
                            $l_detail = trim($msql->f("l_detail"));
                            $l_time = trim($msql->f("l_time"));
                            ?>
                            <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">

                                <tr>
                                    <td width="25" height="27">&nbsp;</td>
                                    <td width="727"><font color="#333333"><?php echo($num); ?>、</font><a
                                            href="hot_detail.php?l_id=<?php echo($l_id) ?>"><strong><font
                                                    color="#009900"><?php echo($l_title) ?></font></strong></a></td>
                                </tr>
                                <tr>
                                    <td height="1" valign="top"></td>
                                    <td height="1" valign="top" background="../images/pic_4_9.gif"></td>
                                </tr>
                                <tr>
                                    <td height="56" valign="top">&nbsp;</td>
                                    <td height="56" valign="top"><p style="line-height: 130%"><font
                                                color="404040">发布于：<?php echo($l_time); ?><br>
                                                <?php echo($l_detail) ?></font></td>
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
                        $num = $num + 1;

                    }
                    ?>
                    </table>
                <?php } ?>
            </td>
            <td width="222" align="right" valign="top">
                <iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php
                        style="WIDTH:213;Z-INDEX:2" target="main"></iframe>
            </td>
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
