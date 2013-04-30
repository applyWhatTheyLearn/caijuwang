<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$l_classid = trim($_REQUEST["l_classid"]);
$l_id = trim($_REQUEST["l_id"]);
$PingLunList = "SELECT z_comments.l_id, z_user.Meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_comments.l_productid, z_comments.l_title, z_comments.l_detail, z_comments.l_time, z_comments.l_views, z_user.Photo
FROM z_user INNER JOIN z_comments ON z_user.Meid = z_comments.l_userid";
$msql->query("select * from  (".$PingLunList.") as t where t.l_id=" . $l_id);
if ($msql->next_record()) {
    $l_title = trim($msql->f("l_title"));
    $l_detail = trim($msql->f("l_detail"));
    $l_views = trim($msql->f("l_views"));
    $l_time = trim($msql->f("l_time"));
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>评论信息</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>
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
      <td height="246" valign="top" bgcolor="#E4E4E4">
          <form action="Visa_Add_Submit.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">评论信息</font></td>
                <td width="522" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="73" bgcolor="#FFFFFF"><div align="center"><a href="PingLun_list.php?l_classid=<?php echo  $l_classid ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1">&nbsp;提交时间<font size="2">：</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><?php echo $l_time ?></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1">&nbsp;评论标题<font size="2">：</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><font color="#990000"><?php echo $l_title ?></font></td>
              </tr>
              <tr>
                <td height="26" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;详细内容：</font></td>
                <td height="26" colspan="2" valign="top" bgcolor="F1F0F1"><?php echo $l_detail ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_views ?></td>
              </tr>
              
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="返回前页" onClick="location='PingLun_list.php?l_classid=<?php echo  $l_classid ?>'"></td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
        </form>        </td>
    </tr>
  </table>
</body>
</html>

