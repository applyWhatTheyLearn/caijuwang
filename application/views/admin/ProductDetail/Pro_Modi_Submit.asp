<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	l_id=request.Form("l_id")
	pageno=Trim(Request.Form("pageno"))
	l_classid=Trim(request.Form("l_classid"))
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


	'updateInfo="update z_product set l_name='"&l_name&"',l_name_e='"&l_name_e&"'',l_basic='"&l_basic&"',l_basic_e='"&l_basic_e&"',l_extend='"&l_extend&"',l_extend_e='"&l_extend_e&"',l_price1='"&l_price1&"',l_price2='"&l_price2&"',l_units='"&l_units&"',l_num='"&l_num&"',l_sort='"&l_sort&"',l_tuijian='"&l_tuijian&"',l_views='"&l_views&"' where l_id='"&l_id&"'"
	'myConn.execute (updateInfo)

      Set rs = Server.CreateObject("ADODB.Recordset")
      Member="select * from z_product where l_id="&l_id&""
      rs.open Member,Myconn,1,3	  
	  rs("l_name")=l_name
	  rs("l_basic")=l_basic
	  rs("l_extend")=l_extend
	  rs("l_price1")=l_price1
	  rs("l_price2")=l_price2
	  rs("l_units")=l_units
	  rs("l_num")=l_num
	  rs("l_sort")=l_sort
	  rs("l_tuijian")=l_tuijian
	  rs("l_views")=l_views
      rs.update
      rs.close

	Myconn.close
  	set Myconn=nothing

'
%>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=Pro_List.asp?l_classid=<%= l_classid %>&pageno=<%= pageno %>">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
