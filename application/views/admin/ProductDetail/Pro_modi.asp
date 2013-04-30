<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
l_id=Trim(request.QueryString("l_id"))
l_classid=Trim(request.QueryString("l_classid"))
pageno=Trim(request.QueryString("pageno"))

search="select * from z_product where l_id="&l_id&""
set rs=myConn.execute (search)
if not rs.eof then
l_id=Trim(Rs("l_id"))
l_name=Trim(Rs("l_name"))
l_basic=Trim(Rs("l_basic"))
l_extend=Trim(Rs("l_extend"))
l_price1=Trim(Rs("l_price1"))
l_price2=Trim(Rs("l_price2"))
l_num=Trim(Rs("l_num"))
l_units=Trim(Rs("l_units"))
l_sort=Trim(Rs("l_sort")) 
l_shuliang=Trim(Rs("l_shuliang"))
l_tuijian=Trim(Rs("l_tuijian"))
l_views=Trim(Rs("l_views"))
end if

	Select Case l_views
	   Case "��ʾ"
	   l_views1="checked"
	   Case "����ʾ"
	   l_views2="checked"
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
<title>�޸���Ʒ</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
.STYLE2 {color: #0000FF}
-->
</style>
<script language="javascript">
function CheckForm (frm)
{


	if (frm.l_name.value.length==0)
	{
		frm.l_name.focus();
		frm.l_name.select();
		alert ("��������Ʒ���!");
		return false;

	}	

	

}
</script>
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
          <form action="Pro_Modi_Submit.asp" method="post" name="sample" id="sample"  onSubmit="return CheckForm(this);">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr> 
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�޸���Ʒ</font></td>
                <td width="538" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="74" bgcolor="#FFFFFF"><div align="center"><a href="Pro_List.asp?l_classid=<%= l_classid %>&pageno=<%= pageno %>">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;��Ʒ��ƣ����ģ���</font></td> 
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" value="<%= l_name %>" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;����Ϣ�����ģ���</font></td>
                <td height="23" colspan="2" valign="top" bgcolor="F1F0F1"><iframe ID="eWebEditor1" src="../../editor/ewebeditor.asp?id=l_basic&style=standard2" frameborder="0" scrolling="no" width="100%" HEIGHT="120"></iframe>
                  <textarea name="l_basic" style="display:none" rows="1" cols="20"><%= l_basic %></textarea></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��չ��Ϣ�����ģ���</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><iframe ID="eWebEditor2" src="../../editor/ewebeditor.asp?id=l_extend&style=standard2" frameborder="0" scrolling="no" width="100%" HEIGHT="120"></iframe>
                  <textarea name="l_extend" style="display:none" rows="1" cols="20"><%= l_extend %></textarea></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;����״̬��</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<%= l_sort %>" size="25" maxlength="6">
                *ֻ����С��6λ������֣�����Խ��Խ��ǰ��</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;�г��ۣ�</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_price1" type="text" id="l_price1" value="<%= l_price1 %>" size="25" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;�̳Ǽۣ�</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_price2" type="text" id="l_price2" value="<%= l_price2 %>" size="25" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;��λ��</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_units" type="text" id="l_units" value="<%= l_units %>" size="25" maxlength="10"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;���������</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_num" type="text" id="l_num" value="<%= l_num %>" size="25" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">��Ʒ�Ƽ�</font>��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;�Ƽ�
                  <input name="l_tuijian" type="radio" value="�Ƽ�" <%= tuijian1 %>>
                  ���Ƽ�
                  <input name="l_tuijian" type="radio" value="���Ƽ�" <%= tuijian2 %>>
                  ��ע���Ƽ��������Ʒ�б��еļ���һ���У��Ժ�ɫ<span class="STYLE1">��</span>�ֱ�ʶ�� </font></td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;��ʾ 
                  <input name="l_views" type="radio" value="��ʾ" <%= l_views1 %>>
                  ����ʾ 
                  <input type="radio" name="l_views" value="����ʾ" <%= l_views2 %>>
                  </font></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="�޸�"> 
                  <input type="button" name="Submit3" value="����ǰҳ" onClick="location='Pro_List.asp?l_classid=<%= l_classid %>&pageno=<%= pageno %>'">
                  <input name="l_id" type="hidden" value="<%=l_id%>">
                  <input name="pageno" type="hidden" value="<%=pageno%>">
                  <input name="l_classid" type="hidden" value="<%=l_classid%>"></td>
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
