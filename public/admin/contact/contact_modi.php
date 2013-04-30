<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$msql->query("select * from z_contact");
if ($msql->next_record()) {
    $w_id = trim($msql->f("w_id"));
    $w_company = trim($msql->f("w_company"));
    $w_company_e = trim($msql->f("w_company_e"));
    $address = trim($msql->f("w_address"));
    $address_e = trim($msql->f("w_address_e"));
    $tel = trim($msql->f("w_tel"));
    $tel_e = trim($msql->f("w_tel_e"));
    $postcode = trim($msql->f("w_postcode"));
    $fax = trim($msql->f("w_fax"));
    $email = trim($msql->f("w_email"));
    $w_views = trim($msql->f("w_views"));
    $qq = trim($msql->f("w_qq"));
    $msn = trim($msql->f("w_msn"));
    $open_time = trim($msql->f("w_open_time"));
    $w_detail = trim($msql->f("w_detail"));
    $w_detail_e = trim($msql->f("w_detail_e"));
    $View1 = $w_views == "显示" ? "checked" : "";
    $View2 = $w_views == "不显示" ? "checked" : "";
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>公司信息</title>
    <script type="text/javascript" src="../../ueditor/editor_config.js"></script>
    <script type="text/javascript" src="../../ueditor/editor_all.js"></script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="246" valign="top">
            <form action="contact_modi_sub.php" method="post" name="sample" id="sample">
                <table width="770" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">公司信息</font></td>
                        <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                        <td width="107" bgcolor="#FFFFFF">
                            <div align="center"></div>
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
                    <tr>
                        <td bgcolor="F1F0F1"><font size="2">&nbsp;公司名称：</font></td>
                        <td height="22" colspan="2" bgcolor="F1F0F1"><font size="2">
                                <input name="w_company" type="text" id="w_company" value="<?php echo $w_company?>"
                                       size="30" maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="#99CCFF"><font size="2">&nbsp;公司名称:</font></td>
                        <td colspan="2" bgcolor="F1F0F1"><font size="2">
                                <input name="w_company_e" type="text" id="w_company_e" value="<?php echo $w_company_e?>"
                                       size="30" maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;公司地址（英文）：</font></td>
                        <td colspan="2" bgcolor="F1F0F1"><font size="2">
                                <input name="address" type="text" id="address" value="<?php echo $address ?>" size="50"
                                       maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="6" valign="top" bgcolor="#99CCFF"><font size="2">&nbsp;公司地址（英文）：</font></td>
                        <td height="6" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                                <input name="address_e" type="text" id="address_e" value="<?php echo $address_e ?>"
                                       size="50" maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="6" valign="top" bgcolor="F1F0F1">&nbsp;联系电话<font size="2">：</font></td>
                        <td height="6" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                                <input name="tel" type="text" id="tel" value="<?php echo $tel ?>" size="50"
                                       maxlength="30">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="3" valign="top" bgcolor="#99CCFF"><font size="2">&nbsp;联系电话（英文）：</font></td>
                        <td height="3" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                                <input name="tel_e" type="text" id="tel_e" value="<?php echo $tel_e ?>" size="50"
                                       maxlength="30">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="3" valign="top" bgcolor="F1F0F1">&nbsp;邮政编码</td>
                        <td height="3" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                                <input name="postcode" type="text" id="postcode" value="<?php echo $postcode ?>"
                                       size="20" maxlength="6">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="1" valign="top" bgcolor="F1F0F1">&nbsp;传真</td>
                        <td height="1" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                                <input name="fax" type="text" id="fax" value="<?php echo $fax ?>" size="50"
                                       maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="14" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;Email：</font></td>
                        <td height="14" colspan="2" valign="top" bgcolor="F1F0F1">
                            <font size="2">
                                <input name="email" type="text" id="email" value="<?php echo $email ?>" size="50"
                                       maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="24" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;QQ：</font></td>
                        <td height="24" colspan="2" bgcolor="F1F0F1"><font size="2">
                                <input name="qq" type="text" id="qq" value="<?php echo $qq ?>" size="50" maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="24" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;MSN：</font></td>
                        <td height="24" colspan="2" bgcolor="F1F0F1"><font size="2">
                                <input name="msn" type="text" id="msn" value="<?php echo $msn?>" size="50"
                                       maxlength="100">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="22" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;办公时间：</font></td>
                        <td height="22" colspan="2" bgcolor="F1F0F1"><font size="2">
                                <input name="open_time" type="text" id="open_time" value="<?php echo $open_time ?>"
                                       size="50" maxlength="50">
                            </font></td>
                    </tr>
                    <tr>
                        <td height="46" valign="top" bgcolor="F1F0F1">&nbsp;内容<font size="2">：</font></td>
                        <td height="46" colspan="2" bgcolor="F1F0F1">
                            <textarea name="w_detail" id="w_detail"><?php echo $w_detail ?></textarea>
                            <script type="text/javascript">
                                var editor = new UE.ui.Editor();
                                editor.render("w_detail");
                                //1.2.4以后可以使用一下代码实例化编辑器
                                //UE.getEditor('myEditor')
                            </script>

                    </tr>
                    <tr>
                        <td height="46" valign="top" bgcolor="#99CCFF">&nbsp;内容<font size="2">（英文</font><font
                                size="2">：</font></td>
                        <td height="46" colspan="2" bgcolor="F1F0F1">
                            <textarea name="w_detail_e" id="w_detail_e"><?php echo $w_detail_e ?></textarea>
                            <script type="text/javascript">
                                var editor = new UE.ui.Editor();
                                editor.render("w_detail_e");
                                //1.2.4以后可以使用一下代码实例化编辑器
                                //UE.getEditor('myEditor')
                            </script>

                        </td>
                    </tr>
                    <tr>
                        <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                        <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                            <input name="w_id" type="hidden" value="<?php echo $w_id?>"></td>
                    </tr>
                    <tr>
                        <td height="21" colspan="3" valign="top">&nbsp;</td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>

</body>
</html>

 