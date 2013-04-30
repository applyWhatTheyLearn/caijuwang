
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
	pageno=trim($_REQUEST["pageno"))
	l_id=trim($_REQUEST["l_id"))


'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>����ȷ��</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top">
          <form action="New_Order_Change_sub.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">����ȷ��</font></td>
                <td width="498" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="66" bgcolor="#FFFFFF"><div align="center"><a href="New_Order_list.php?pageno=<?php echo $pageno ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="132" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;排序：ȷ�ϣ�</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;��
                  <input name="change" type="radio" value="��" checked >
                  ��
                  <input type="radio" name="change" value="��" >
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="ȷ��">
                    <input type="button" name="Submit3" value="ȡ��" onClick="location='New_Order_list.php?pageno=<?php echo $pageno ?>'">
                    <input name="pageno" type="hidden" id="pageno" value="<?php echo $pageno ?>">
                    <input name="l_id" type="hidden" id="l_id" value="<?php echo $l_id ?>">                    </td>
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

 