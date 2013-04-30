<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime3.php");
include("../../include/SubPages.php");
$l_classid = trim($_REQUEST["l_classid"]);
$msql->query("select * from z_product where l_id=" . $l_classid);
if ($msql->next_record()) {
    $product_name = trim($msql->f("l_name"));
}
$msql->query("select * from z_productpic where l_productid=" . $l_classid . " order by l_sort desc");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>商品图片列表</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="230" valign="top">

            <table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td height="21">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="133" height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">商品图片列表</font></td>
                    <td width="538" bgcolor="#FFFFCC">&nbsp;所属产品： <font
                            color="#0000FF"><?php echo $product_name ?></font> ]
                    </td>
                    <td width="65" bgcolor="#FFFFCC">
                        <div align="center"><a href="Pro_Pic_addPic.php?l_classid=<?php echo  $l_classid ?>">添加图片</a>
                        </div>
                    </td>
                </tr>
            </table>
            <?php if ($msql->num_rows() > 0) { ?>
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
                    <tr>
                        <td height="15" colspan="11">
                            <div align="right">
                                <?php
                                //每页显示的条数
                                $page_size = 25;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                if (empty($l_classid)) {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_Pic_List.php?pageno=", 2);
                                } else {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_Pic_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                                }

                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="36" height="19" bgcolor="#999966">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                        <td width="90" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;图片</font></td>
                        <td width="364" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;图片注释</font></td>
                        <td width="70" bgcolor="#999966">
                            <div align="center"><font color="#FFFFFF">排序</font></div>
                        </td>
                        <td width="45" bgcolor="#999966">
                            <div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">状态</font>
                            </div>
                        </td>
                        <td width="39" bgcolor="#999966">
                            <div align="center"><font color="#FFFFFF">修改</font></div>
                        </td>
                        <td width="48" bgcolor="#999966">
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
                            $l_pic = trim($msql->f("l_pic"));
                            $l_ext = trim($msql->f("l_ext"));
                            $l_sort = trim($msql->f("l_sort"));
                            $l_views = trim($msql->f("l_views"));
                            $l_title = trim($msql->f("l_title"));
                            $SelectColor='';
                            ?>
                            <tr>
                                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo $num?></font></td>
                                <td height="18" bgcolor="F1F0F1">&nbsp;<a
                                        href="../../folder/product/<?php echo $l_pic ?>.<?php echo $l_ext ?>"
                                        target="_blank"><img
                                            src="../../folder/product/<?php echo $l_pic ?>.<?php echo $l_ext ?>" alt=""
                                            name="qas" height="30" border="0"></a></td>
                                <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo $l_title?></td>
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
                                            href="Pro_Pic_modiPic.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>"><font
                                                size="2">修改</font></a></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a
                                            href="Pro_Pic_del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">删除</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="1" colspan="11" bgcolor="#999999"></td>
                            </tr>
                        <?php
                        } else {
                            break;
                        }
                        $num += 1;
                    }?>
                    <tr>
                        <td height="21" colspan="11" valign="top">
                            <?php
                            //每页显示的条数
                            $page_size = 25;
                            //总条目数
                            $nums = $msql->num_rows();
                            //每次显示的页数
                            $sub_pages = 5;
                            //得到当前是第几页
                            $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                            if (empty($l_classid)) {
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_Pic_List.php?pageno=", 2);
                            } else {
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Pro_Pic_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                            }

                            ?>
                        </td>
                    </tr>
                </table>
            <?php } ?>      </td>
    </tr>
</table>

</body>
</html>
