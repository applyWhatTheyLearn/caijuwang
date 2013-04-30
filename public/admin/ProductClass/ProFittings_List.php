<script language="JavaScript">{
        parent.itemFrame.location.href = "detail.html"
    }
</script>
<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$l_classid = trim($_REQUEST["l_classid"]);
$msql->query("select * from z_class where l_id=" . $l_classid);
if ($msql->next_record()) {
    $BigClassName = trim($msql->f("l_name"));
}
$msql->query("select * from z_fittings where l_classid=" . $l_classid . " order by l_id desc  ");

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>小类分类列表</title>
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
                    <td width="133" height="21" bgcolor="#009999">&nbsp;<font color="#FFFFFF">小类分类列表</font></td>
                    <form name="form" id="form">
                        <td width="427" bgcolor="#FFFFFF">&nbsp;<strong><font
                                    color="#FF0000"><?php echo  $BigClassName ?> </font></strong></td>
                    </form>
                    <td width="176" bgcolor="#FFFFFF">
                        <div align="center"><a
                                href="ProFittings_add.php?l_classid=<?php echo  $l_classid ?>">添加分类</a><font
                                color="#993300">|</font><a href="ProBigClass_List.php">返回产品大类列表</a></div>
                    </td>

                </tr>
            </table>
            <table width="740" border="0" cellpadding="0" cellspacing="1">
                <tr>
                    <td height="15" colspan="10">
                        <div align="right">
                            <?php
                            //每页显示的条数
                            $page_size = 8;
                            //总条目数
                            $nums = $msql->num_rows();
                            //每次显示的页数
                            $sub_pages = 5;
                            //得到当前是第几页
                            $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                            if (empty($l_classid)) {
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "ProFittings_List.php?pageno=", 2);
                            } else {
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "ProFittings_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="65" height="20" bgcolor="#009999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                    <td width="470" bgcolor="#009999"><font color="#FFFFFF" size="2">&nbsp;小类分类名称</font></td>
                    <td width="67" bgcolor="#009999">
                        <div align="center"><font color="#FFFFFF">排序</font></div>
                    </td>
                    <td width="57" bgcolor="#009999">
                        <div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">状态</font></div>
                    </td>
                    <td width="34" bgcolor="#009999">
                        <div align="center"><font color="#FFFFFF">修改</font></div>
                    </td>
                    <td width="40" bgcolor="#009999">
                        <div align="center"><font color="#FFFFFF">删除</font></div>
                    </td>
                </tr>
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
                        $l_sort = trim($msql->f("l_sort"));
                        $l_detail = trim($msql->f("l_detail"));
                        $l_views = trim($msql->f("l_views"));
                        $SelectColor='';
                        ?>
                        <tr>
                            <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font
                                        color="#993300"><?php echo $num?></font>、</font></td>
                            <td height="18" bgcolor="F1F0F1">&nbsp;<a
                                    href="ProFittingsPic_List.php?l_classid=<?php echo $l_id?>" target="itemFrame"
                                    title="点击查看商品小类"><?php echo  $l_name ?></a></td>
                            <td bgcolor="F1F0F1">
                                <div align="center"><font
                                        color="<?php echo  $SelectColor ?>"><?php echo  $l_sort ?></font></div>
                            </td>
                            <td bgcolor="F1F0F1">
                                <div align="center"><font color="<?php echo  $SelectColor ?>"><?php echo $l_views?></font>
                                </div>
                            </td>
                            <td bgcolor="F1F0F1">
                                <div align="center"><a
                                        href="ProFittings_Modi.php?l_id=<?php echo $l_id?>&pageno=<?php echo  $pageno ?>&l_classid=<?php echo  $l_classid ?>"><font
                                            size="2">修改</font></a></div>
                            </td>
                            <td bgcolor="F1F0F1">
                                <div align="center"><a
                                        href="ProFittings_Del.php?l_id=<?php echo $l_id?>&pageno=<?php echo  $pageno ?>&l_classid=<?php echo  $l_classid ?>">删除</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="F1F0F1">&nbsp;</td>
                            <td height="18" colspan="5" bgcolor="F1F0F1">&nbsp;<font
                                    color="#999999"><?php echo  $l_detail ?></font></td>
                        </tr>
                        <tr>
                            <td height="1" colspan="10" bgcolor="#999999"></td>
                        </tr>
                    <?php
                    } else {
                        break;
                    }
                    $num += 1;
                }
                ?>
            </table>
            <?php } ?>      </td>
    </tr>
</table>

</body>
</html>
