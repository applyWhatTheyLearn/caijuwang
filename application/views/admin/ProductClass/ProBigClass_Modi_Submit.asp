<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	l_id=request.Form("l_id")
	pageno=Trim(Request.Form("pageno"))
	l_name=request.Form("l_name")
	l_name_e=request.Form("l_name_e")
	l_detail=request.Form("detail")
	l_sort=request.Form("l_sort")
	l_tuijian=request.Form("l_tuijian")
	l_views=Request.Form("l_views")


	updateInfo="update z_class set l_name='"&l_name&"',l_detail='"&l_detail&"',l_sort='"&l_sort&"',l_tuijian='"&l_tuijian&"',l_Views='"&l_views&"' where l_id="&l_id&""
	myConn.execute (updateInfo)

	Myconn.close
  	set Myconn=nothing

'
%>
<meta http-equiv=refresh content="0; url=ProBigClass_List.asp?pageno=<%= pageno %>">
<html>
<head>
<title>更新添加成功!</title>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
