
<?php
	
	
	GetTempNum1=trim($_REQUEST["l_tempnum"))
	car_id=trim($_REQUEST["car_id"))
	f_id=trim($_REQUEST["f_id"))
	'response.Write("GetTempNum1="&GetTempNum1 &"<br>")
	'response.Write("car_id="&car_id &"<br>")
	'response.Write("f_id="&f_id &"<br>")

	Search = "select * from z_fittings where l_classid="&f_id&" and l_views='显示' order by l_sort desc"
	$msql->query(search)
	fittingsClassName=""
	while($msql->next_record()){
	zl_id=trim($msql->f(0))
	l_name=trim($msql->f(2))
	fittingsClassName=fittingsClassName&"<a href=extinfo.php?l_id="&zl_id&"&f_id="&f_id&"&car_id="&car_id&"&GetTempNum1="&GetTempNum1&"><strong><font color='#0000ff>". $l_name."</font></strong></a> | "

	}
	
	
	
	l_id=trim($_REQUEST["l_id"))
	$_REQUEST[
	if len(l_id)=0 {
	Search = "select * from fittings_list_1 where l_classid="&f_id&" and pic_views='显示' order by pic_sort desc"
	else
	Search = "select * from fittings_list_1 where l_pjid=".$l_id." and pic_views='显示' order by pic_sort desc "
	}
	'response.Write("search="&search &"<br>")
	$msql->query($Search);

	
		 
'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<script src="../order/order.js"></script>
<title>�����Ϣ</title>
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
<body onLoad="parent.window.document.all.ProductInfoExt.height=document.body.scrollHeight">
<table width="984" border="0" cellpadding="0" cellspacing="2">
  <tr>
    <td height="32">&nbsp;<font color="#333333">������ƣ�</font><?php echo( fittingsClassName ?></td>
  </tr>
  <tr>
    <td height="1" background="../images/pic_4_9.gif"></td>
  </tr>
</table>
<?php if($msql->next_record()){?>
<table width="984" height="42" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="970" height="24"><div align="right"><font size="2">
      <?php
		intPageMax = 32 'ÿҳ�不显示intPageMax����¼
		intPageintNo = 1
		if $_GET("pageno") <= 0 {
		intPageintNo = 1
		else
		intPageintNo = $_GET("pageno")
		}
		intNo = 1
		intCountMax = rs.recordcount
		if intCountMax <= 0 {
		'û����ؼ�¼
		intPageintNo = 1
		}
		if (intPageintNo * intPageMax > intCountMax) {
		intPageintNo = int(intCountMax / intPageMax) + 1
		}
		
		rs.move (intPageintNo-1)*intPageMax
							 
		dim count
		count=rs.pagecount
		'response.Write("Ucount="&Ucount)
										  
		if intCountMax > 0 {
		   if intPageintNo > 1 {
			 echo("<a href='extinfo.php?pageno="&intPageintNo-1&"&l_id=".$l_id."&f_id="&f_id&"&car_id="&car_id&"&GetTempNum1="&GetTempNum1&">&lt;&lt;</a>")
			}
			for i = 1 to int((intCountMax-1)/intPageMax)+1
				if int(i) = int(intPageintNo) {
					echo("<font color=blue>"&i&"</font> ")
				else
		?>
      <a href="extinfo.php?pageno=<?php echo(i?>&l_id=<?php echo $l_id?>&f_id=<?php echo(f_id?>&car_id=<?php echo( car_id ?>&GetTempNum1=<?php echo( GetTempNum1 ?>"><?php echo(i?></a>
      <?php
		 }
			next
				 if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
					 echo("<a href='extinfo.php?pageno="&intPageintNo+1&"&l_id=".$l_id."&f_id="&f_id&"&car_id="&car_id&"&GetTempNum1="&GetTempNum1&">&gt;&gt;</a>")
				}
		 }
      ?>
</font></div></td>
  </tr>
  <tr>
    <form name="form1" method="post" action="">
      <td height="18" colspan="2"><?php
		    i=1
			echo "<table width=720 border=0 cellspacing=2 cellpadding=0>"
			while($msql->next_record()){ and (intNo<=intPageMax)
			echo "<Tr>"
			   while (i<=8) 
	             aa="120"
				 echo "<td width="&aa&" height=137 valign=top >"
				 echo "<a href=../folder/fittings/"&trim($msql->f("l_pic"))&"."&trim($msql->f("l_ext"))&" target=_blank>"
				 echo "<img src='../folder/fittings/"&trim($msql->f("l_pic"))&"."&trim($msql->f("l_ext"))&"' width=100  class=picborder>"
				 echo "</a>"
				 echo "<table width=120 border=0 cellspacing=0 cellpadding=0>"
				 echo "<tr>"
				 echo "<td height=34><font color=#404040 size=2>"&left($msql->f("l_extname"),10)&"<br>�г���: "
				 echo ""&trim($msql->f("l_price1"))&""
				 echo "Ԫ</font><br>"
				 echo "<font size=2 color=#404040>�̳Ǽ�: <font color=#ff0000>"
				 echo ""&trim($msql->f("l_price2"))&"</font>"
				 echo " Ԫ</font>"
				 echo "</td>"
				 echo "</tr>"
				 
				 'echo "<tr>"
				 'echo "<td height=1 bgcolor=#FF9900></td>"
				 'echo "</td>"
				 'echo "</tr>"
				 
				 
				 echo "<tr>"
				 echo "<td>"
				 echo "<a href=#  onClick='orderExtSub("&trim($msql->f("pic_id"))&","&car_id&","""&GetTempNum1&""","&f_id&");>"
				 'echo "<a href=#  onClick='orderExtSub("&trim($msql->f("pic_id"))&","&car_id&",1);>"
				 echo "<font color=#0000ff>����</font>"
				 echo "</a>"
				 echo "</td>"
				 echo "</tr>"
			 	 echo "</table>"
				 response.Write "</td>"
				 i=i+1
				 intNo = intNo +1

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
    </form>
  </tr>
</table>
<p>
  <?php } ?>
</p>
</body>
</html>
