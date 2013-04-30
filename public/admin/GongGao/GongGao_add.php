<?php
include("../../_inc/checkoutTime2.php");
$l_classid=isset($_REQUEST["class_id"])?trim($_REQUEST["class_id"]):'';?>
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>添加公告内容</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
    <script type="text/javascript" src="../../ueditor/editor_config.js"></script>
    <script type="text/javascript" src="../../ueditor/editor_all.js"></script>

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
          <form action="GongGao_add_sub.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">添加公告内容</font></td>
                <td width="506" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="89" bgcolor="#FFFFFF"><div align="center"><a href="GongGao_list.php?l_classid=<?php echo  $l_classid ?>">返回公告列表</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1">&nbsp;公告标题<font size="2">：</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><input name="l_title" type="text" id="l_title" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="309" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;公告内容：</font></td>
                <td height="309" colspan="2" valign="top" bgcolor="F1F0F1">
                                     <textarea name="l_detail" id="l_detail"></textarea>
                            <script type="text/javascript">
                                var editor = new UE.ui.Editor();
                                editor.render("l_detail");
                                //1.2.4以后可以使用一下代码实例化编辑器
                                //UE.getEditor('myEditor')
                            </script>
         </td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
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
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="添加">
                <input type="button" name="Submit3" value="返回前页" onClick="location='GongGao_list.php?l_classid=<?php echo  $l_classid ?>'">
                <input name="l_classid" type="hidden" id="l_classid" value="<?php echo  $l_classid ?>">                </td>
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


 