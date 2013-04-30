<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
		<%
			  'AccID=Trim(request.QueryString("AccID"))
			  l_fid=Trim(request.QueryString("l_id"))
			  'l_fid=1
			  Set rs1 = Server.CreateObject("ADODB.RecordSet") 
			  'Search1 = "select * from Accredit where FotherID='"&AccID&"' and AdminID='"&AdminID&"' order by compositor"
			  Search1 = "select * from z_class  where l_fid="&l_fid&" order by l_sort desc"
			  Rs1.open Search1,myConn,adOpenStatic,adLockReadOnly
			  response.charset="gb2312"
			  n=1
			  do while not rs1.eof
			  l_classid=Trim(Rs1("l_id"))
			  TitleName1=left(Trim(Rs1("l_name")),9)
			  'l_state=Trim(Rs1("l_state"))
			  'LinkName1=Trim(Rs1("l_city"))
		  		  		
		%>
				<table width=180 border=0 align=center cellpadding=1 cellspacing="1">
                 <tr>
                  <td width=14 background="images/line-3.gif" bgcolor=#EEEEEE>&nbsp;</td>
                  <td width=152 background="images/line-3.gif" bgcolor=#EEEEEE><%= n %>¡¢<font color="#003366"><a href="Pro_list.asp?l_classid=<%= l_classid %>" target="window_main"><%= TitleName1 %></a></font>                  </td>
                 </tr>
                </table>
				<%
				  n=n+1
				  rs1.movenext
				  loop
				  rs1.close	
				  myconn.close
				  set rs1=nothing
				  set myconn=nothing			
				%>
				<table width=180 border=0 align=center cellpadding=1 cellspacing="1">
                 <tr>
                   <td height="4" colspan="2"></td>
                  </tr>
                </table>