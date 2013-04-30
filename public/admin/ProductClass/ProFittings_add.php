<?php
include("../../_inc/checkoutTime3.php");
$l_classid=trim($_REQUEST["l_classid"]);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>添加小类分类</title>
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
          <form action="ProFittings_Add_Submit.php" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#009999">&nbsp;<font color="#FFFFFF">添加小类分类</font></td>
                <td width="535" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="ProFittings_List.php?l_classid=<?php echo  $l_classid ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="16" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="94" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;分类名称：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" size="70" maxlength="25"></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1">&nbsp;简要说明：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><textarea name="l_detail" cols="70" rows="5" id="l_detail" ></textarea></td>
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
                <td height="36" bgcolor="F1F0F1">&nbsp;</td>
                <td height="36" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="添加">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='ProFittings_List.php?l_classid=<?php echo  $l_classid ?>'">
                  <input name="l_classid" type="hidden" value="<?php echo $l_classid?>">
                  </td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
