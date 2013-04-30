
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
	pageno=trim($_REQUEST["pageno"))
	l_id=trim($_REQUEST["l_id"))

	search="select * from OrderDetail  where l_id=".$l_id.""
	$msql->query(search)
	if($msql->next_record()){
	Meid=trim($msql->f("Meid"))
	Cnum=trim($msql->f("Cnum"))
	UserName=trim($msql->f("UserName"))
	l_id=trim($msql->f("l_id"))
	l_orderform=trim($msql->f("l_orderform"))
	l_detail=trim($msql->f("l_detail"))
	l_price=trim($msql->f("l_price"))
	l_consignee=trim($msql->f("l_consignee"))
	l_sex=trim($msql->f("l_sex"))
	l_address=trim($msql->f("l_address"))
	l_phone=trim($msql->f("l_phone"))
	l_mobile=trim($msql->f("l_mobile"))
	l_postcode=trim($msql->f("l_postcode"))
	l_email=trim($msql->f("l_email"))
	l_deliver=trim($msql->f("l_deliver"))
	l_payment=trim($msql->f("l_payment"))
	l_invoice=trim($msql->f("l_invoice"))
	l_place=trim($msql->f("l_place"))
	l_ordertime=trim($msql->f("l_ordertime"))
	l_takeffectime=trim($msql->f("l_takeffectime"))
	l_orderstatu=trim($msql->f("l_orderstatu"))
	}



	set myconn=nothing
	

'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>������ϸ��Ϣ</title>
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
          <form action="Visa_Add_Submit.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">������ϸ��Ϣ</font></td>
                <td width="526" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="69" bgcolor="#FFFFFF"><div align="center"><a href="javascript:history.go(-1);">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="#FFFFFF">&nbsp;排序：��<font size="2">��</font></td>
                <td height="22" colspan="2" bgcolor="#FFFFFF"><font color="#990000">&nbsp;<?php echo $l_orderform?></font></td>
              </tr>
              <tr>
                <td height="26" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;��Ա��ƣ�</font></td>
                <td height="26" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $UserName?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;��Ʒ��Ϣ��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF"><?php echo $l_detail?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;�ܼ۸�</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_price?>��Ԫ</td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;�ջ��ˣ�</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_consignee?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;�Ա�</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_sex ?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;��ַ��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_address?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;�̶��绰��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_phone?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;�ƶ��绰��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_mobile?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;输入密码：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_postcode?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;email��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_email?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;�ͻ���ʽ��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_deliver?></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="#FFFFFF"><font size="2">&nbsp;���ʽ��</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo $l_payment?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="#FFFFFF">&nbsp;��Ʊ̧ͷ��</td>
                <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;<?php echo $l_invoice?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="#FFFFFF">&nbsp;·����Ϣ��</td>
                <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;<?php echo $l_place?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="#FFFFFF">&nbsp;排序：ʱ�䣺</td>
                <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;<?php echo $l_ordertime?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="#FFFFFF">&nbsp;��Чʱ�䣺</td>
                <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;<?php echo $l_takeffectime?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="#FFFFFF">&nbsp;排序：״̬��</td>
                <td height="23" colspan="2" bgcolor="#FFFFFF">&nbsp;<?php echo $l_orderstatu?></td>
              </tr>
              
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="返回前页" onClick="javascript:history.go(-1);"></td>
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

