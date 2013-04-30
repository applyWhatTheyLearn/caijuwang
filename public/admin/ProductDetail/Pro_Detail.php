<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$l_id = trim($_REQUEST["l_id"]);
$l_classid = trim($_REQUEST["l_classid"]);
$pageno = trim($_REQUEST["pageno"]);

$msql->query("select * from z_product where l_id=" . $l_id);
if ($msql->next_record()) {
    $l_id = trim($msql->f("l_id"));
    $l_name = trim($msql->f("l_name"));
    $l_name_e = trim($msql->f("l_name_e"));
    $l_basic = trim($msql->f("l_basic"));
    $l_basic_e = trim($msql->f("l_basic_e"));
    $l_extend = trim($msql->f("l_extend"));
    $l_extend_e = trim($msql->f("l_extend_e"));
    $l_price1 = trim($msql->f("l_price1"));
    $l_price2 = trim($msql->f("l_price2"));
    $l_num = trim($msql->f("l_num"));
    $l_units = trim($msql->f("l_units"));
    $l_sort = trim($msql->f("l_sort"));
    $l_shuliang = trim($msql->f("l_shuliang"));
    $l_tuijian = trim($msql->f("l_tuijian"));
    $l_views = trim($msql->f("l_views"));
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>商品内容</title>
    <style type="text/css">
        <!--
        .STYLE2 {
            color: #0000FF
        }

        -->
    </style>
</head>
</html>
<html>
<head>
    <script language="javascript">
        function CheckForm(frm) {


            if (frm.l_name.value.length == 0) {
                frm.l_name.focus();
                frm.l_name.select();
                alert("请输入商品名称!");
                return false;

            }


        }
    </script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#999999">
            <td height="1" valign="top"></td>
        </tr>
        <tr bgcolor="#E4E4E4">
            <td height="246" valign="top" bgcolor="#E4E4E4">
                <div align="center">
                    <form action="Pro_Modi_Submit.php" method="post" name="sample" id="sample"
                          onSubmit="return CheckForm(this);">
                        <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
                            <tr>
                                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">商品内容</font></td>
                                <td width="538" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                                <td width="74" bgcolor="#FFFFFF">
                                    <div align="center"><a
                                            href="Pro_list.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">返回前页</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="18" colspan="3">
                                    <div align="right"></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="124" height="1" bgcolor="#999999"></td>
                                <td height="1" colspan="2" bgcolor="#999999"></td>
                            </tr>
                            <?php
                            $msql->query("select * from z_productpic where l_productid=" . $l_id . " order by l_sort desc");
                            $piclist = "";
                            $num = 1;
                            if ($msql->num_rows() > 0) {
                                $opens = "ok";
                            } else {
                                $opens = "";
                            }
                            while ($msql->next_record()) {
                                $l_pic = trim($msql->f("l_pic"));
                                $l_ext = trim($msql->f("l_ext"));
                                $l_title = trim($msql->f("l_title"));
                                $piclist = $piclist . "<a href=../../folder/product/" . $l_pic . "." . $l_ext . " target=_blank><img src=../../folder/product/" . $l_pic . "." . $l_ext . " alt=" . $l_title . " name=qas height=60 border=0></a>&nbsp;";
                                if ($num > 6) {
                                    $piclist = $piclist . "<br>";
                                    $num = 0;
                                }
                                $num = $num + 1;

                            }




                            if ($opens == "ok") {
                                ?>
                                <tr>
                                    <td height="22" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;商品图片：</font></td>
                                    <td colspan="2" valign="top" bgcolor="F1F0F1"><?php echo $piclist ?></td>
                                </tr>
                            <?php }?>
                            <tr>
                                <td height="22" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;商品名称（中文）：</font></td>
                                <td colspan="2" bgcolor="F1F0F1"><?php echo $l_name ?></td>
                            </tr>
                            <tr>
                                <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;基础信息（中文）：</font></td>
                                <td height="23" colspan="2" valign="top" bgcolor="F1F0F1"><?php echo $l_basic ?></td>
                            </tr>
                            <tr>
                                <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;扩展信息（中文）：</font></td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_extend ?></td>
                            </tr>


                            <tr>
                                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;市场价：</font></td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_price1 ?></td>
                            </tr>
                            <tr>
                                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;商城价：</font></td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_price2 ?></td>
                            </tr>
                            <tr>
                                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;单位：</font></td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_units ?></td>
                            </tr>
                            <tr>
                                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;库存数量：</font></td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_num ?></td>
                            </tr>
                            <tr>
                                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;排序状态：</font></td>
                                <td colspan="2" bgcolor="F1F0F1"><?php echo $l_sort ?> </td>
                            </tr>
                            <tr>
                                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">新品推荐</font>：</td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_tuijian ?></td>
                            </tr>
                            <tr>
                                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_views ?></td>
                            </tr>
                            <tr>
                                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3"
                                                                                    value="返回前页"
                                                                                    onClick="location='Pro_list.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>'">
                                </td>
                            </tr>
                            <tr>
                                <td height="21" colspan="3" valign="top">&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

