<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$NewOrderList = "SELECT z_user.meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_order.l_id, z_order.l_orderform, z_order.l_price, z_order.l_mobile, z_order.l_ordertime, z_order.l_orderstatu FROM z_user INNER JOIN z_order ON z_user.Meid = z_order.l_userid";
$msql->query("select * from (" . $NewOrderList . ") as tb where l_orderstatu='完成' order by l_ordertime desc");

?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>已完成订单列表</title></head>
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
                        <td width="134" height="21" bgcolor="#FF0000">&nbsp;<font color="#FFFFFF">已完成订单列表</font></td>
                        <form name="form1" method="post" action="Complate_Order_list.php">
                            <td width="471" bgcolor="#FFFFFF">&nbsp;</td>
                            <td width="91" bgcolor="#FFFFFF">&nbsp;</td>
                        </form>
                    </tr>
                    <tr>
                        <td height="1" bgcolor="#A24E12"></td>
                        <td height="1" colspan="2" bgcolor="#009999"></td>
                    </tr>
                </table>
                <?php if ($msql->num_rows() > 0) { ?>
                    <table width="700" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                            <td height="15" colspan="12">
                                <div align="right">
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
                                            $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Complate_Order_list.php?pageno=", 2);
                                        } else {
                                            $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Complate_Order_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                        }


                                        ?>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="41" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font>
                            </td>
                            <td width="85" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">订单号</font></td>
                            <td width="91" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">会员</font></td>
                            <td width="95" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">价格／元</font></td>
                            <td width="164" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">订购时间</font></td>
                            <td width="117" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">移动电话</font></td>
                            <td width="67" bgcolor="#999999">
                                <div align="center"><font color="#FFFFFF">订单状态</font></div>
                            </td>
                            <td width="31" bgcolor="#999999">
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
                                $l_orderform = trim($msql->f("l_orderform"));
                                $l_userid = trim($msql->f("meid"));
                                $l_username = trim($msql->f("UserName"));
                                $l_price = trim($msql->f("l_price"));
                                $l_mobile = trim($msql->f("l_mobile"));
                                $l_ordertime = trim($msql->f("l_ordertime"));
                                $l_orderstatu = trim($msql->f("l_orderstatu"));
                                $l_filename = '';
                                ?>
                                <tr>
                                    <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="#"
                                                                                  title="文件名称：<?php echo  $l_filename ?>"><font
                                                color="#993300"><?php echo $num?>、</font></a></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a
                                            href="New_Order_Detail.php?l_id=<?php echo  $l_id ?>&pageno=<?php echo  $pageno ?>"><font
                                                color="#990000"><?php echo $l_orderform?></font></a></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a
                                            href="Member_Detail.php?meid=<?php echo  $l_userid ?>&pageno=<?php echo  $pageno ?>"><?php echo $l_username?></a>
                                    </td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo $l_price?></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">
                                        &nbsp;<?php echo $l_ordertime?></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo $l_mobile?></td>
                                    <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><?php echo $l_orderstatu?></div></td>
                                    <td valign="bottom" bgcolor="F1F0F1">
                                        <div align="center"><a
                                                href="Complate_Order_del.php?l_id=<?php echo $l_id?>&pageno=<?php echo  $pageno ?>">删除</a>
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
                                $page_size = 25;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                if (empty($l_classid)) {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Complate_Order_list.php?pageno=", 2);
                                } else {
                                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Complate_Order_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                                }


                                ?>
                            </td>
                        </tr>
                    </table>
                <?php } else { ?>
                    <table width="700" height="69" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td bgcolor="#FFFFFF">
                                <div align="center"><a href="#">暂无内容</a></div>
                            </td>
                        </tr>
                    </table>
                <?php } ?>      </td>
        </tr>
    </table>
</div>
</body>
</html>
