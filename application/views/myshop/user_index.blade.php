<?php
include("../include/common.inc.php");
session_start();
$UserLoginStatu = trim($_SESSION["UserLoginStatu"]);
$UserLoginUserID = trim($_SESSION["UserLoginUserID"]);
if (strlen($UserLoginStatu) == 0 || $UserLoginStatu <> "login") {
    header("Location: user_login.php");
    return;
}


$Search = "select * from z_user where Meid=" . $UserLoginUserID . "";
$msql->query($Search);
if ($msql->next_record()) {
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

    if (empty($Photo)) {
        $Photo = "<img src=../images/pic_4_12.gif>";
    } else {
        $Photo = "<img src=../folder/Pic/" . $Photo . ">";
    }
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>我的商城</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="222" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/myshop_left1.php  style="WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
            <td height="32">&nbsp;&nbsp;首页：&gt; 我的商城 </td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
          <tr>
            <td height="27">&nbsp;</td>
            <td>会员ID：</td>
            <td>&nbsp;<font color="#990000"><?php echo( $Cnum); ?></font></td>
            <td>头像：</td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td>用户姓名</td>
            <td><font size="2">&nbsp;<?php echo($UserName);?> </font></td>
            <td width="312" rowspan="5" valign="top"><?php echo( $Photo); ?></td>
          </tr>
          <tr>
            <td width="25" height="27">&nbsp;</td>
            <td width="101">昵称：</td>
            <td width="310">&nbsp;<?php echo( $NickName); ?></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td>注册时间：</td>
            <td>&nbsp;<?php echo( $RegTime);?></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td>最后登陆时间：</td>
            <td>&nbsp;<?php echo( $LastLoginTime);?></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td>登陆次数：</td>
            <td>&nbsp;<?php echo( $LoginNum);?> 次</td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td height="6" colspan="2"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=bottom scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
