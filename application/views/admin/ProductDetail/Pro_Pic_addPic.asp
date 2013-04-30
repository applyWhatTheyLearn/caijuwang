<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	l_classid=trim(request.QueryString("l_classid"))
	search="select * from z_product where l_id="&l_classid&""
	Set rs = myConn.execute (search)
	if not rs.eof then product_name=Trim(rs("l_name"))	
	rs.close


%>

<html>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E4E4E4;
}
.STYLE1 {color: #0033FF}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>���ͼƬ</title>
<script language="javascript">
function CheckForm (frm)
{

	if (frm.file1.value.length==0)
	{
		frm.file1.focus();
		frm.file1.select();
		alert ("��ѡ��ͼƬ��");
		return false;

	}


</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="Pro_Pic_addPic_Save.asp" name="theForm" enctype="multipart/form-data" onSubmit="return CheckForm(this);"> 
  <table width="740" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="3" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">���ͼƬ</font></td>
      <td width="507" height="21" bgcolor="#FFFFCC">&nbsp;������Ʒ��[ <font color="#0000FF"><%= product_name %></font> ]</td>
      <td width="92" bgcolor="#FFFFCC"><div align="center"><a href="Pro_Pic_List.asp?l_classid=<%= l_classid %>">����ͼƬ�б�</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3">
      <div align="right"></div></td>
    </tr>
    <tr>
      <td width="137" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="32" bgcolor="F1F0F1"><font size="2">&nbsp;ѡ��ͼƬ��</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:300" class="tx1" value="">
      <span class="STYLE1">ͼƬ��С���ܳ����ܳ���100K</span></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;ͼƬע�ͣ�</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_title" type="text" id="l_title" size="25" maxlength="20">
        ����˵������Ҫ��Ҫ����10�����֣�</td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;����</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
        *ֻ����С��6λ������֣�����Խ��Խ��ǰ��</td>
    </tr>
    <tr>
      <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
      <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;��ʾ
        <input name="l_views" type="radio" value="��ʾ" checked>
        ����ʾ
        <input type="radio" name="l_views" value="����ʾ">
      </font></td>
    </tr>
    
    <tr>
      <td height="16" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="��ʼ�ϴ�">
        <input type="reset" name="reset" value="����ѡ��">
        <input type="button" name="Submit2" value="ȡ��" onClick="location='Pro_Pic_List.asp?l_classid=<%= l_classid %>'">
        <input type="hidden" name="l_classid" value="<%= l_classid %>">
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
