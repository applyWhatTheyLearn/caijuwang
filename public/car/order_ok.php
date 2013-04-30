<?php
include("../include/common.inc.php");
session_start();
$z_orderid = trim($_REQUEST["z_orderid"]);
$OrderDetail = "SELECT z_user.Meid, z_user.Cnum, z_user.UserName, z_order.* FROM z_user INNER JOIN z_order ON z_user.Meid = z_order.l_userid";

$msql->query("select * from (" . $OrderDetail . ") t  where t.l_id=" . $z_orderid);
if ($msql->next_record()) {
    $l_orderform = trim($msql->f("l_orderform")); //订单号
    $l_username = trim($msql->f("UserName")); //会员id
    $l_detail = trim($msql->f("l_detail")); //商品信息
    $l_price = trim($msql->f("l_price")); //总价格
    $l_consignee = trim($msql->f("l_consignee")); //收货人
    $l_sex = trim($msql->f("l_sex")); //性别
    $l_address = trim($msql->f("l_address")); //地址ַ
    $l_phone = trim($msql->f("l_phone")); //固定电话
    $l_mobile = trim($msql->f("l_mobile")); //移动电话
    $l_postcode = trim($msql->f("l_postcode")); //邮政编码
    $l_email = trim($msql->f("l_email")); //email
    $l_deliver = trim($msql->f("l_deliver")); //送货方式
    $l_payment = trim($msql->f("l_payment")); //付款方式
    $l_invoice = trim($msql->f("l_invoice")); //发票抬头
    $l_place = trim($msql->f("l_place")); //路径信息
    $l_ordertime = trim($msql->f("l_ordertime")); //订购时间
    $l_takeffectime = trim($msql->f("l_takeffectime")); //生效时间
    $l_orderstatu = trim($msql->f("l_orderstatu")); //订单状态

}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>订购成功信息</title>
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
    <script language="javascript">
        function closewindow() {
//setTimeout("window.close()",5000)
//parent.opener.viewpinming(a,b,c);
//alert(cid);
            window.close()
        }
    </script>
</head>

<body>
<div align="center">
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_top scrolling="no" src=../include/top.php
                        style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="762" valign="top">
                <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
                    <tr>
                        <td height="32">&nbsp;&nbsp;首页：&gt; 订购成功</td>
                    </tr>
                </table>
                <table width="760" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="6"></td>
                    </tr>
                </table>

                <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">

                    <tr>
                        <td width="25" height="16">&nbsp;</td>
                        <td height="16">&nbsp;</td>
                        <td width="608">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="20">&nbsp;</td>
                        <td height="20" bgcolor="#996600">&nbsp;<font color="#FFFFFF">已订购商品信息</font></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="1"></td>
                        <td height="1" colspan="2" background="../images/pic_4_9.gif"></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td height="16" colspan="2"><?php echo  $l_detail ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="1"></td>
                        <td height="1" colspan="2" bgcolor="#FF6600"></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;订单号：</font>
                        </td>
                        <td><font color=#ff0000><?php echo  $l_orderform?></font></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;收货人名称：</font>
                        </td>
                        <td><?php echo  $l_consignee?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;性别：</font>
                        </td>
                        <td><?php echo  $l_sex ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;送货地址：</font>
                        </td>
                        <td><?php echo  $l_address?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td valign="top" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font
                                size="2">&nbsp;路经信息：</font></td>
                        <td><?php echo  $l_place?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6">&nbsp;<font
                                color="#000000" size="2">邮政编码：</font></td>
                        <td><?php echo  $l_postcode?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;固定电话：</font>
                        </td>
                        <td><?php echo  $l_phone?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;移动电话：</font>
                        </td>
                        <td><?php echo  $l_mobile ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;Email：</font>
                        </td>
                        <td><?php echo  $l_email?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;送货方式：</font>
                        </td>
                        <td><?php echo  $l_deliver ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;付款方式：</font>
                        </td>
                        <td><?php echo  $l_payment ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;发票抬头：</font>
                        </td>
                        <td><?php echo  $l_invoice ?></td>
                    </tr>
                    <tr>
                        <td height="16">&nbsp;</td>
                        <td height="16">&nbsp;</td>
                        <td height="16">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="1"></td>
                        <td height="1" colspan="2" bgcolor="#FF9900"></td>
                    </tr>

                    <tr>
                        <td height="16">&nbsp;</td>
                        <td height="16">&nbsp;</td>
                        <td height="16">&nbsp;</td>
                    </tr>
                </table>

                <table width="760" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="6" colspan="2"></td>
                    </tr>
                </table>
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

