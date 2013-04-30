<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<%
w_classname=Trim(request.Form("w_classname"))
w_sort=Trim(request.Form("w_sort"))
w_views=Request("w_views")
ChackError w_classname,"分类名称"
ChackNum w_sort,"排序"
 'ChackError(NetAnswer)


	AddDetail="INSERT INTO w_loginfo (w_classname,w_sort,w_views) VALUES ('" &w_classname& "','" &w_sort& "','" &w_views& "')"
    myConn.Execute (AddDetail)
'
%>
<script language="JavaScript">
		{
parent.topFrame.location.href= "core_top.asp"
		}
</script>
<html>
<head>
<title>修改成功!</title>
<meta http-equiv=refresh content="0; url=coreclass_list.asp">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
<% 
	Myconn.close
	set Rs=nothing
  	set Myconn=nothing
%>
 