<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->


<% 
   Meid=Trim(Request("Meid"))
	'Response.Write("InfoID="&InfoID &"<br>")
	
   DelInfo="Delete from w_user where Meid='"&Meid&"'"
   myConn.execute (DelInfo)
   myConn.close
   set rs=nothing
   set myConn=nothing
	''response.redirect("DelUserOK.asp")
%>
<html>
<head>
<title>删除用户信息</title>
<meta http-equiv="refresh" content="0;url=Member_List.asp?pageno=<%=Trim(Request.QueryString("pageno"))%>">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>信息已删除</strong></font> </p>
</div>
</body>
</html>

