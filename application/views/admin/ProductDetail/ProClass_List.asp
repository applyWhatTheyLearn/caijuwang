<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
  
	'AdminID=Trim(session("UserID"))
	Search = "select * from z_class where l_fid=0 order by l_sort desc"
	Set rs = myConn.execute (search)
	'response.Write("Search="&Search &"<br>")
	'TitleName=Trim(rs("TitleName"))
	'Rs.close
	
		 
'%>
<html>
<head>
<title>��̨����ϵͳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<script src="subMenu.js"></script>
<style type="text/css">
<!--
body {
	background-color: #CCCC99;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">
  <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
    <tr bgcolor="#EEEEEE">
      <td height="22" colspan="3" bgcolor="#999933">&nbsp;<font color="#00CCFF"> [ <font color="#FFFFFF">��Ʒ�������</font> ]</font></td>
    </tr>
    <tr>
      <td width="88%" height="2" bgcolor="#666666"></td>
      <td width="12%" height="2" colspan="2" bgcolor="#666666"></td>
    </tr>
  </table>
  <%
		  menuid=1
		  do while not rs.eof 
		  AccID=Trim(rs("l_id"))
		  l_id=Trim(rs("l_id"))		  
		  l_name=left(Trim(Rs("l_name")),10)
		  'LinkName=Trim(Rs("LinkName"))
		  'LinkName="Pro_list.asp?l_classtype=type1&fotherid="&l_id
		  LinkName="Pro_Temp.asp"

		  'children=Trim(rs("children"))
		  'response.Write("children="&children)

		%>
  <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="154" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font color="#999999">��</font>&nbsp;<a href="<%= LinkName %>" target="window_main" onClick="viewSubMenu(<%= l_id %>,<%= menuid %>);"><font color="#0000FF"><%= l_name %></font></a></td>
      <td width="12" bgcolor="#EEEEEE"><div align="center"><a href="#"><font color="#ff0000"><img src="../images/Head_r1_c3.gif" name="img<%=menuid%>"  border="0" id="img<%=menuid%>" onClick="viewSubMenu(<%= l_id %>,<%= menuid %>);"></font></a></div></td>
    </tr>
  </table>
  <div id="submenu<%=menuid%>" style="display:none"></div>
  <% 
		  menuid=menuid+1
		  rs.movenext
		  loop
		  rs.close
	   %>
  <table width="180" border="0" align="center" cellpadding="2">
    <tr>
      <td width="14" height="1" bgcolor="#666666"></td>
      <td height="1" bgcolor="#666666"></td>
    </tr>
  </table>
</div>
</body>
</html>
<script language="javascript">
function viewSubMenu(l_id,mid) //��ʾ�Ӳ˵�
{
  var SubName=eval(document.getElementById("submenu"+mid));
//alert (SubName.style.display);

 if (SubName.style.display == "block") 
 {
   document.getElementById("submenu"+mid).style.display="none"
   imgid=eval("img"+mid);
   imgid.src="../images/Head_r1_c3.gif";
 }
 else if (SubName.style.display == "none") 
 {


 showSubMenu(l_id,mid);
 SubName.style.display="block";
 imgid=eval("img"+mid);
 imgid.src="../images/Head_r1_c1.gif";

 }
}//-->	

</script>