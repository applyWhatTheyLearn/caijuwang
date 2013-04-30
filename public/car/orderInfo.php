<?php
include("../include/common.inc.php");
session_start();
$GetTempNum1 = isset($_REQUEST["GetTempNum1"]) ? trim($_REQUEST["GetTempNum1"]) : '';
if (strlen($GetTempNum1) == 0) {
    $GetTempNum1 = trim($_GET["GetTempNum1"]);
}
//echo("GetTempNum1=" . $GetTempNum1 . "<br>");
$UserLoginStatu = isset($_SESSION["UserLoginStatu"]) ? trim($_SESSION["UserLoginStatu"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
if (strlen($UserLoginStatu) == 0 || $UserLoginStatu <> "login") {
    header("Location:SelectStatu.php?GetTempNum1=" . $GetTempNum1);
}

//    提取购物信息
$carList = "SELECT z_car.l_id, z_car.l_productid, z_car.l_num, z_car.l_datetime, z_car.l_tempnum, z_product.l_fid, z_product.l_classid, z_product.l_name, z_product.l_price1, z_product.l_price2, z_car.l_extprice1, z_car.l_extprice2
FROM z_car INNER JOIN z_product ON z_car.l_productid = z_product.l_id";

$msql->query("select * from (" . $carList . ") as tb where l_tempnum='" . $GetTempNum1 . "'");
$num1 = 1;
$orderinfolist = "";
$sumprice1 = 0;
while ($msql->next_record()) {
    $car_id = trim($msql->f("l_id"));
    $l_productid = trim($msql->f("l_productid"));
    $l_num = trim($msql->f("l_num"));
    $l_name = trim($msql->f("l_name"));
    $l_price2 = trim($msql->f("l_price2"));
    $l_extprice2 = trim($msql->f("l_extprice2"));
    $carExtList = "SELECT z_car.l_productid, z_carext.l_id, z_carext.l_carid, z_carext.l_fittingid, z_carext.l_num, z_carext.l_datetime, z_product.l_name, z_fittings_pic.l_pjid, z_fittings_pic.l_price1, z_fittings_pic.l_price2, z_fittings_pic.l_pic, z_fittings_pic.l_ext, z_fittings_pic.l_views
FROM (z_car INNER JOIN z_product ON z_car.l_productid = z_product.l_id) INNER JOIN (z_carext INNER JOIN z_fittings_pic ON z_carext.l_fittingid = z_fittings_pic.l_id) ON z_car.l_id = z_carext.l_carid";
    $fsql->query("select * from (" . $carExtList . ") as tb where l_carid=" . $car_id);
    $num2 = 1;
    $orderExtinfolist = "";
    $sumprice2 = 0;
    while ($fsql->next_record()) {
        $l_extid = trim($fsql->f("l_id"));
        $l_num1 = trim($fsql->f("l_num"));
        $l_name1 = trim($fsql->f("l_name"));
        $l_price2_1 = trim($fsql->f("l_price2"));

        $orderExtinfolist = $orderExtinfolist . ".nbsp;&nbsp;&nbsp;&nbsp;<font color=#666666>" . $num1 . "." . $num2 . "、> " . $l_name1 . ":" & "单价:" . $l_price2_1 . "元 " . $l_num1 . " 件 共: <font color=#ff0000>" & $l_price2_1 * $l_num1 . "</font>元</font>" . "<br>";
        $sumprice2 = $sumprice2 + ($l_price2_1 * $l_num1);
        $num2 = $num2 + 1;
    }
    $orderinfolist = $orderinfolist . $num1 . "、> " . $l_name . ":" . "单价:" . $l_price2 . "元 " . $l_num . "  件 共: <font color=#ff0000>" . $l_price2 * $l_num . "</font>元" & "<br>" . $orderExtinfolist;
    $sumprice1 = $sumprice1 + ($l_price2 * $l_num);
    $num1 = $num1 + 1;

}


$AllPirce = $sumprice1 + $sumprice2;
$orderinfolist = $orderinfolist . "<br><hr align=left width=200 size=1 ><br>" . "总价格:<strong><font color=#ff0000>" . $AllPirce . "</font></strong>";

//    '提取会员信息
$msql->query("select * from z_user where Meid=" . $UserLoginUserID);
$msql->next_record();
$Cnum = trim($msql->f("Cnum"));
$shibie = trim($msql->f("shibie"));
$NickName = trim($msql->f("NickName"));
$UserName = trim($msql->f("UserName"));
$sex = trim($msql->f("Sex"));
$UserPass = trim($msql->f("UserPass"));
$UserLevel = trim($msql->f("UserLevel"));
$address = trim($msql->f("Address"));
$postcode = trim($msql->f("PostCode"));
$Tel = trim($msql->f("Tel"));
$Email = trim($msql->f("Email"));
$Msn = trim($msql->f("Msn"));
$QQ = trim($msql->f("QQ"));
$Detail = trim($msql->f("Detail"));
$Views = trim($msql->f("Views"));
$Photo = trim($msql->f("Photo"));
$RegTime = trim($msql->f("RegTime"));
$LastLoginTime = trim($msql->f("LastLoginTime"));
$LoginNum = trim($msql->f("LoginNum"));

    $selected1 =$sex == "男"? "selected":'';
    $selected2 =$sex == "女"? "selected":'';



?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>商品订购信息</title>
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
        <td height="32">&nbsp;&nbsp;首页：&gt; 商品订购信息</td>
    </tr>
</table>
<table width="760" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td height="6"></td>
    </tr>
</table>

<table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">

<tr>
    <td height="16">&nbsp;</td>
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
    <td height="16" colspan="2"><?php echo($orderinfolist); ?></td>
</tr>
<tr>
    <td height="16">&nbsp;</td>
    <td height="16" colspan="2">&nbsp;</td>
</tr>
<tr>
    <td height="1"></td>
    <td height="1" colspan="2" bgcolor="#FF9900"></td>
</tr>
<tr>
    <td height="16">&nbsp;</td>
    <td height="16">&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td height="1"></td>
    <td height="1" colspan="2" background="../images/pic_4_9.gif"></td>
</tr>
<tr>
    <td width="25" height="21">&nbsp;</td>
    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#996600">&nbsp;<font size="2" color="#FFFFFF">会员信息：</font>
    </td>
    <td><font size="2">会员号：</font><font size="2" color="#993300"><?php echo($Cnum); ?></font></td>
</tr>
<tr>
    <td height="1" valign="top"></td>
    <td height="1" colspan="2" valign="top" background="../images/pic_4_9.gif"></td>
</tr>
<tr>
    <td height="23">&nbsp;</td>
    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;用户姓名：</font></td>
    <td><?php echo($UserName); ?></td>
</tr>
<tr>
    <td height="19">&nbsp;</td>
    <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
            &nbsp;性别：</font></td>
    <td><?php echo($sex); ?></td>
</tr>
<tr>
    <td height="21">&nbsp;</td>
    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
            &nbsp;联系地址：</font></td>
    <td><?php echo($address); ?></td>
</tr>
<tr>
    <td height="22">&nbsp;</td>
    <td height="22" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6">&nbsp;<font color="#000000"
                                                                                                       size="2">邮政编码：</font>
    </td>
    <td><font color="#000000" size="2"><?php echo($postcode); ?></font></td>
</tr>
<tr>
    <td height="21">&nbsp;</td>
    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
            &nbsp;联系电话：</font></td>
    <td><?php echo($Tel); ?></td>
</tr>
<tr>
    <td height="21">&nbsp;</td>
    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
            &nbsp;Email：</font></td>
    <td><?php echo($Email); ?></td>
</tr>
<tr>
    <td height="21">&nbsp;</td>
    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
            &nbsp;Msn：</font></td>
    <td><?php echo($Msn); ?></td>
</tr>
<tr>
    <td height="21">&nbsp;</td>
    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
            &nbsp;QQ：</font></td>
    <td><?php echo($QQ); ?></td>
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
<tr>
    <td height="1" valign="top"></td>
    <td height="1" colspan="2" valign="top" background="../images/pic_4_9.gif"></td>
</tr>
<form name="form1" method="post" action="orderSubmit.php">
    <tr>
        <td height="21">&nbsp;</td>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#996600">&nbsp;<font size="2" color="#FFFFFF">送货信息：</font>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td height="1" valign="top"></td>
        <td height="1" colspan="2" valign="top" background="../images/pic_4_9.gif"></td>
    </tr>
    <tr>
        <td height="23">&nbsp;</td>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;收货人名称：</font>
        </td>
        <td><input name="UserName" type="text" class="loginText" id="UserName" value="<?php echo($UserName); ?>"
                   size="30" maxlength="20">
            <font color=#ff0000>*</font></td>
    </tr>
    <tr>
        <td height="19">&nbsp;</td>
        <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">
                &nbsp;性别：</font></td>
        <td><select name="sex" class="loginText" id="sex">
                <option value="男" <?php echo($selected1); ?>>男</option>
                <option value="女" <?php echo($selected2); ?>>女</option>
            </select></td>
    </tr>
    <tr>
        <td height="21">&nbsp;</td>
        <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;送货地址：</font>
        </td>
        <td><input name="address" type="text" class="loginText" id="address" value="<?php echo($address); ?>" size="60"
                   maxlength="50"></td>
    </tr>
    <tr>
        <td height="22">&nbsp;</td>
        <td height="22" valign="top" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font
                size="2">&nbsp;路经信息：</font></td>
        <td><textarea name="l_place" cols="60" rows="3" class="loginText"
                      id="l_place"><?php echo($address); ?></textarea></td>
    </tr>
    <tr>
        <td height="22">&nbsp;</td>
        <td height="22" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6">&nbsp;<font
                color="#000000" size="2">邮政编码</font></td>
        <td><font color="#000000" size="2">
                <input name="postcode" type="text" class="loginText" id="postcode" value="<?php echo($postcode); ?>"
                       size="15" maxlength="6">
            </font></td>
    </tr>
    <tr>
        <td height="21">&nbsp;</td>
        <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;固定电话：</font>
        </td>
        <td><font size="2">
                <input name="l_phone" type="text" class="loginText" id="l_phone" value="<?php echo($Tel); ?>" size="60"
                       maxlength="50">
            </font></td>
    </tr>
    <tr>
        <td height="21">&nbsp;</td>
        <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;移动电话：</font>
        </td>
        <td><input name="l_mobile" type="text" class="loginText" id="l_mobile" size="60" maxlength="50"></td>
    </tr>
    <tr>
        <td height="21">&nbsp;</td>
        <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;Email：</font>
        </td>
        <td><input name="Email" type="text" class="loginText" id="Email2" value="<?php echo($Email); ?>" size="60"
                   maxlength="50"></td>
    </tr>

    <tr>
        <td height="21">&nbsp;</td>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;送货方式：</font>
        </td>
        <td height="21"><INPUT type="radio" CHECKED value="送货上门" name="SongHuoFS">
            送货上门
            <INPUT type="radio" value="预约自提" name="SongHuoFS">
            预约自提
        </td>
    </tr>

    <tr>
        <td height="27">&nbsp;</td>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;付款方式：</font>
        </td>
        <td height="27"><INPUT type="radio" CHECKED value="货到付款" name="FuKuanFS">
            货到付款
            <INPUT type="radio" value="在线支付" name="FuKuanFS">
            在线支付 （暂未开通）
            <INPUT type="radio" value="银行汇款" name="FuKuanFS">
            银行汇款
        </td>
    </tr>
    <tr>
        <td height="27">&nbsp;</td>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;索要发票：</font>
        </td>
        <td height="27"><input type="checkbox" name="fapiao" id="fapiao">
            <input name="l_invoice" type="text" class="loginText" id="Email" size="60" maxlength="50">
            (发票抬头)
        </td>
    </tr>
    <tr>
        <td height="16">&nbsp;</td>
        <td height="16">&nbsp;</td>
        <td height="16">&nbsp;</td>
    </tr>
    <tr>
        <td height="16">&nbsp;</td>
        <td height="16">&nbsp;</td>
        <td height="16"><input name="button2" type="submit" class="regbottom" id="button2" value="现在订购">
            <input name="Cnum" type="hidden" id="Cnum" size="22" maxlength="8" value="<?php echo($Cnum);?>">
            <input name="UserLoginUserID" type="hidden" id="UserLoginUserID" size="22" maxlength="8"
                   value="<?php echo($UserLoginUserID);?>">
            <input name="orderinfolist" type="hidden" id="orderinfolist" size="22" maxlength="8"
                   value="<?php echo($orderinfolist);?>">
            <input name="AllPirce" type="hidden" id="AllPirce" size="22" maxlength="8" value="<?php echo($AllPirce);?>">
            <input name="GetTempNum1" type="hidden" id="GetTempNum1" value="<?php echo($GetTempNum1); ?>"></td>
    </tr>
    <tr>
        <td height="16">&nbsp;</td>
        <td height="16">&nbsp;</td>
        <td height="16"><input name="button3" type="button" class="carext" id="button3" value="返回购物车"
                               onClick="location='car.php'"></td>
    </tr>
    <tr>
        <td height="114" valign="top">&nbsp;</td>
        <td height="114" valign="top">&nbsp;</td>
        <td height="114" valign="top">&nbsp;</td>
    </tr>
</form>
</table>

<table width="760" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td height="6" colspan="2"></td>
    </tr>
</table>
</td>
<td width="222" align="right" valign="top">
    <iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php style="WIDTH:213;Z-INDEX:2"
            target="main"></iframe>
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

