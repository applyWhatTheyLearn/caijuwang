<?php
include("../include/common.inc.php");
global $msql;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�ޱ����ĵ�</title>
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

<body onLoad="parent.window.document.all.window_left.height=document.body.scrollHeight">
<table width="208" height="180" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6" height="7"></td>
    <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="195" height="6"></td>
    <td width="209"  height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7" height="7"></td>
  </tr>
  <tr>
    <td height="124" valign="top" background="../images/huikuang_1_r3_c2.jpg">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php
	$Search = "select * from z_comate where w_views='显示' order by w_sort desc limit 6";
    $msql->query($Search);
	 ?>
      <tr>
        <td width="65%" height="22" background="../images/pic_4_6.gif">&nbsp;<strong><font color="#333333">合作伙伴</font></strong></td>
        <td width="35%" background="../images/pic_4_6.gif"><div align="right"><a href="../Comate/Comate_list.php" target="_parent"><font color="#333333">&gt;&gt; more</font></a></div></td>
      </tr>
      <?php
	   $num1=1;
	   while ($msql->next_record()){
		$w_name=substr(trim($msql->f("w_name")),0,13);
		$w_url=trim($msql->f("w_url"));
	  ?>
      <tr>
        <td height="23" colspan="2" valign="bottom">&nbsp;<strong><font color="#333333"><?php echo( $num1); ?>、</font></strong>&nbsp;<a href=http://"<?php echo( $w_url); ?>" target="_blank"><?php echo( $w_name); ?></a></td>
      </tr>
      <tr>
        <td height="1" colspan="2"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <?php
	   $num1=$num1+1;
       }
	  ?>
    </table></td>
    <td valign="top" background="../images/huikuang_1_r3_c7.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c5.jpg" width="195" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
  </tr>
</table>
</body>
</html>
