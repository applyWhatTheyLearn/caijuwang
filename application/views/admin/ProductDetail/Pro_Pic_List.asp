<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->

<%	l_classid=trim(request.QueryString("l_classid"))
	search="select * from z_product where l_id="&l_classid&""
	Set rs = myConn.execute (search)
	if not rs.eof then product_name=Trim(rs("l_name"))	
	rs.close


	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from z_productpic where l_productid="&l_classid&" order by l_sort desc"
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
		 
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>��ƷͼƬ�б�</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top">
	  
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td height="21">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td width="133" height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">��ƷͼƬ�б�</font></td>
              <td width="538" bgcolor="#FFFFCC">&nbsp;������Ʒ��[ <font color="#0000FF"><%= product_name %></font> ]</td>
              <td width="65" bgcolor="#FFFFCC"><div align="center"><a href="Pro_Pic_addPic.asp?l_classid=<%= l_classid %>">���ͼƬ</a></div></td>
            </tr>
          </table>
    <% if not rs.eof then %>
          <table width="700" border="0" align="center"  cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="11"><div align="right"><font color="#333333" size="2">��ҳ 
                  &lt;</font><font size="2"> 
                  <%
							 
					if request.querystring("pageno")<=0 then
					pageno=1
					else
					pageno=request.querystring("pageno")
					end if
							 
							 
							 intPageMax = 25 'ÿҳ�����ʾintPageMax����¼
							 intPageintNo = 1
							 if request.querystring("pageno") <= 0 then
							 intPageintNo = 1
							 else
							 intPageintNo = request.querystring("pageno")
							 end if
							 intNo = 1
							 intCountMax = rs.recordcount
							 if intCountMax <= 0 then
				'            û����ؼ�¼
							 intPageintNo = 1
							 end if
							 if (intPageintNo * intPageMax > intCountMax) then
							 intPageintNo = int(intCountMax / intPageMax) + 1
							 end if
							 rs.move (intPageintNo-1)*intPageMax
							 
							  dim count
							  count=rs.pagecount
										  
							 if intCountMax > 0 then
								  if intPageintNo > 1 then
								  %>
                  <a href="Pro_Pic_List.asp?pageno=1&l_classid=<%= l_classid %>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp; 
                  <%
									  response.write("<a href='Pro_Pic_List.asp?pageno="&intPageintNo-1&"&l_classid="&l_classid&"'>&lt;&lt;&lt;&lt;</a>")
								  end if
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) then
										  response.write("<font color=red>"&i&"</font> ")	
										  else
							  %>
                  <a href="Pro_Pic_List.asp?pageno=<%=i%>&l_classid=<%= l_classid %>"><%=i%></a> 
                  <%
										  end if
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
									 response.write("<a href='Pro_Pic_List.asp?pageno="&intPageintNo+1&"&l_classid="&l_classid&"'>&gt;&gt;&gt;&gt;</a>")
									 %>
                  &nbsp;&nbsp;<a href="Pro_Pic_List.asp?pageno=<%=count%>&l_classid=<%= l_classid %>"><font color="#333333">βҳ</font></a> 
                  <%
								  end if
							 end if
				
							%>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr> 
              <td width="36" height="19" bgcolor="#999966">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="90" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;ͼƬ</font></td>
              <td width="364" bgcolor="#999966"><font color="#FFFFFF" size="2">&nbsp;ͼƬע��</font></td>
              <td width="70" bgcolor="#999966"> 
              <div align="center"><font color="#FFFFFF">����</font> </div></td>
              <td width="45" bgcolor="#999966"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">״̬</font></div></td>
              <td width="39" bgcolor="#999966"><div align="center"><font color="#FFFFFF">�޸�</font></div></td>
              <td width="48" bgcolor="#999966"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <%
						 dim num 
						 num=1 
						 do while (not rs.eof) and (intNo<=intPageMax) 
						 l_id=Trim(Rs("l_id"))
						 l_pic=Trim(Rs("l_pic"))
						 l_ext=Trim(Rs("l_ext"))
						 l_sort=Trim(Rs("l_sort")) 
						 l_views=Trim(Rs("l_views"))
						 l_title=Trim(Rs("l_title"))
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						%>
            <tr> 
              <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<%=Num%></font></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<a href="../../folder/product/<%= l_pic %>.<%= l_ext %>" target="_blank"><img src="../../folder/product/<%= l_pic %>.<%= l_ext %>" alt="" name="qas" height="30" border="0"></a></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<%=l_title%></td>
              <td bgcolor="F1F0F1"><div align="center"><font color="<%= SelectColor %>"><%= l_sort %></font></div></td>
              <td bgcolor="F1F0F1"> 
                <div align="center"><font color="<%= SelectColor %>"><%=l_views%></font></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="Pro_Pic_modiPic.asp?l_id=<%=l_id%>&l_classid=<%= l_classid %>&pageno=<%= pageno %>"><font size="2">�޸�</font></a></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="Pro_Pic_del.asp?l_id=<%=l_id%>&l_classid=<%= l_classid %>&pageno=<%= pageno %>">ɾ��</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="11" bgcolor="#999999"></td>
            </tr>
            <%
					Num=Num+1
					intNo = intNo +1						
					rs.movenext
					loop
					%>
            <tr> 
              <td height="21" colspan="11" valign="top"><font color="#333333" size="2">��ҳ 
                &lt;</font><font size="2"> 
                <%
	       if intCountMax > 0 then
		          if intPageintNo > 1 then
				   %>
                <a href="Pro_Pic_List.asp?pageno=1&l_classid=<%= l_classid %>"><font color="#333333">��ҳ</font></a> 
                &nbsp;&nbsp; 
                <%
			          response.write("<a href='Pro_Pic_List.asp?pageno="&intPageintNo-1&"&l_classid="&l_classid&"'>&lt;&lt;&lt;&lt;</a>")
		          end if
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) then
				          response.write("<font color=red>"&i&"</font> ")	
			              else
              		%>
                <a href="Pro_Pic_List.asp?pageno=<%=i%>&l_classid=<%= l_classid %>"><%=i%></a> 
                <%
			              end if
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
			         response.write("<a href='Pro_Pic_List.asp?pageno="&intPageintNo+1&"&l_classid="&l_classid&"'>&gt;&gt;&gt;&gt;</a>")
					  %>
                &nbsp;&nbsp;<a href="Pro_Pic_List.asp?pageno=<%=count%>&l_classid=<%= l_classid %>"><font color="#333333">βҳ</font></a> 
                <%
		          end if
	         end if
			%>
                <font color="#333333">&gt;</font></font></td>
            </tr>
        </table>
<% end if %>      </td>
    </tr>
  </table>

</body>
</html>
<%
 
  Myconn.close
  set Myconn=nothing
%>