
<!--#include file="../../_inc/checkoutTime2.php" --><?php
	Meid=trim($_REQUEST["Meid"))
	$_REQUEST[
	Search = "select * from z_user where Meid="&Meid&""
    $msql->query($Search);

'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�û���ϸ����</title>
<style type="text/css">
<!--
.STYLE1 {color: #990000}
.STYLE2 {color: #FF6600}
.STYLE3 {color: #0099CC}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
        <div align="center">
          <form action="Member_add_Submit.php" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�û���ϸ����</font></td>
                <td height="21" bgcolor="#FFFFFF"><div align="right"><a href="javascript:history.go(-1);">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="2"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="100" height="1" bgcolor="#999999"></td>
                <td height="1" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1">&nbsp;ͼƬ��</td>
                <td height="23" bgcolor="F1F0F1"><img src='../../folder/Pic/<?php echo(trim($msql->f("photo"))?>' name='Pic></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��Ա�ţ�</font></td>
                <td bgcolor="F1F0F1">&nbsp;<font color="#990000"><?php echo( $msql->f("cnum") ?></font></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�û��ǳƣ�</font></td>
                <td bgcolor="F1F0F1">&nbsp;<?php echo( $msql->f("NickName") ?></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ʵ��ƣ�</font></td>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("UserName")?> </font></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�Ա�:</font></td>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("sex")?>
                  </font></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;用户密码</font>                </td>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;<span class="STYLE1"><?php echo($msql->f("Userlevel")?></span></font></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ϵ��ַ��</font></td>
                <td bgcolor="F1F0F1">&nbsp;<?php echo( $msql->f("address") ?></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font color="#000000" size="2">&nbsp;输入密码：</font></td>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("postcode")?></font></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ϵ�绰��</font></td>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("Tel")?></font></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Email��</font></td>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("email")?></font></td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Msn��</font></td>
                <td height="20" bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("msn")?></font></td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1">&nbsp;QQ��</td>
                <td height="20" bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo($msql->f("QQ")?></font></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">�û�</font>���ܣ�</td>
                <td height="23" bgcolor="F1F0F1"><font size="2"><font size="2">&nbsp;<?php echo($msql->f("Detail")?></font></font></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;ע��ʱ�䣺</font></td>
                <td height="23" bgcolor="F1F0F1">&nbsp;<?php echo( $msql->f("RegTime")?>                  <div align="center"></div></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;排序：¼ʱ�䣺</td>
                <td height="23" bgcolor="F1F0F1">&nbsp;<?php echo( $msql->f("LastLoginTime")?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;��½����</td>
                <td height="23" bgcolor="F1F0F1">&nbsp;<?php echo( $msql->f("LoginNum") ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;开通状态：</td>
                <td height="23" bgcolor="F1F0F1"><font size="2"> <font size="2">&nbsp;<?php echo($msql->f("Views")?></font></font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" bgcolor="F1F0F1"><input type="button" name="Submit3" value="返回前页" onClick="javascript:history.go(-1);">
                <input name="AddressID" type="hidden" value="<?php echo $AddressID?>">                </td>
              </tr>
              <tr>
                <td height="21" colspan="2" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
