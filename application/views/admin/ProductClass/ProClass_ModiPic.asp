<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
	l_id=trim(request.QueryString("l_id"))
	pageno=Trim(request.QueryString("pageno"))
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from z_class where l_id="&l_id&" "
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	if not rs.eof then
	l_pic=trim(rs("l_pic"))
	l_ext=trim(rs("l_ext"))
	end if
	rs.close
	myconn.close
	set rs=nothing
	set myconn=nothing
		 
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
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�޸�ͼƬ</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="ProClass_ModiPic_Save.asp" name="form1" enctype="multipart/form-data">
  <table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�޸�ͼƬ</font></td>
      <td width="417" height="21" bgcolor="#FFFFFF"><div align="right"><a href="ProBigClass_list.asp?pageno=<%= pageno %>">���ز�Ʒ�����б�</a></div></td>
      <td width="204" rowspan="6" bgcolor="#FFFFFF"><div align="center"><a href="../../folder/productClassPic/<%= l_pic %>.<%= l_ext %>" target="_blank"><img src='../../folder/productClassPic/<%= l_pic %>.<%= l_ext %>' name='Pic' width="120" height="120" border="0" ></a></div></td>
    </tr>
    <tr>
      <td height="18">&nbsp;</td>
      <td height="18">&nbsp;</td>
    </tr>
    <tr>
      <td width="115" height="1" bgcolor="#999999"></td>
      <td height="1" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="49" valign="top" bgcolor="F1F0F1"><font size="2"><br>
        &nbsp;ѡ��ͼƬ��</font></td>
      <td bgcolor="F1F0F1"><input name="file1" type="file" class="tx1" style="width:400" value="" size="15"></td>
    </tr>
    <tr>
      <td height="25" bgcolor="F1F0F1">&nbsp;</td>
      <td height="25" bgcolor="F1F0F1">ͼƬ��СΪ��186 x 173 ���أ� ���Ҵ�С���ܳ����ܳ���100K</td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="��ʼ�ϴ�">
        <input type="reset" name="reset" value="����ѡ��">
        <input type="button" name="Submit2" value="ȡ��" onClick="location='ProBigClass_list.asp?pageno=<%= pageno %>'">
        <input type="hidden" name="l_id" value="<%=l_id%>">
        <input type="hidden" name="pageno" value="<%= pageno %>">
      </p></td>
    </tr>
  </table>
</form>
</body>
</html>
