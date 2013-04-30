<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->



<% 

   l_id=Trim(Request.QueryString("l_id"))
   l_classid=Trim(Request.QueryString("l_classid"))
   pageno=Trim(Request.QueryString("pageno"))
	'Response.Write("InfoID="&InfoID &"<br>")
	
   'l_id=15
   'l_classid=11	

	Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
	Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
	
	search0="select * from z_product where l_classid="&l_id&""
	set rs0=myConn.execute (search0)	
	do while not rs0.eof
	pro_l_id=trim(rs0("l_id"))
	'response.Write("pro_l_id="&pro_l_id &"<br>")

		search1="select l_id,l_productid,l_pic,l_ext from z_productpic where l_productid="&pro_l_id&""
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
		set rs1=nothing

		DelInfo="Delete from z_product where l_id="&l_id&""
		myConn.execute (DelInfo)

	rs0.movenext
	loop
	rs0.close
	set rs0=nothing

   DelInfo="Delete from z_class where l_id="&l_id&""
   myConn.execute (DelInfo)
   'response.Write("DelGuojiaInfo="&DelGuojiaInfo &"<br>")
   myConn.close
   set oFSO=nothing
   set myConn=nothing
	''response.redirect("DelUserOK.asp")
%>
<html>
<head>
<title>É¾³ýÐÅÏ¢</title>
<meta http-equiv="refresh" content="0;url=ProSmallClass_List.asp?pageno=<%= pageno %>&l_classid=<%= l_classid %>">
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

