
<!--#include file="../../_inc/checkoutTime2.php" -->
<?php
	l_id=trim($_REQUEST["l_id"))
	search="select * from z_helpclass  where l_id=".$l_id.""
	$msql->query(search)
	if($msql->next_record()){
	l_id=trim($msql->f("l_id"))
	l_classname=trim($msql->f("l_classname"))
	l_sort=trim($msql->f("l_sort"))
	l_views=trim($msql->f("l_views"))
	}
	
	Select Case l_views
	   Case "显示"
	   l_views1="checked"
	   Case "不显示"
	   l_views2="checked"
	End Select	

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�޸ķ���</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
          <form action="helpClass_modi_sub.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�޸ķ���</font></td>
                <td width="531" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="106" bgcolor="#FFFFFF"><div align="center"><a href="helpClass_managelist.php">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="129" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：���:</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><input name="l_classname" type="text" id="l_classname" value="<?php echo $l_classname ?>" size="30" maxlength="50"></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<?php echo $l_sort ?>" size="20" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2">&nbsp;显示
                    <input name="l_views" type="radio" value="显示" <?php echo $l_views1 ?>>
不显示
<input type="radio" name="l_views" value="不显示" <?php echo $l_views2 ?>>
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='helpClass_managelist.php'">
                  <input name="l_id" type="hidden" id="l_id" value="<?php echo $l_id ?>"></td>
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

 