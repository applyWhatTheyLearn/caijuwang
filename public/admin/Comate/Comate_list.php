<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime2.php");
$class_id = isset($_REQUEST["class_id"]) ? trim($_REQUEST["class_id"]) : '';
$msql->query("select * from z_comate where 1=1 order by w_sort desc");

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>合作伙伴列表</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#999999">
            <td height="1" valign="top"></td>
        </tr>
        <tr bgcolor="#E4E4E4">
            <td height="230" valign="top">
                <table width="770" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">合作伙伴列表</font></td>
                        <form name="form1" method="post" action="Comate_list.php">
                            <td width="514" bgcolor="#FFFFFF">
                                <div align="right"></div>
                            </td>
                            <td width="89" bgcolor="#FFFFFF">
                                <div align="center"><a href="Comate_add.php?class_id=<?php echo $class_id ?>">添加合作伙伴</a>
                                </div>
                            </td>
                        </form>
                    </tr>
                </table>
                <?php if ($msql->num_rows() > 0) { ?>
                    <table width="770" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="15" colspan="12">
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
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Comate_list.php?pageno=", 2);
                                    } else {
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Comate_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                    }
                                    ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="49" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font>
                            </td>
                            <td width="138" bgcolor="#999999">&nbsp;</td>
                            <td width="280" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;合作伙伴名称</font></td>
                            <td width="77" bgcolor="#999999">&nbsp;<font color="#FFFFFF">排序</font></td>
                            <td width="93" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">修改图片/显示</font></div>
                            </td>
                            <td width="57" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF" size="2"></font><font
                                        color="#FFFFFF">状态</font></div>
                            </td>
                            <td width="30" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">修改</font></div>
                            </td>
                            <td width="37" bgcolor="#999999">
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
                                $w_classid = trim($msql->f("w_classid"));
                                $w_id = trim($msql->f("w_id"));
                                $w_name = trim($msql->f("w_name"));
                                $w_url = trim($msql->f("w_url"));
                                $w_sort = trim($msql->f("w_sort"));
                                $Views = trim($msql->f("w_views"));
                                $w_pic = trim($msql->f("w_pic"));
                                $w_ext = trim($msql->f("w_ext"));
                                $SelectColor = '';
                                ?>
                                <tr>
                                    <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font
                                                color="#993300"><?php echo $num?></font></font></td>
                                    <td height="18" bgcolor="F1F0F1"><img
                                            src='../../folder/comatepic/<?php echo  $w_pic ?>.<?php echo $w_ext ?>'
                                            name='Pic' width="100" height="25"></td>
                                    <td height="18" bgcolor="F1F0F1">&nbsp;<a href="http://<?php echo  $w_url ?>"
                                                                              target="_blank"><?php echo $w_name?></a>
                                    </td>
                                    <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo $w_sort ?></td>
                                    <td height="18" bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="Comate_ModiPic.php?w_id=<?php echo $w_id?>&class_id=<?php echo $w_classid ?>">修改图片</a>/<a
                                                href="Comate_picview.php?w_id=<?php echo $w_id?>" target="_blank">显示</a>
                                        </div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><font
                                                color="<?php echo $SelectColor ?>"><?php echo $Views?></font></div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="Comate_modi.php?w_id=<?php echo $w_id?>&class_id=<?php echo $w_classid ?>"><font
                                                    size="2">修改</font></a></div>
                                    </td>
                                    <td bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="Comate_del.php?w_id=<?php echo $w_id?>&class_id=<?php echo $w_classid ?>">
                                                删除</a></div>
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
                                $page_size = 25;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                if (empty($l_classid)) {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Comate_list.php?pageno=", 2);
                                } else {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Comate_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                <?php } else { ?>
                    <table width="770" height="69" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td bgcolor="#FFFFFF">
                                <div align="center"><a href="#">暂无内容，请点击右上方添加文字添加相关内容</a></div>
                            </td>
                        </tr>
                    </table>
                <?php } ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

 
 