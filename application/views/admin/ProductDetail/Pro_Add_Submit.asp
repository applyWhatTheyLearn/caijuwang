<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
l_classid=Trim(request.Form("l_classid"))
l_fid=Trim(request.Form("l_fid"))
l_name=Trim(request.Form("l_name"))
l_basic=Trim(request.Form("l_basic"))
l_extend=Trim(request.Form("l_extend"))
l_price1=Trim(request.Form("l_price1"))
l_price2=Trim(request.Form("l_price2"))
l_units=Trim(request.Form("l_units"))
l_num=Trim(request.Form("l_num"))
l_sort=request.Form("l_sort")
l_tuijian=request.Form("l_tuijian")
l_views=Request.Form("l_views")
ChackNum l_sort,"排序"

'response.write("ZongDaiJG="&ZongDaiJG &"<br>")
'response.write("addpic="&addpic &"<br>")
'response.write("FenDaiJG="&FenDaiJG &"<br>")
'response.write("ChanPinSM="&ChanPinSM &"<br>")
'response.write("JiShuWT="&JiShuWT &"<br>")
'response.write("View="&View &"<br>")
'response.write "selectclass="&selectclass
 	AddDetail="INSERT INTO z_product (l_fid,l_classid,l_name,l_basic,l_extend,l_price1,l_price2,l_units,l_num,l_sort,l_tuijian,l_views) VALUES ('"&l_fid&"','"&l_classid&"','"&l_name&"','" &l_basic& "','"&l_extend&"','"&l_price1&"','"&l_price2&"','"&l_units&"','"&l_num&"','"&l_sort&"','"&l_tuijian&"','"&l_views&"')"
	   
	'AddDetail="INSERT INTO z_product (l_fid,l_classid,l_name,l_sort,l_tuijian,l_views) VALUES ('"&l_fid&"','"&l_classid&"','"&l_name&"','"&l_sort&"','"&l_tuijian&"','"&l_views&"')"
    myConn.Execute (AddDetail)
	'response.write("AddDetail="&AddDetail &"<br>")  
	myconn.close
	set rs=nothing
	set myconn=nothing
'
%>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=Pro_List.asp?l_classid=<%= l_classid %>">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>