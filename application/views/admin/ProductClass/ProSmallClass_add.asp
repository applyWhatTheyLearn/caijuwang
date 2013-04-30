<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
l_classid=trim(request.QueryString("l_classid"))
	if len(l_classid)=0 then 
	'����������ַ������ʾ�����ܺ������������ַ�
     %>
     <script language=vbscript>
             history.back()
             alert("��ѡ����Ʒ���� ��")
     </script>
     <%
	response.end 
	end if

'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�����ƷС��</title>
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
          <form action="ProSmallClass_add_Submit.asp" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr> 
                <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">�����ƷС��</font></td>
                <td width="540" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="68" bgcolor="#FFFFFF"><div align="center"><a href="ProSmallClass_List.asp?l_classid=<%= l_classid %>">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="128" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr> 
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;С����ƣ����ģ���</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;��ҳ�Ƽ���</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;�Ƽ�
                    <input name="l_tuijian" type="radio" value="�Ƽ�">
                  ���Ƽ�
                  <input name="l_tuijian" type="radio" value="���Ƽ�" checked>
                  ��ע���Ƽ��������Ʒ�б��еļ���һ���У��Ժ�ɫ<span class="STYLE1">��</span>�ֱ�ʶ��
                </font></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;����״̬��</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
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
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="���"> 
                  <input type="button" name="Submit3" value="����ǰҳ" onClick="location='ProSmallClass_List.asp?l_classid=<%= l_classid %>'"> 
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
