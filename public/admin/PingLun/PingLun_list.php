<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime2.php");
$l_classid='';
$PingLunList="SELECT z_comments.l_id, z_user.Meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_comments.l_productid, z_comments.l_title, z_comments.l_detail, z_comments.l_time, z_comments.l_views, z_user.Photo
FROM z_user INNER JOIN z_comments ON z_user.Meid = z_comments.l_userid order by z_comments.l_time desc";
//$msql->query("select * from (".$PingLunList.") as table where 1=1 order by l_time desc");
$msql->query($PingLunList);

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>用户评论列表</title></head>
</html>
<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#999999">
            <td height="1" valign="top"></td>
        </tr>
        <tr bgcolor="#E4E4E4">
            <td height="230" valign="top">
                <table width="700" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td width="135" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">用户评论列表</font></td>
                        <form name="form1" method="post" action="PingLun_list.php">
                            <td width="562" bgcolor="#FFFFFF">&nbsp;</td>
                        </form>
                    </tr>
                    <tr>
                        <td height="1" bgcolor="#A24E12"></td>
                        <td height="1" bgcolor="#009999"></td>
                    </tr>
                </table>
                <?php if ($msql->num_rows() > 0) { ?>
                    <table width="700" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="15" colspan="10">
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
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "PingLun_list.php?pageno=", 2);
                                    } else {
                                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "PingLun_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                    }
                                    ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="41" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font>
                            </td>
                            <td width="407" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">评论标题</font></td>
                            <td width="123" bgcolor="#999999">&nbsp;<font color="#FFFFFF">用户名称</font></td>
                            <td width="55" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">状态</font></div>
                            </td>
                            <td width="34" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">修改</font></div>
                            </td>
                            <td width="33" bgcolor="#999999">
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
                                $UserName = trim($msql->f("UserName"));
                                $l_title = trim($msql->f("l_title"));
                                $l_time = trim($msql->f("l_time"));
                                $l_views = trim($msql->f("l_views"));
                                $SelectColor = $l_views == "不显示" ? "#ff0000" : "#000000";

                                ?>
                                <tr>
                                    <td valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#993300"><?php echo $num?> 、</font></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a
                                            href="PingLun_Detail.php?l_id=<?php echo $l_id ?>&l_classid=<?php echo  $l_classid ?>"><font
                                                color="#990000"><?php echo $l_title?></font></a> <font
                                            color="#666666">
                                            <?php echo $l_time ?></font></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo $UserName ?></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">
                                        <div align="center"><font
                                                color="<?php echo $SelectColor ?>"><?php echo $l_views?></font></div>
                                    </td>
                                    <td valign="bottom" bgcolor="F1F0F1">
                                        <div align="center">
                                            <div align="center"><a
                                                    href="PingLun_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>"><font
                                                        size="2">修改</font></a></div>
                                            <a href="PingLun_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>"><font
                                                    size="2"></font></a></div>
                                    </td>
                                    <td valign="bottom" bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="PingLun_del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>">
                                                删除</a></div>
                                    </td>
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
                        <tr>
                            <td height="21" colspan="10" valign="top">
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
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "PingLun_list.php?pageno=", 2);
                                } else {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "PingLun_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                <?php } else { ?>
                    <table width="700" height="69" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td bgcolor="#FFFFFF">
                                <div align="center">暂无内容</div>
                            </td>
                        </tr>
                    </table>
                <?php } ?>      </td>
        </tr>
    </table>
</div>
</body>
</html>


 
 