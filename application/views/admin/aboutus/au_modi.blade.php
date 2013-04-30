

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>修改信息</title>
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
          <form action="au_modi_sub.html" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#006699">&nbsp;<font color="#FFFFFF">修改信息</font></td>
                <td width="492" height="21" bgcolor="#FFFFFF">&nbsp;所属分类：[ <span class="STYLE3">分类标题名称</span> ]</td>
                <td width="103" bgcolor="#FFFFFF"><div align="center"><a href="au_list.html">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;标题名称：</td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_title" type="text" id="w_title" value="标题" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="309" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;详细内容：</font></td>
                <td height="309" colspan="2" valign="top" bgcolor="F1F0F1">在线编辑器
                  <textarea name="w_detail" style="display:none" rows="1" cols="20"><%= w_detail %></textarea></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="w_sort" type="text" id="w_sort" value="0" size="25" maxlength="6">
                  *只能是小于6位数的数字（数字越大越靠前）</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="w_views" type="radio" value="显示" checked="CHECKED">
                  不显示
                  <input type="radio" name="w_views" value="不显示" >
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                    <input type="button" name="Submit3" value="返回前页" onClick="location='au_list.html'"></td>
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

 