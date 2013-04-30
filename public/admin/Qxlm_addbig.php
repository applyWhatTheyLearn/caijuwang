<!--#include file="../_inc/checkoutTime.php"-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css.css" rel="stylesheet" type="text/css">
<title>�����վ����Ŀ</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#999999">
    <td height="1" valign="top"></td>
  </tr>
  <tr bgcolor="#E4E4E4">
    <td height="246" valign="top">
        <form name="form1" method="post" action="Qxlm_Addbig_submit.php">
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�����վ����Ŀ</font></td>
              <td width="517" height="21" bgcolor="#FFFFFF">&nbsp;</td>
              <td width="104" bgcolor="#FFFFFF"><div align="center"><a href="QxLm_List.php">返回前页</a></div></td>
            </tr>
            <tr>
              <td height="18" colspan="3"> <div align="right"></div></td>
            </tr>
            <tr>
              <td width="115" height="22" bgcolor="#999999"> <div align="right"></div></td>
              <td colspan="2" bgcolor="#999999"><div align="center"></div>
                <div align="center"></div>
                <div align="center"></div>
                <div align="center"></div>
                <div align="center"></div>
                <div align="left"> </div></td>
            </tr>
            <tr>
              <td height="22" bgcolor="F1F0F1">&nbsp;��Ŀ��ƣ�</td>
              <td colspan="2" bgcolor="F1F0F1"><input name="LanMuName" type="text" id="MemaberName2" size="20" maxlength="15"></td>
            </tr>
            <tr>
              <td height="22" bgcolor="F1F0F1">&nbsp;排序：�ļ���</td>
              <td colspan="2" bgcolor="F1F0F1"><font color="#990000">
                <input name="LinkName" type="text" id="LinkName" size="60" maxlength="50">
                </font></td>
            </tr>
            <tr>
              <td height="46" bgcolor="F1F0F1"><div align="center"></div></td>
              <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="添加">
                <input type="button" name="Submit3" value="返回前页" onClick="location='QxLm_List.php'">
                <input name="AddressID" type="hidden" value="<?php echo $AddressID?>">
              </td>
            </tr>
            <tr>
              <td height="21" colspan="3" valign="top">&nbsp;</td>
            </tr>
          </table>
        </form>
      </td>
  </tr>
</table>
</body>
</html>
