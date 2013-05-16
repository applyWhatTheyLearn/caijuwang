<?php
include("../include/common.inc.php");
	$Search = "select * from z_class where l_fid=0 order by l_tuijian desc ,l_sort ";
    $msql->query($Search);
		 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<script src="subMenu.js"></script>
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
</style>
</head>
<body onLoad="parent.window.document.all.window_left.height=document.body.scrollHeight">
<table width="213" height="115" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6" height="6"></td>
    <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="200" height="6"></td>
    <td width="209"  height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7" height="6"></td>
  </tr>
  <tr>
    <td height="102" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height=100?></td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="37%" height="25" background="../images/pic_4_6.gif">&nbsp;<a href="../myshop/user_index.php" target="_parent"><strong><font color="009900">我的商城</font></strong></a></td>
        <td width="63%" background="../images/pic_4_6.gif">&nbsp;</td>
      </tr>
      <tr>
        <td height="24" colspan="2" valign="bottom">&nbsp;<a href="../myshop/user_collection.php" target="_parent" class="topMenuLink"><strong><font color="#009900">1</font></strong>&nbsp;我的收藏</a></td>
      </tr>
      <tr>
        <td height="1" colspan="2"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <tr>
        <td height="24" colspan="2" valign="bottom">&nbsp;<a href="../myshop/user_order_list.php" target="_parent" class="topMenuLink"><strong><font color="#009900">2</font></strong>&nbsp;订单信息</a></td>
      </tr>
      <tr>
        <td height="1" colspan="2"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <tr>
        <td height="24" colspan="2" valign="bottom">&nbsp;<a href="../myshop/user_modireg.php" target="_parent" class="topMenuLink"><strong><font color="#009900">3</font></strong>&nbsp;注册信息</a></td>
      </tr>
      <tr>
        <td height="1" colspan="2"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <tr>
        <td height="24" colspan="2" valign="bottom">&nbsp;<a href="../myshop/user_pinlun_list.php" target="_parent" class="topMenuLink"><strong><font color="#009900">4</font></strong>&nbsp;我的评论</a></td>
      </tr>
      <tr>
        <td height="1" colspan="2"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <tr>
        <td height="24" colspan="2" valign="bottom">&nbsp;<a href="../myshop/logout.php" target="_parent" class="topMenuLink"><strong><font color="#009900">5</font></strong>&nbsp;退出商城</a></td>
      </tr>
      <tr>
        <td height="1" colspan="2"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
    </table></td>
    <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height=100?></td>
  </tr>
  <tr>
    <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c5.jpg" width="200" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
  </tr>
</table>
<table width="213" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="6"></td>
  </tr>
</table>
<table width="213" height="115" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="6" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6" height="6"></td>
    <td width="200" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="200" height="6"></td>
    <td width="209"  height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7" height="6"></td>
  </tr>
  <tr>
    <td height="102" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height=100?></td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="9%" height="25" background="../images/pic_4_6.gif">&nbsp;<img src="../images/pic_4_7.gif" width="5" height="14"></td>
        <td width="59%" background="../images/pic_4_6.gif"><strong>促销公告</strong></td>
        <td width="32%" background="../images/pic_4_6.gif"><div align="right"><a href="../GongGao/GongGao_list.php" target="_parent"><font color="#333333">more&gt;&gt;</font></a></div></td>
      </tr>
      <?php
	  $Search = "select  * from z_affiche where 1=1 order by l_sort desc limit 9";
	  $msql->query($Search);

	   $num2=1;
	   while($msql->next_record()){
	   $l_id2=trim($msql->f("l_id"));
	   $l_title2=substr(trim($msql->f("l_title")),0,13);
	  ?>
      <tr>
        <td height="24" colspan="3" valign="bottom">&nbsp;<strong><?php echo( $num2); ?></strong>&nbsp;<a href="../GongGao/GongGao_detail.php?l_id=<?php echo( $l_id2); ?>" target="_parent" class="topMenuLink"><?php echo( $l_title2); ?></a></td>
      </tr>
      <tr>
        <td height="1" colspan="3"><div align="center"><img src="../images/pic_4_8.gif" width="182" height="1"></div></td>
      </tr>
      <?php
	   $num2=$num2+1;
       }
	  ?>
    </table></td>
    <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height=100?></td>
  </tr>
  <tr>
    <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c5.jpg" width="200" height="7"></td>
    <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
  </tr>
</table>
<table width="213" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="6"></td>
  </tr>
</table>
</body>
</html>
