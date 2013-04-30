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


'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>��Ʒ����</title>
<style type="text/css">
<!--
.STYLE2 {color: #0000FF}
-->
</style>
</head>
</html>
<html>
<head>
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
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">��Ʒ����</font></td>
                <td width="557" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="74" bgcolor="#FFFFFF"><div align="center"><a href="Pro_List.asp?l_classid=<%= l_classid %>&pageno=<%= pageno %>">����ǰҳ</a></div></td>
              </tr>
              <tr> 
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr> 
                <td width="105" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
<%              Set rs = Server.CreateObject("ADODB.RecordSet") 
				Search = "select * from z_productpic where l_productid="&l_id&" order by l_sort desc"
				Rs.open Search,myConn,adOpenStatic,adLockReadOnly
				'response.Write("Search="&Search)
				piclist=""
				num=1
				if not rs.eof then
				opens="ok"
				else
				opens=""
				end if
				do while not rs.eof 
				
				l_pic=Trim(Rs("l_pic"))
				l_ext=Trim(Rs("l_ext"))
				l_title=Trim(Rs("l_title"))				
				piclist=piclist&"<a href=../../folder/product/"&l_pic&"."&l_ext&" target=_blank><img src=../../folder/product/"&l_pic&"."&l_ext&" alt="&l_title&" name=qas height=60 border=0></a>&nbsp;"
				if num>6 then 
				piclist=piclist&"<br>"
				num=0
				end if
				num=num+1
				rs.movenext
				loop
				rs.close
				myconn.close
				set rs=nothing
				set myconn=nothing
				
				if opens="ok" then
 %>              <tr>
                <td height="22" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��ƷͼƬ��</font></td>
                <td colspan="2" valign="top" bgcolor="F1F0F1"><%= piclist %></td>
              </tr>
              <% end if%>
              <tr> 
                <td height="22" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��Ʒ��ƣ�</font></td>
                <td colspan="2" bgcolor="F1F0F1"><%= l_name %></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;����Ϣ��</font></td>
                <td height="23" colspan="2" valign="top" bgcolor="F1F0F1"><%= l_basic %></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��չ��Ϣ��</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_extend %></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;�г��ۣ�</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_price1 %></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;�̳Ǽۣ�</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_price2 %></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;��λ��</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_units %></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;���������</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_num %></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;����״̬��</font></td>
                <td colspan="2" bgcolor="F1F0F1"><%= l_sort %></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">��Ʒ�Ƽ�</font>��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_tuijian %></td>
              </tr>
              <tr> 
                <td height="23" bgcolor="F1F0F1">&nbsp;��ʾ״̬��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><%= l_views %></td>
              </tr>
              <tr> 
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="����ǰҳ" onClick="location='Pro_List.asp?l_classid=<%= l_classid %>&pageno=<%= pageno %>'"></td>
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

