
<?php

	'l_id=trim($_REQUEST["l_id"))
	$_REQUEST[
	Search = "select top 18 * from z_product where l_views='显示' order by l_sort desc "
	$msql->query($Search);

	
		 
'?>
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
<?php if($msql->next_record()){?>
<table width="100%" height="42" border="0" cellpadding="0" cellspacing="0" class="TableLineColor">
  <tr>
    <td height="24" background="../images/pic_4_6.gif">&nbsp;&nbsp;&nbsp;<strong><font color="#333333">��Ʒչʾ</font></strong></td>
  </tr>
  <tr>
      <td height="18"><?php
		    i=1
			echo "<table width=100% border=0 cellspacing=0 cellpadding=0>"
			while($msql->next_record()){
			echo "<Tr>"
			   while (i<=9)
				 l_id=trim($msql->f("l_id"))
				 l_name=trim($msql->f("l_name"))
				 l_price1=trim($msql->f("l_price1"))
				 l_price2=trim($msql->f("l_price2"))
				 search1="select top 1 * from z_productpic where l_productid=".$l_id." and l_views='显示'"
				 set rs1=$msql->query (search1)
				 if next_record()) {
				 product_pic="<img src=../folder/product/"&trim(rs1(2))&"."&trim(rs1(3))&" width=82 height=82  class=picborder>"
				 else
				 product_pic="<img src=../images/pic_4_12.gif width=82 height=82 class=picborder>"
				 }
				 rs1.close
				 'set rs1=nothing	
				 		   
	             aa="90"
				 echo "<td width="&aa&" height=150 valign=middle align=center>"
				 echo "<a href=../product/product_detail.php?l_id="&l_id &" target=_parent>"
				 'echo "<img src='../folder/fittings/"&trim($msql->f("l_pic"))&"."&trim($msql->f("l_ext"))&"' width=80  class=picborder>"
				 echo product_pic
				 echo "</a>"
				 echo "<br>"
				 echo "<font color=#404040>"&left(l_name,8)&"</font>"
				 echo "<br>"
				 response.Write "<font color=#404040 size=1>��</font><font color=#ff0000>"&l_price2&"</font>"
				 'echo "<table width=108 border=0 cellspacing=0 cellpadding=0>"
				 'echo "<tr>"
				 'echo "<td height=34 align=center><font color=#404040 size=2>"&left(l_name,8)&"<br>ԭ��: "
				 'echo ""&l_price1&""
				 'echo "Ԫ</font><font size=2><br><font color=#404040>�ּ�: <font color=#ff0000>"
				 'echo ""&l_price2&"</font>"
				 'echo " Ԫ</font></font>"
				 'echo "<br>l_id="&l_id
				 'echo "</td>"
				 'echo "</tr>"
			 	 'echo "</table>"
				 response.Write "</td>"
				 i=i+1

				 if rs.eof {
	                exit do
	             }
				 wend
				 
			 if i>2 {
		      i=1
             }

			}
			echo "</Tr>"
			echo "</table>"
			Rs.close
			set Rs=nothing
			
			
			  ?>      </td>
  </tr>
</table>
<p>
  <?php } ?>
</p>
</body>
</html>
