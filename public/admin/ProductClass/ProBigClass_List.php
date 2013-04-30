<script language="JavaScript">{
     parent.itemFrame.location.href = "detail.html"
 }
 </script>
<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$msql->query("select * from z_class where l_fid=0 order by l_tuijian desc ,l_sort ");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>商品大类列表</title>
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
                    <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">商品大类列表</font></td>
                    <form name="form" id="form">
                        <td width="514" bgcolor="#FFFFFF">
                            <div align="right"></div>
                        </td>
                    </form>
                    <td width="89" bgcolor="#FFFFFF">
                        <div align="center"><a href="ProBigClass_add.php">添加大类产品</a></div>
                    </td>

                </tr>
            </table>
            <?php if ($msql->num_rows() > 0) { ?>
                <table width="740" border="0" cellpadding="0" cellspacing="1">
                    <tr>
                        <td height="15" colspan="14">
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
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "ProBigClass_List.php?pageno=", 2);


                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="51" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                        <td width="51" bgcolor="#0099CC">
                            <div align="center"><font color="#FFFFFF" size="2">代表图</font></div>
                        </td>
                        <td width="181" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;大类名称(中文)</font></td>
                        <td width="197" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;大类名称(英文)</font></td>
<!--                        <td width="61" bgcolor="#999999">-->
<!--                            <div align="center"><font color="#FFFFFF" size="2">小类管理</font></div>-->
<!--                        </td>-->
                        <td width="31" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF" size="2">荐</font></div>
                        </td>
                        <td width="51" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">排序</font></div>
                        </td>
                        <td width="43" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">显示</font>
                            </div>
                        </td>
                        <td width="31" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">修改</font></div>
                        </td>
                        <td width="32" bgcolor="#999999">
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
                            $l_pic = trim($msql->f("l_pic"));
                            $l_ext = trim($msql->f("l_ext"));
                            $l_sort = trim($msql->f("l_sort"));
                            $l_tuijian = trim($msql->f("l_tuijian"));
                            $l_views = trim($msql->f("l_views"));
                            $l_tuijianinfo = $l_tuijian == "推荐" ? "<font color=#ff0000>荐</font> " : "";
                            $SelectColor = 'black';
                            ?>
                            <tr>
                                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font
                                            color="#993300"><?php echo $num?></font>、</font></td>
                                <td height="18" bgcolor="F1F0F1">
                                    <div align="center"><a
                                            href="ProClass_ModiPic.php?l_id=<?php echo $l_id?>&pageno=<?php echo  $pageno ?>"><img
                                                src='../../folder/productClassPic/<?php echo  $l_pic ?>.<?php echo  $l_ext ?>'
                                                alt="点击添加或替换代表图片" name='Pic' width="20" height="20" border="0"></a>
                                    </div>
                                </td>
                                <td height="18" bgcolor="F1F0F1">&nbsp;<a
                                        href="ProSmallClass_List.php?l_classid=<?php echo  $l_id ?>" target="itemFrame"
                                        title="点击查看商品小类"><?php echo  $l_name ?></a></td>
                                <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo  $l_name_e ?></td>
<!--                                <td height="18" bgcolor="F1F0F1">-->
<!--                                    <div align="center"><a href="ProFittings_List.php?l_classid=--><?php //echo  $l_id ?><!--">小类管理</a>-->
<!--                                    </div>-->
<!--                                </td>-->
                                <td height="18" bgcolor="F1F0F1">
                                    <div align="center"><?php echo  $l_tuijianinfo ?></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><font
                                            color="<?php echo  $SelectColor ?>"><?php echo  $l_sort ?></font></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><font
                                            color="<?php echo  $SelectColor ?>"><?php echo $l_views?></font></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a
                                            href="ProBigClass_Modi.php?l_id=<?php echo $l_id?>&pageno=<?php echo  $pageno ?>"><font
                                                size="2">修改</font></a></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a
                                            href="ProBigClass_Del.php?l_id=<?php echo $l_id?>&pageno=<?php echo  $pageno ?>">删除</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="1" colspan="14" bgcolor="#999999"></td>
                            </tr>
                        <?php
                        } else {
                            break;
                        }
                        $num += 1;
                    }
                    ?>
                    <tr>
                        <td height="21" colspan="14" valign="top">
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
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "ProBigClass_List.php?pageno=", 2);


                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
            <?php
            }
            ?>      </td>
    </tr>
</table>

</body>
</html>
