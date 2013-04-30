<?php
include("../include/common.inc.php");
session_start();
$UserLoginUserID= isset($_SESSION["UserLoginUserID"])?$_SESSION["UserLoginUserID"]:'';
$UserName= isset($_SESSION["UserLoginUserName"])?$_SESSION["UserLoginUserName"]:'';
$UserLoginStatu= isset($_SESSION["UserLoginStatu"])?$_SESSION["UserLoginStatu"]:'';
$UserPass=isset($_SESSION["UserLoginUserNamePass"] )?$_SESSION["UserLoginUserNamePass"]:'';
	 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>评论信息</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {color: #0000FF}
-->
</style>

<script language="javascript">
function CheckForm (frm)
{

	if (frm.title.value.length==0)
	{
		frm.title.focus();
		frm.title.select();
		alert ("留言标题不能为空！");
		return false;

	}	

	if (frm.l_e_mail.value.search("@")<=0)
	{
		frm.l_e_mail.focus();
		frm.l_e_mail.select();
		alert ("不是合法的email地址，请务必准确填写，\n 以便我们能够与您联系。");
		return false;

	}		

}
</script>
</head>

<body onLoad="parent.window.document.all.ProductInfoExt.height=document.body.scrollHeight">
<?php

$l_id = trim($_REQUEST["l_id"]);
$PingLunList = "SELECT z_comments.l_id, z_user.Meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_comments.l_productid, z_comments.l_title, z_comments.l_detail, z_comments.l_time, z_comments.l_views, z_user.Photo
FROM z_user INNER JOIN z_comments ON z_user.Meid = z_comments.l_userid order by z_comments.l_time desc";
$msql->query("select * from  (".$PingLunList.") as t where t.l_productid=" . $l_id . " and t.l_views='显示' order by t.l_time desc");

while ($msql->next_record()) {
    $userid = trim($msql->f("meid"));
    $NickName = trim($msql->f("NickName"));
    $UserName = trim($msql->f("UserName"));
    $l_title = trim($msql->f("l_title"));
    $l_detail = trim($msql->f("l_detail"));
    $l_time = trim($msql->f("l_time"));
    $photo = trim($msql->f("photo"));
    ?>
<table width="760" border="0" cellpadding="0" cellspacing="2" >
  <tr>
    <td width="18" height="23">&nbsp;</td>
    <td width="152" rowspan="4" valign="top"><img src='../folder/pic/<?php echo $photo ?>' name='<?php echo  $w_name ?>' width="90" border="0"><br>
      <font color="404040">昵称：<?php echo $NickName ?><br>
      姓名：<?php echo $UserName ?></font></td>
    <td width="582"><span class="STYLE1"><?php echo $l_title ?></span></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td height="1" background="../images/pic_4_9.gif"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><span style="line-height: 130%"><font color="404040">发表日期:<?php echo $l_time?><br>
    <?php echo $l_detail ?></font></span></td>
  </tr>
  
  <tr>
    <td height="27" valign="top">&nbsp;</td>
    <td height="27"><div align="right"></div></td>
  </tr>
  <tr>
    <td height="1" valign="top"></td>
    <td height="1" colspan="2" valign="top" bgcolor="#CCCCCC"></td>
  </tr>
</table>
<table width="760" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="6"></td>
  </tr>
</table>


<?php

}



?>

  <table width="760" border="0" cellpadding="0" cellspacing="1" >
  <form name="form1" method="post" action="pinglun_submit.php"  onSubmit="return CheckForm(this);">
    <tr>
      <td width="18" height="26">&nbsp;</td>
      <td colspan="2" bgcolor="#FF9900">&nbsp;<strong><font color="#FFFFFF">我要留言</font></strong></td>
    </tr>
    <tr>
      <td height="26" valign="top">&nbsp;</td>
      <td width="112" bgcolor="#FF9900">&nbsp;<font color="#FFFFFF">留言标题:</font></td>
      <td width="626" height="26" bgcolor="#FF9900">&nbsp;<input name="title" type="text" id="title" size="58" maxlength="50"></td>
    </tr>
    <tr>
      <td height="18" valign="top">&nbsp;</td>
      <td rowspan="2" valign="top" bgcolor="#FF9900">&nbsp;<font color="#FFFFFF">留言内容:</font></td>
      <td height="18" valign="top" bgcolor="#FF9900">&nbsp;<textarea name="detail" cols="70" rows="5" id="detail"></textarea></td>
    </tr>
    <tr>
      <td height="29" valign="top">&nbsp;</td>
      <td height="29" bgcolor="#FF9900">&nbsp;<input name="button" type="submit" class="liuyansub" id="button" value="[ 提 交 ]">
      <input type="hidden" name="userID" id="userID" value="<?php echo $UserLoginUserID ?>">
      <input type="hidden" name="l_id" id="l_id" value="<?php echo $l_id ?>">
      <input type="hidden" name="userPass" id="userPass" value="<?php echo $UserPass ?>">
      <input type="hidden" name="userName" id="userName" value="<?php echo $UserName ?>">      </td>
    </tr>
    </form>
</table>

</body>
</html>
