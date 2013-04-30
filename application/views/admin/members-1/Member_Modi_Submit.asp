<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<!--#include file="../md5.asp"-->

<%
LogTime=Now()
Meid=Trim(request.Form("Meid"))
Cnum=Trim(request.Form("Cnum"))
NickName=Trim(request.Form("NickName"))
UserName=Trim(request.Form("UserName"))
sex=Trim(request.Form("sex"))
UserPass=Trim(request.Form("UserPass"))
ReUserPass=Trim(request.Form("ReUserPass"))
UserLevel=Trim(request.Form("UserLevel"))
address=Trim(request.Form("address"))
postcode=Trim(request.Form("postcode"))
Tel=Trim(request.Form("Tel"))
Email=Trim(request.Form("Email"))
Msn=Trim(request.Form("Msn"))
QQ=Trim(request.Form("QQ"))
Detail=Trim(request.Form("Detail"))
shibie=Trim(request.Form("shibie"))
Views=Trim(request.Form("Views"))
Photo=Trim(request.Form("Photo"))

ChackError NickName,"用户昵称"
ChackError UserName,"真实姓名"
if len(UserPass)<>0 and len(ReUserPass)<>0 then
ChackPass  UserPass,ReUserPass,"用户密码"
end if
'ChackError shibie,"识别信息"
'response.write("LogTime="&LogTime &"<br>")
'response.write("ChanPinMC="&ChanPinMC &"<br>")
'response.write("ZongDaiJG="&ZongDaiJG &"<br>")
'response.write("addpic="&addpic &"<br>")
'response.write("FenDaiJG="&FenDaiJG &"<br>")
'response.write("ChanPinSM="&ChanPinSM &"<br>")
'response.write("JiShuWT="&JiShuWT &"<br>")
'response.write("View="&View &"<br>")
'response.write "selectclass="&selectclass

      Set rs = Server.CreateObject("ADODB.Recordset")
      sql="select * from w_user where meid='"&meid&"'"
      rs.open sql,Myconn,1,3
	  rs("NickName")=NickName
      rs("UserName")=UserName
	  rs("sex")=sex
	  if len(UserPass)<>0 and len(ReUserPass)<>0 then
	  rs("UserPass")=md5(UserPass)
	  end if
	  rs("UserLevel")=UserLevel
	  rs("address")=address
      rs("postcode")=postcode
	  rs("Tel")=Tel
	  rs("Email")=Email
	  rs("Msn")=Msn
	  rs("QQ")=QQ
	  rs("Detail")=Detail
	  rs("Views")=Views
	  rs("Photo")=Photo
      rs.update
	  rs.close



	'response.Write("addpic="&addpic)

'
%>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=Member_List.asp">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table width="40%" border="1" cellspacing="10" cellpadding="0" align="center" class="table">
  <tr> 
    <td> 
            
      <table width="100%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" bordercolorlight="#000000">
        <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr> 
                
          <td align="center"><b><font color="#990000">更新添加成功!</font></b></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
              <tr> 
                
          <td align="center">&nbsp;</td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
            </table>
    </td>
  </tr>
</table>
</body>
</html><% 
	Function ChackError(ce,detailin) 
	if len(trim(ce))=0 then
     %>
     <script language=javascript>
             history.back()
             alert("[ <%=detailin%>  ] 不能为空！请重新输入数据 ！")
     </script>
     <%
	response.end 	
	end if
	
	for i=1 to len(ce) 
	'用MID函数读出变量user中i 位置的一个字符 
	us=mid(ce,i,1) 
	'将读出的字符进行比较 
	if us="'" or us="%" or us="<" or us=">" or us="&" or us="`" or us="\" or us="/" then 
	'如果含有以上字符将出错提示，不能含有以上特殊字符
     %>
     <script language=vbscript>
             history.back()
             alert("[ <%=detailin%>  ] 中不能含有[  ' %  <  >  & \  /  ` ]等非法字符请重新输入 ！")
     </script>

     <%
	response.end 
	end if 
	next 
	End Function
	
	Function ChackNum(num,info)
	
	for ii=1 to len(num)
	UsNum=mid(num,ii,1) 
	if Asc(UsNum)<48 or Asc(UsNum)>57 then
     %>
		 <script language=vbscript>
				 history.back()
				 alert("[ <%=info%>  ] 只能是数字 ！")
		 </script>
     <%
	response.end 	
	end if
	next
	End Function
	
	Function ChackPass(P,RP,info)

	if len(trim(P))=0 or len(trim(RP))=0 then
     %>
     <script language=javascript>
             history.back()
             alert("[ <%=info%>  ] 不能为空！")
     </script>
     <%
	response.end 	
	end if
	
	for i=1 to len(p) 
	'用MID函数读出变量user中i 位置的一个字符 
	Pass=mid(p,i,1) 
	ChackPass=mid(RP,i,1) 
	'将读出的字符进行比较 
	if Pass<>ChackPass then 
	'如果含有以上字符将出错提示，不能含有以上特殊字符
     %>

     <script language=vbscript>
             history.back()
             alert("<%=info%>有误请检查密码！")   
     </script>
     <%
	response.end 
	end if 
	next 	
	
	End Function
%>