<?php
include("../include/common.inc.php");
include("../_inc/func.php");
session_start();
$GetTempNum1=isset($_REQUEST["GetTempNum1"])?trim($_REQUEST["GetTempNum1"]):'';
	ChackTimeOut($GetTempNum1);
	$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
	$UserName=isset($_SESSION["UserLoginUserName"])?trim($_SESSION["UserLoginUserName"]):'';
	$UserPass=isset($_SESSION["UserLoginUserNamePass"])?trim($_SESSION["UserLoginUserNamePass"]):'';

    $msql->query("select * from z_car where l_tempnum='".$GetTempNum1."'");
	if($msql->num_rows()==0){
	?>
		<script language="JavaScript">{
		history.back();
		alert ("购物车是空的!您未选择商品!");
		}
		</script>
	<?php
	}
    $msql->query("select * from z_user where UserName='".$UserName."' and UserPass='".$UserPass."'");
	if($msql->next_record()){
	    header("Location:orderInfo.php?GetTempNum1=". $GetTempNum1);
        exit;
	}
	
	$st=isset($_REQUEST["st"])?trim($_REQUEST["st"]):'';
	$loginStatu="";
	if ($st=="2") {
	$loginStatu="<strong><font color=#FF0000>出错啦！查查用户名或密码!</font></strong>";
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>选择登陆状态</title>
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
      <td><iframe frameborder=0 name=window_top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;首页：&gt; 选择登陆状态</td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6"></td>
          </tr>
        </table>

        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <form name="form1" method="post" action="user_login_check$_REQUEST[">
          <tr>
            <td height="16">&nbsp;</td>
            <td height="16">&nbsp;</td>
            <td>&nbsp;<?php echo( $loginStatu); ?></td>
          </tr>
          <tr>
            <td width="25" height="21">&nbsp;</td>
            <td width="38" height="21"><strong>A: </strong></td>
            <td>&nbsp;已经注册</td>
          </tr>
          <tr>
            <td height="1" valign="top"></td>
            <td height="1" colspan="2" valign="top" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td height="27">&nbsp;</td>
            <td height="27">&nbsp;登陆名称:
              <input name="UserName" type="text" id="UserName" size="30" maxlength="20" />
            <font color="#FF0000">*</font></td>
          </tr>
          <tr>
            <td height="29">&nbsp;</td>
            <td height="29">&nbsp;</td>
            <td height="29">&nbsp;登陆密码:
              <input name="UserPass" type="password" id="UserPass" size="33" maxlength="20" />
            <font color="#FF0000">*</font></td>
          </tr>
          <tr>
            <td height="33">&nbsp;</td>
            <td height="33">&nbsp;</td>
            <td height="33">
              <input name="button" type="submit" class="loginBottom" id="button" value="登陆我的商城">
              <input name="GetTempNum1" type="hidden" id="GetTempNum1" value="<?php echo( $GetTempNum1); ?>"></td>
          </tr>
          </form>
          <tr>
            <td height="1"></td>
            <td height="1" colspan="2" bgcolor="#FF9900"></td>
          </tr>
          <tr>
            <td height="26">&nbsp;</td>
            <td height="26">
              <strong>B:</strong> </td>
            <td height="26">&nbsp;还未注册</td>
          </tr>
          <tr>
            <td height="1" valign="top"></td>
            <td height="1" colspan="2" valign="top" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td height="27">&nbsp;</td>
            <td height="27">
            <input name="button2" type="button" class="regbottom" id="button2" value="注册新用户" onClick="location='user_reg.php?GetTempNum1=<?php echo( $GetTempNum1); ?>'"></td>
          </tr>
          <tr>
            <td height="16">&nbsp;</td>
            <td height="16">&nbsp;</td>
            <td height="16">&nbsp;</td>
          </tr>
          <tr>
            <td height="16">&nbsp;</td>
            <td height="16">&nbsp;</td>
            <td height="16"><input name="button3" type="button" class="carext" id="button3" value="返回购物车" onClick="location='car.php'"></td>
          </tr>
          <tr>
            <td height="114" valign="top">&nbsp;</td>
            <td height="114" valign="top">&nbsp;</td>
            <td height="114" valign="top">&nbsp;</td>
          </tr>
        </table>
        
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
		</td>
      <td width="222" align="right" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php  style="WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
    <tr>
      <td height="6" colspan="2"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_bottom scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
