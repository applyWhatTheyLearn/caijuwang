
<?php
include("../include/common.inc.php");
$l_id=trim($_REQUEST["l_id"]);
$PingLunList="SELECT z_comments.l_id, z_user.Meid, z_user.Cnum, z_user.NickName, z_user.UserName, z_comments.l_productid, z_comments.l_title, z_comments.l_detail, z_comments.l_time, z_comments.l_views, z_user.Photo FROM z_user INNER JOIN z_comments ON z_user.Meid=z_comments.l_userid";
$msql->query("select t.l_id,t.l_title,t.l_detail,t.l_time from (".$PingLunList.") t  where t.l_id=".$l_id);
if($msql->next_record()){
    $l_title=trim($msql->f("l_title"));
    $l_detail=trim($msql->f("l_detail"));
    $l_time=trim($msql->f("l_time"));
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>暂无内容</title>
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
      <td width="223" height="228" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/myshop_left1.php  style="WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
      <td width="761" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
            <td height="32">&nbsp;&nbsp;首页：&gt; <font color="#000000">我的商城</font> &gt; <a href="user_pinlun_list.php"><font color="#000000">评论列表</font></a> &gt; 评论内容 </td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
          <tr>
            <td width="25" height="27">&nbsp;</td>
            <td><strong></strong><font color="#ff3300"><?php echo $l_title ?></font></td>
          </tr>
          <tr>
            <td height="1"></td>
            <td background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td valign="top"><font color="404040">发布于：<?php echo $l_time ?><br>
                  <?php echo $l_detail ?></font></td>
          </tr>
          <tr>
            <td height="5"></td>
            <td height="5"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table></td>
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
