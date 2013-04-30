<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->

<% 
    l_id=Trim(Request("l_id"))
    l_classid=Trim(Request.QueryString("l_classid"))	
	pageno=Trim(Request.QueryString("pageno"))
	search="select l_id,l_pic,l_ext from z_productpic where l_id="&l_id&""
	set rs=myConn.execute (search)
	l_picName=trim(rs("l_pic"))
	l_ext=trim(rs("l_ext"))
	rs.close
	set rs=nothing
	
	Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
	Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
	sMapFileName = Path &"folder\product\"& l_picName&"."&l_ext
	
	If oFSO.FileExists(sMapFileName) = True Then
	oFSO.DeleteFile(sMapFileName)
	End If	
					
   DelInfo="Delete from z_productpic where l_id="&l_id&""
   myConn.execute (DelInfo)
   myConn.close
   set myConn=nothing
   set oFSO=nothing
	''response.redirect("DelUserOK.asp")
%>
<html>
<head>
<title>删除公司信息</title>
<meta http-equiv="refresh" content="0;url=Pro_Pic_List.asp?l_classid=<%= l_classid %>&pageno=<%= pageno %>">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>


 