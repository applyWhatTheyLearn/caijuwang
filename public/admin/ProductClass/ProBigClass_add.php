<?php
    include("../../_inc/checkoutTime3.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>添加商品大类</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
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
          <form action="ProBigClass_Add_Submit.php" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">添加商品大类</font></td>
                <td width="499" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="ProBigClass_List.php">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="130" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;大类名称（中文）：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;大类名称（英文）：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name_e" type="text" id="l_name_e" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;首页推荐：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;推荐
                    <input name="l_tuijian" type="radio" value="推荐">
                        不推荐
                  <input name="l_tuijian" type="radio" value="不推荐" checked>
                        （注：推荐后会在商品列表中的荐这一竖列，以红色<span class="STYLE1">荐</span>字标识
                </font></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;排序状态：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
                    *只能是小于6位数的数字（数字越大越靠前）</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="l_views" type="radio" value="显示" checked>
                        不显示
                  <input type="radio" name="l_views" value="不显示">
                  </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="添加">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='ProBigClass_List.php'">
                  <input name="AddressID" type="hidden" value="<?php //echo $AddressID?>">                </td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
