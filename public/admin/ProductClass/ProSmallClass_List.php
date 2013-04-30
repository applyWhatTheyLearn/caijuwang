<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$l_classid = trim($_REQUEST["l_classid"]);
$msql->query("select * from z_class where l_fid=" . $l_classid . " order by l_sort ");

?>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="../css.css" rel="stylesheet" type="text/css">
        <title>产品小类列表</title>
    </head>

    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#999999">
            <td height="1" valign="top"></td>
        </tr>
        <tr bgcolor="#E4E4E4">
            <td height="230" valign="top">

                <table width="740" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td width="133" height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">产品小类列表</font></td>
                        <td width="514" bgcolor="#FFFFFF">
                            <div align="right"></div>
                        </td>
                        <td width="89" bgcolor="#FFFFFF">
                            <div align="center"><a href="ProSmallClass_add.php?l_classid=<?php echo  $l_classid ?>">添加产品小类</a>
                            </div>
                        </td>
                    </tr>
                </table>
                <?php if ($msql->num_rows()>0) { ?>
                    <table width="740" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="15" colspan="12">
                                <div align="right">
                                    <?php
                                    //每页显示的条数
                                    $page_size = 6;
                                    //总条目数
                                    $nums = $msql->num_rows();
                                    //每次显示的页数
                                    $sub_pages = 5;
                                    //得到当前是第几页
                                    $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "ProSmallClass_List.php?pageno=", 2);
                                    ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="39" height="19" bgcolor="#999966">&nbsp;<font color="#FFFFFF" size="2">序号</font>
                            </td>
                            <td width="226" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;小类名称（中文）</font></td>
                            <td width="226" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;小类名称（英文）</font></td>
                            <td width="60" bgcolor="#999966">
                                <div align="center"><font color="#FFFFFF" size="2">推荐</font></div>
                            </td>
                            <td width="59" bgcolor="#999966">
                                <div align="center"><font color="#FFFFFF">排序</font></div>
                            </td>
                            <td width="47" bgcolor="#999966">
                                <div align="center"><font color="#FFFFFF" size="2"></font><font
                                        color="#FFFFFF">状态</font></div>
                            </td>
                            <td width="34" bgcolor="#999966">
                                <div align="center"><font color="#FFFFFF">修改</font></div>
                            </td>
                            <td width="40" bgcolor="#999966">
                                <div align="center"><font color="#FFFFFF">删除</font></div>
                            </td>
                        </tr>
                        <?php
                        $num = 1;
                        $beginPosition = $page_size * ($pageno - 1);
                        $endPosition = $page_size * $pageno;
                        //定位到开始位置
                        for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
                        for ($m = 0; $m < $endPosition; $m++) {
                            if ($msql->next_record()) {
                                $l_id = trim($msql->f("l_id"));
                                $l_name = trim($msql->f("l_name"));
                                $l_name_e = trim($msql->f("l_name_e"));
                                $l_sort = trim($msql->f("l_sort"));
                                $l_tuijian = trim($msql->f("l_tuijian"));
                                $l_views = trim($msql->f("l_views"));
                                $l_tuijianinfo = $l_tuijian == "推荐" ? "<font color=#ff0000>荐</font> " : "";
                                $SelectColor = 'black';
                                ?>
                                <tr>
                                    <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo $num?></font></td>
                                    <td height="18" bgcolor="F1F0F1">&nbsp;<a href="#"><?php echo $l_name ?></a></td>
                                    <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo $l_name_e ?></td>
                                    <td height="18" bgcolor="F1F0F1">
                                        <div align="center"><?php echo $l_tuijianinfo ?></div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><font
                                                color="<?php echo $SelectColor ?>"><?php echo $l_sort ?></font></div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><font
                                                color="<?php echo $SelectColor ?>"><?php echo $l_views?></font></div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="ProSmallClass_Modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>"><font
                                                    size="2">修改</font></a></div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="ProSmallClass_Del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">删除</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="1" colspan="12" bgcolor="#999999"></td>
                                </tr>
                            <?php
                            } else {
                                break;
                            }
                            $num += 1;
                        }
                        ?>
                        <tr>
                            <td height="21" colspan="12" valign="top">
                                <?php
                                //每页显示的条数
                                $page_size = 6;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "ProSmallClass_List.php?pageno=", 2);
                                ?>
                            </td>
                        </tr>
                    </table>
                <?php } ?>      </td>
        </tr>
    </table>

    </body>
    </html>
<?php



?>