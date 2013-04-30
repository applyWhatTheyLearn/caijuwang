<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
l_name=request.Form("l_name")
l_name_e=request.Form("l_name_e")
l_detail=request.Form("detail")
l_sort=request.Form("l_sort")
l_tuijian=request.Form("l_tuijian")
l_views=Request.Form("l_views")
ChackError l_name,"大类名称"
ChackNum l_sort,"排序"

'response.write("ZongDaiJG="&ZongDaiJG &"<br>")
'response.write("addpic="&addpic &"<br>")
'response.write("FenDaiJG="&FenDaiJG &"<br>")
'response.write("ChanPinSM="&ChanPinSM &"<br>")
'response.write("JiShuWT="&JiShuWT &"<br>")
'response.write("View="&View &"<br>")
'response.write "selectclass="&selectclass
    
	AddDetail="INSERT INTO z_class (l_fid,l_name,l_detail,l_sort,l_tuijian,l_views) VALUES ('0','" &l_name& "','"&l_detail&"','"&l_sort&"','"&l_tuijian&"','" &l_views& "')"
    myConn.Execute (AddDetail)
	  
	myconn.close
	set rs=nothing
	set myconn=nothing
'
%>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=ProBigClass_List.asp">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>