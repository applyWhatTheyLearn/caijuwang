<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" --><%
	Meid=Trim(Request.QueryString("Meid"))
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_user where Meid='"&Meid&"'"
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly

'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�û���ϸ����</title>
<style type="text/css">
<!--
.STYLE1 {color: #990000}
.STYLE2 {color: #FF6600}
.STYLE3 {color: #0099CC}
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
          <form action="Member_add_Submit.asp" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�û���ϸ����</font></td>
                <td height="21" colspan="4" bgcolor="#FFFFFF"><div align="right"><a href="Member_List.asp?pageno=<%=Trim(Request.QueryString("pageno"))%>">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="5"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="90" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="4" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1">&nbsp;ͼƬ��</td>
                <td height="23" colspan="4" bgcolor="F1F0F1"><img src='../../folder/Pic/<%=Trim(Rs("photo"))%>' name='Pic'></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��Ա�ţ�</font></td>
                <td colspan="4" bgcolor="F1F0F1">&nbsp;<font color="#990000"><%= rs("cnum") %></font></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�û��ǳƣ�</font></td>
                <td colspan="4" bgcolor="F1F0F1">&nbsp;<%= rs("NickName") %></td>
              </tr>
              <tr> 
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ʵ��ƣ�</font></td>
                <td colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("UserName")%> </font></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�Ա�:</font></td>
                <td colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("sex")%> 
                  </font></td>
              </tr>
              <tr> 
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�û�����</font>                </td>
                <td colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<span class="STYLE1"><%=Rs("Userlevel")%></span></font></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ϵ��ַ��</font></td>
                <td colspan="4" bgcolor="F1F0F1">&nbsp;<%= rs("address") %></td>
              </tr>
              <tr> 
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font color="#000000" size="2">&nbsp;�������룺</font></td>
                <td colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("postcode")%></font></td>
              </tr>
              <tr> 
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ϵ�绰��</font></td>
                <td colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("Tel")%></font></td>
              </tr>
              <tr> 
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Email��</font></td>
                <td colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("email")%></font></td>
              </tr>
              <tr> 
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Msn��</font></td>
                <td height="20" colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("msn")%></font></td>
              </tr>
              <tr> 
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1">&nbsp;QQ��</td>
                <td height="20" colspan="4" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Rs("QQ")%></font></td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">�û�</font>���ܣ�</td>
                <td height="23" colspan="4" bgcolor="F1F0F1"><font size="2"><font size="2">&nbsp;<%=Rs("Detail")%></font></font></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;ע��ʱ�䣺</font></td>
                <td width="166" height="23" bgcolor="F1F0F1">&nbsp;<%= Rs("RegTime")%></td>
                <td width="94" height="23" bgcolor="F1F0F1"><div align="center">����¼ʱ�䣺</div></td>
                <td width="157" bgcolor="F1F0F1">&nbsp;<%= Rs("LastLoginTime")%></td>
                <td width="227" bgcolor="F1F0F1">&nbsp;��½����<%= Rs("LoginNum") %></td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;��ͨ״̬��</td>
                <td height="23" bgcolor="F1F0F1"><font size="2"> <font size="2">&nbsp;<%=Rs("Views")%></font></font></td>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;�Ƽ��ˣ�</font></td>
                <td height="23" bgcolor="F1F0F1">&nbsp;</td>
                <td height="23" bgcolor="F1F0F1">&nbsp;ʶ���룺<span class="STYLE2"><%= Rs("shibie") %></span></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="4" bgcolor="F1F0F1"> <input type="button" name="Submit3" value="����ǰҳ" onClick="location='Member_List.asp?pageno=<%=Trim(Request.QueryString("pageno"))%>'"> 
                  <input name="AddressID" type="hidden" value="<%=AddressID%>">                </td>
              </tr>
              <tr> 
                <td height="21" colspan="5" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
