<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" --><%
	
	'Set rs = Server.CreateObject("ADODB.RecordSet") 
	'Search = "select * from FenXiaoWL"
    'Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	
			SearchClass=Request(Trim("SearchClass"))	
			Set rs = Server.CreateObject("ADODB.Recordset")
			Search = "Select * From w_user where 1=1 order by meid desc"
			
			Select Case SearchClass 
				   Case "����"
				   Sname=Trim(Request("SearchDetail"))
				   ChackError Sname,"����"
				   Search = "Select * From w_user where  ( agent_Name like '%" & Sname & "%')  ORDER BY Meid DESC"
				   Case "�û�����"
				   UserLevel=Trim(Request("SearchDetail"))
				   ChackError UserLevel,"�û�����"
				   Search = "Select * From w_user where  ( Userlevel like '%" & UserLevel & "%')  ORDER BY Meid DESC"
				   Case "�û�״̬"
				   UserStau=Trim(Request("SearchDetail"))
				   ChackError UserStau,"�û�״̬"
				   Search = "Select * From w_user where  ( UserStau like '%" & UserStau & "%')  ORDER BY Meid DESC"  
				   Case "ʡ��"
				   Sshengfen=Trim(Request("SearchDetail"))
				   ChackError Sshengfen,"ʡ��"
				   Search = "Select * From w_user where  ( province like '%" & Sshengfen & "%')  ORDER BY Meid DESC"
				   Case "��˾���"
				   Scomanyname=Trim(Request("SearchDetail"))
				   ChackError Scomanyname,"��˾���"
				   Search = "Select * From w_user where  ( Company_Name like '%" & Scomanyname & "%')  ORDER BY Meid DESC"
				   Case "��ַ"
				   SAddress=Trim(Request("SearchDetail"))
				   ChackError SAddress,"��ַ"
				   Search = "Select * From w_user where  ( Address like '%" & SAddress & "%')  ORDER BY Meid DESC"

			End Select
		
			
			dim Search
			Rs.open Search,Myconn,adOpenStatic,adLockReadOnly	
	
	
		 
