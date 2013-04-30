
<?php
	'ɾ����Сʱǰ�ύ�Ķ�����Ϣ
    $msql->query ("Delete from z_carext where datediff('h', l_datetime, now)>'2'")
	car_id=trim($_REQUEST["car_id"))
    l_fid=trim($_REQUEST["l_fid"))
	l_tempnum=trim($_REQUEST["l_tempnum"))
	$_REQUEST[
	Search = "select * from CarExtList where l_carid="&car_id&" order by l_datetime desc"
    $msql->query($Search);
	
	

'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>���ﳵ(�������) </title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {color: #FFFFFF}
-->
</style>
<script src="../car/modiordernum.js"></script>
<script language="JavaScript">

function closewindow(cid){
//setTimeout("window.close()",5000)
//parent.opener.viewpinming(a,b,c);
//alert(cid);
SumCarExtPrice(cid);
opener.location.href="car.php"
window.close()
}
</script>
</head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_left scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  
  <table width="984" border="0" cellpadding="0" cellspacing="1" class="TableLineColor">
    <form name="form1" method="post" action="user_login_check$_REQUEST["  onSubmit="return CheckForm(this);">
      <tr>
        <td height="27" colspan="3">&nbsp;��ҳ��&gt; ���ﳵ &gt; <font color="#0000FF">���ﳵ(�������)</font> </td>
        <td height="27" colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td height="��" colspan="9" background="../images/pic_4_9.gif"></td>
      </tr>
      <tr>
        <td width="54" height="22" bgcolor="#999933"><span class="STYLE1">&nbsp;No.</span></td>
        <td width="119" bgcolor="#999933"><span class="STYLE1">&nbsp;ͼ</span></td>
        <td width="301" bgcolor="#999933"><span class="STYLE1">&nbsp;��Ʒ���</span></td>
        <td width="103" bgcolor="#999933"><span class="STYLE1">&nbsp;�г��ۣ�Ԫ</span></td>
        <td width="100" bgcolor="#999933"><span class="STYLE1">&nbsp;�̳Ǽۣ�Ԫ</span></td>
        <td colspan="2" bgcolor="#999933"><div align="center"><span class="STYLE1">&nbsp;暂无内容</span></div></td>
        <td width="122" bgcolor="#999933"><span class="STYLE1">&nbsp;��ʡ/Ԫ</span></td>
        <td width="42" bgcolor="#999933"><span class="STYLE1">&nbsp;排序：</span></td>
      </tr>
  <?php
			dim num 
		 	num=1 
			l_all_price=0
			l_all_jiesheng=0
			while($msql->next_record()){
			l_id=trim($msql->f("l_id"))
			l_productid=trim($msql->f("l_productid"))
			l_datetime=trim($msql->f("l_datetime"))
			l_name=trim($msql->f("l_name"))
			l_price1=trim($msql->f("l_price1"))
			l_price2=trim($msql->f("l_price2"))
			l_num=trim($msql->f("l_num"))
			l_pic=trim($msql->f("l_pic"))
			l_ext=trim($msql->f("l_ext"))
			jiesheng=l_price1-l_price2
			l_all_price=l_all_price+(l_price2*l_num)
			l_all_jiesheng=l_all_jiesheng+(jiesheng*l_num)

		?>
     
      <tr bgcolor="#F2F2F2" onMouseOver="this.style.background = '#E3E3AE'" onMouseOut="this.style.background = '#F2F2F2'">
        <td height="22">&nbsp;<?php echo $num ?>、</td>
        <td><img src="../folder/fittings/<?php echo $l_pic ?>.<?php echo $l_ext ?>" width="25"></td>
        <td>&nbsp;<a href="../product/product_detail.php?l_id=<?php echo $l_productid ?>"><?php echo $l_name ?></a></td>
        <td>&nbsp;<font color="404040">��<?php echo $l_price1 ?></font></td>
        <td>&nbsp;<font color="404040"><font color="#0000FF">��<?php echo $l_price2 ?></font></font></td>
        <td width="64"><input name="l_num<?php echo(num?>" type="text" id="l_num<?php echo(num?>" value="<?php echo $l_num ?>" size="8" maxlength="5"></td>
        <td width="67"><div align="center"><a href="#" onClick="MofiExtOrderNum(<?php echo $l_id ?>,<?php echo( num ?>);">修改����</a></div></td>
        <td>&nbsp;<font color="#ff0000">��<?php echo $jiesheng ?></font></td>
        <td>&nbsp;<a href="delext.php?l_id=<?php echo $l_id ?>&car_id=<?php echo( car_id ?>&l_fid=<?php echo $l_fid ?>&l_tempnum=<?php echo $l_tempnum ?>">ɾ��</a></td>
      </tr>
        <tr>
         <td height="��" colspan="9" background="../images/pic_4_9.gif"></td>
       </tr>
      <tr>
       <?php
		Num=Num+1					

		}
		?>
   

        <td height="23" colspan="3" bgcolor="#F2F2F2"><input name="button2" type="button" class="carext" id="button2" value="��չ��ﳵ" onClick="location='delextall.php?car_id=<?php echo( car_id ?>&l_fid=<?php echo $l_fid ?>&l_tempnum=<?php echo $l_tempnum ?>'"></td>
        <td colspan="6" bgcolor="#F2F2F2"><p align="right"><font color="404040">�������</font><font color="404040">�ܼƣ�<?php echo $l_all_price ?>��Ԫ������ʡ�� <font color="#FF0000"><?php echo $l_all_jiesheng ?></font>��Ԫ</font></p>        </td>
      </tr>
      
      <tr>
        <td height="��" colspan="9" background="../images/pic_4_9.gif"></td>
      </tr>
      <tr>
        <td height="29" colspan="9" valign="bottom"><div align="right">
          <input name="button4" type="button" class="carext" id="button4" value="ȷ暂无内容" onClick="closewindow(<?php echo( car_id ?>);">
        </div></td>
      </tr>
      </form>
  </table>
    
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="6"></td>
    </tr>
  </table>
  <table width="984" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
    <tr>
      <td height="22">&nbsp;<a href="#">暂无内容�Ϣ</a></td>
    </tr>
    <tr>
      <td height="1" valign="top" background="../images/pic_4_9.gif"></td>
    </tr>
    <tr>
      <td height="27" valign="top"><iframe frameborder=0 name=ProductInfoExt scrolling="no" src="extinfo.php?f_id=<?php echo $l_fid ?>&car_id=<?php echo( car_id ?>&l_tempnum=<?php echo $l_tempnum ?>"  style="WIDTH:100%;"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="6"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_left scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
