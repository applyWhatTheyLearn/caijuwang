<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->


<% 
	l_id=Trim(Request.QueryString("l_id"))
	pageno=Trim(Request.QueryString("pageno"))
	l_classid=Trim(Request.QueryString("l_classid"))
	'Response.Write("InfoID="&InfoID &"<br>")
	
	Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
	Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
	'删除产品

			search1="select l_id,l_productid,l_pic,l_ext from z_productpic where l_productid="&l_id&""
			set rs1=myConn.execute (search1)
			'response.Write("search1="&search1 &"<br>")
			do while not rs1.eof
			ProPicid=trim(rs1("l_id"))
			ProPicName=trim(rs1("l_pic"))
			ProExt=trim(rs1("l_ext"))
	
			sMapFileName = Path &"folder\product\"& ProPicName&"."&ProExt
			'response.Write("sMapFileName="&sMapFileName &"<br>")
			If oFSO.FileExists(sMapFileName) = True Then
			oFSO.DeleteFile(sMapFileName)
			End If		
		
			rs1.movenext
			loop
			rs1.close



	DelInfo="Delete from z_product where l_id="&l_id&""
    myConn.execute (DelInfo)
	'response.Write("DelInfo="&DelInfo &"<br>")
	myConn.close
	set rs1=nothing
	set oFSO=nothing
	set myConn=nothing
	''response.redirect("DelUserOK.asp")
%>
<html>
<head>
<title>删除信息</title>
<meta http-equiv="refresh" content="0;url=Pro_List.asp?pageno=<%= pageno %>&l_classid=<%= l_classid %>">
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

