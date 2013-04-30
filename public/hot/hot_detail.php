<?php
    include("../include/common.inc.php");
	$l_id=trim($_REQUEST["l_id"]);
	$msql->query("select * from z_hot where l_id=".$l_id);
if($msql->next_record()){
    $l_id=trim($msql->f("l_id"));
    $l_title=trim($msql->f("l_title"));
    $l_detail=trim($msql->f("l_detail"));
    $l_time=trim($msql->f("l_time"));
}

		 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>促销详细内容</title>
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
      <td><iframe frameborder=0 name=window_top id="topiframe" scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;首页：&gt; <a href="hot_list.php"><font color="#000000">热门促销</font></a> &gt; 促销详细内容 </td>
        </tr>
      </table>
	    <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
	    <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
     
          <tr>
            <td width="25" height="27">&nbsp;</td>
            <td width="727"><strong><font color="#009900"><?php echo $l_title ?></font></strong></td>
          </tr>
          <tr>
            <td height="1" valign="top"></td>
            <td height="1" valign="top" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="56" valign="top">&nbsp;</td>
            <td height="56" valign="top"><p style="line-height: 130%"><font color="404040">发布于：<?php echo $l_time ?><br>
            <?php echo $l_detail ?></font></td>
          </tr>
        </table>
        
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
		</td>
      <td width="222" align="right" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php  style=WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
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