'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�û��б�</title>
<script language="JavaScript">
<!-- Hiding
  function loadtwo(page2, page3) {
     parent.leftFrame.location.href=page2;
     parent.mainFrame.location.href=page3;
}
// -->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999"> 
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4"> 
      <td height="230" valign="top"> 
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <tr> 
              <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�û��б�</font></td>
              <form name="form1" method="post" action="Member_List.asp">
                <td width="514" bgcolor="#FFFFFF"> <div align="right"><font color="#333333" size="2">��ѯ��</font> 
                    <select name="SearchClass">
                      <option>�����û�</option>
                      <option value="����">�û�����</option>
					  <option value="�û�����">�û�����</option>
					  <option value="�û�״̬">�û�״̬</option>
                      <option value="ʡ��">����ʡ��</option>
                      <option value="��˾���">��˾���</option>
                      <option value="��ַ">��˾��ַ</option>
                    </select>
                    <input name="SearchDetail" type="text" size="20">
                    <input type="submit" name="Submit" value="��ѯ">
                  </div></td>
                <td width="89" bgcolor="#FFFFFF"><div align="center"><a href="Member_add.asp">������û�</a></div></td>
              </form>
            </tr>
          </table>
          <% if not rs.eof then %>
          <table width="740" border="0" cellpadding="0" cellspacing="1">
            <tr> 
              <td height="15" colspan="13"><div align="right"><font color="#333333" size="2">��ҳ 
                  &lt;</font><font size="2"> 
                  <%
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
                  <a href="Member_List.asp?pageno=1"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp; 
                  <%
									  response.write("<a href='Member_List.asp?pageno="&intPageintNo-1&"'>&lt;&lt;&lt;&lt;</a>")
								  end if
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) then
										  response.write("<font color=red>"&i&"</font> ")	
										  else
							  %>
                  <a href="Member_List.asp?pageno=<%=i%>"><%=i%></a> 
                  <%
										  end if
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
									 response.write("<a href='Member_List.asp?pageno="&intPageintNo+1&"'>&gt;&gt;&gt;&gt;</a>")
									 %>
                  &nbsp;&nbsp;<a href="Member_List.asp?pageno=<%=count%>"><font color="#333333">βҳ</font></a> 
                  <%
								  end if
							 end if
				
							%>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr> 
              <td width="48" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="73" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;��Ա��</font> 
                <div align="center"></div></td>
              <td width="115" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;�û�����</font></td>
              <td width="142" bgcolor="#999999"><font color="#FFFFFF">&nbsp;�ǳ�</font></td>
              <td width="187" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ע��ʱ��</font></div></td>
              <td width="53" bgcolor="#999999"><div align="center"><font color="#FFFFFF">��½����</font></div></td>
              <td width="43" bgcolor="#999999"><div align="center"><font color="#FFFFFF">״̬</font></div></td>
              <td width="34" bgcolor="#999999"><div align="center"><font color="#FFFFFF">�޸�</font></div></td>
              <td width="35" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <%
			dim num 
			num=1 
			do while (not rs.eof) and (intNo<=intPageMax) 
			Meid=Trim(Rs("Meid"))
			UserName=Trim(Rs("UserName"))
			NickName=Trim(Rs("NickName"))
			Cnum=Trim(Rs("Cnum")) 
			RegTime=Trim(Rs("RegTime"))
			LoginNum=Trim(Rs("LoginNum")) 
			Views=Trim(Rs("Views")) 
			
			pageno=Trim(Request.QueryString("pageno"))
			if pageno="" then
			pageno=1
			end if			 
			'Response.Write("OpenView="&OpenView )
			'Response.Write("SelectColor="&SelectColor &"<br>")
			%>
            <tr bgcolor="#F1F0F1" onMouseOver="this.style.background = '#ffffff'" onMouseOut="this.style.background = '#F1F0F1'"> 
              <td valign="top"><font size="2">&nbsp;<font color="#993300"><%=Num%></font></font></td>
              <td height="18" >&nbsp;<%= Cnum %></td>
              <td height="18" >&nbsp;<a href="Member_Detail.asp?Meid=<%=Meid%>&pageno=<%=pageno%>"><%= UserName %></a></td>
              <td height="18" >&nbsp;<%= NickName %></td>
              <td height="18" bgcolor="#C2C2C2"><div align="center"><%= RegTime %></div></td>
              <td height="18" bgcolor="#CCCCCC"><div align="center"><%= LoginNum %></div></td>
              <td><div align="center"><%= Views %></div></td>
              <td> <div align="center"><a href="Member_Modi.asp?Meid=<%=Meid%>&pageno=<%=pageno%>"><font size="2">�޸�</font></a></div></td>
              <td> <div align="center"><a href="Member_Del.asp?Meid=<%=Meid%>&pageno=<%=pageno%>"> 
                  ɾ��</a></div></td>
            </tr>
            <tr> 
              <td height="1" colspan="13" bgcolor="#999999"></td>
            </tr>
            <%
					Num=Num+1
					intNo = intNo +1						
					rs.movenext
					loop
					%>
            <tr> 
              <td height="21" colspan="13" valign="top"><font color="#333333" size="2">��ҳ 
                &lt;</font><font size="2"> 
                <%
	       if intCountMax > 0 then
		          if intPageintNo > 1 then
				   %>
                <a href="Member_List.asp?pageno=1"><font color="#333333">��ҳ</font></a> 
                &nbsp;&nbsp; 
                <%
			          response.write("<a href='Member_List.asp?pageno="&intPageintNo-1&"'>&lt;&lt;&lt;&lt;</a>")
		          end if
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) then
				          response.write("<font color=red>"&i&"</font> ")	
			              else
              		%>
                <a href="Member_List.asp?pageno=<%=i%>"><%=i%></a> 
                <%
			              end if
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 then
			         response.write("<a href='Member_List.asp?pageno="&intPageintNo+1&"'>&gt;&gt;&gt;&gt;</a>")
					  %>
                &nbsp;&nbsp;<a href="Member_List.asp?pageno=<%=count%>"><font color="#333333">βҳ</font></a> 
                <%
		          end if
	         end if
			%>
                <font color="#333333">&gt;</font></font></td>
            </tr>
          </table>
          <% else %>
          <table width="740" height="69" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td bgcolor="#FFFFFF"><div align="center"><a href="Member_add.asp">�������ݣ��������Ϸ������������������</a></div></td>
            </tr>
          </table>
          <% end if %>
        </div></td>
    </tr>
  </table>
</body>
</html>
<%
 	Function ChackError(ce,cans) 
		if len(ce)=0 then
		 %>
		 <script language=vbscript>
				 history.back()
				 alert("[ <%=cans%>  ] ����Ϊ������������ ��")
		 </script>
		 <%
		response.end 
		end if
		
	for i=1 to len(ce) 
	'��MID�����������user��i λ�õ�һ���ַ� 
	us=mid(ce,i,1) 
	'���������ַ���бȽ� 
	if us="'" or us="<" or us=">" or us="&" or us="`" then 
	'����������ַ������ʾ�����ܺ������������ַ�
     %>
     <script language=vbscript>
             history.back()
             alert("[ <%=cans%>  ] ���ܺ���[    '  <  >  &  `   ]�ȷǷ��ַ����������� ��")
     </script>
     <%
	response.end 
	end if 
	next 
	
	End Function

 
  Myconn.close
  set Myconn=nothing
  
  
%>