<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<%
	l_id=Trim(request.QueryString("l_id"))
    l_classid=Trim(request.QueryString("l_classid"))
    pageno=Trim(request.QueryString("pageno"))
	modiPic="update z_product set l_tuijian='²»ÍÆ¼ö' where l_id="&l_id&""
	'response.write "modiPic="&modiPic &"<br>"
	myConn.Execute (modiPic)
	
		

   myConn.close
   set myConn=nothing
   response.redirect("Pro_TjList.asp?l_classid="&l_classid&"&pageno="&pageno&"")  		  		
%>

