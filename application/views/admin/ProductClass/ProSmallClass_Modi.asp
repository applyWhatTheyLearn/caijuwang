<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	l_id=Trim(Request.QueryString("l_id"))
	l_classid=Trim(Request.QueryString("l_classid"))
	pageno=Trim(Request.QueryString("pageno"))
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from z_class where l_id="&l_id&""
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	l_name=Trim(rs("l_name"))
	l_name_e=Trim(rs("l_name_e"))
	l_detail=Trim(rs("l_detail"))
	l_sort=Trim(rs("l_sort"))
	l_tuijian=Trim(Rs("l_tuijian"))
	l_views=Trim(rs("l_views"))
	Select Case l_views
	   Case "��ʾ"
	   View1="checked"
	   Case "����ʾ"
	   View2="checked"
	End Select		



	Select Case l_tuijian
	   Case "�Ƽ�"
	   tuijian1="checked"
	   Case "���Ƽ�"
	   tuijian2="checked"
	End Select	

'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�޸���ƷС��</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="246" valign="top"> 
        <div align="center">
          <form action="ProSmallClass_Modi_Submit.asp" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr> 
                <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">�޸���ƷС��</font></td>
                <td width="541" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="71" bgcolor="#FFFFFF"><div align="center"><a href="ProSmallClass_List.asp?pageno=<%= pageno %>&l_classid=<%= l_classid %>">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;С����ƣ����ģ���</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" value="<%= l_name %>" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;��ҳ�Ƽ���</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;�Ƽ�
                  <input name="l_tuijian" type="radio" value="�Ƽ�" <%= tuijian1 %>>
                  ���Ƽ�
                  <input type="radio" name="l_tuijian" value="���Ƽ�" <%= tuijian2 %>>
                </font></td>
              </tr>
              <tr> 
                <td height="29" bgcolor="F1F0F1"><font size="2">&nbsp;������Ϣ��</font></td>
                <td height="29" colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<%= l_sort %>" size="25" maxlength="6">
                *ֻ����С��6λ������֣�����Խ��Խ��ǰ�� </td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;��ʾ 
                  <input name="l_views" type="radio" value="��ʾ" <%= View1 %>>
                  ����ʾ 
                  <input type="radio" name="l_views" value="����ʾ" <%= View2 %>>
                  </font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1"><div align="center"></div></td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="�޸�"> 
                  <input type="button" name="Submit3" value="����ǰҳ" onClick="location='ProSmallClass_List.asp?pageno=<%= pageno %>&l_classid=<%= l_classid %>'"> 
                  <input name="l_id" type="hidden" value="<%=l_id%>">            
                  <input name="pageno" type="hidden" value="<%=pageno%>">
                  <input name="l_classid" type="hidden" value="<%=l_classid%>">                </td>
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
