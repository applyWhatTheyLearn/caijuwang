<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
		  w_helpid=trim(request.QueryString("w_helpid"))
		  w_id=trim(request.QueryString("w_id"))
		  class_id=Trim(Request.QueryString("class_id"))
		  
		  search="select w_id,w_filename,w_ext from w_address where w_id="&w_id&""
		  set rs=myConn.execute (search)
		  w_filename=Trim(rs("w_filename"))
		  w_ext=Trim(rs("w_ext"))
		  rs.close
		  set rs=nothing
		  t_picname=w_filename&"."&w_ext		  

		  
		  '删除文件
		  Path=Request.ServerVariables("APPL_PHYSICAL_PATH") '取服务器物力路径
		  Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
		  sMapFileName =Path&"folder\Addressbook\" & t_picname
		  'response.Write("sMapFileName="&sMapFileName )
		  If oFSO.FileExists(sMapFileName) = True Then
		  oFSO.DeleteFile(sMapFileName)
		  End If
		  Set oFSO = Nothing
		  
		  '删除库中记录
		  DelPic="Delete from w_address where w_id="&w_id&""
		  myConn.execute (DelPic)		  
%>


<html>
<head>
<title>DelTableD</title>
<meta http-equiv="refresh" content="0;url=exponnet_list.asp">
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
