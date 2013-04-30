<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<%Server.ScriptTimeOut=5000%>


<%

	dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file,l_url
	set upload=new upload_5xsoft ''建立上传对象
	l_id=upload.form("l_id")
	l_title=upload.form("l_title")
	l_url=upload.form("l_url")
	
	'response.Write("l_url="&l_url &"<br>")
	search="select l_id,l_ext from w_ad_pic where l_id="&l_id&""
	Set rs = myConn.execute (search)
	l_pic_ext=trim(rs("l_ext"))
	rs.close

Set oFile = upload.file("file1")

if oFile.FileSize<>0 then
'response.write ("oFile.FileSize="&oFile.FileSize &"<br>")
'response.write upload.Version&"<br><br>"  ''显示上传类的版本

	
	search="select l_id,l_pic,l_ext from w_ad_pic where l_id="&l_id&""
	set rs=myConn.execute (search)
	l_picIsNull=IsNull(Trim(rs("l_pic")))
	l_picName=Trim(rs("l_pic"))
	l_ext=Trim(rs("l_ext"))
	'response.Write("l_picIsNull="&l_picIsNull)

	formPath="../../images/"
	if right(formPath,1)<>"/" then formPath=formPath&"/" 

			'Set oFile = upload.file("file1")
	   		If oFile.FileSize <1024 Then
	   		imageSize=oFile.FileSize & " Bytes"
			ElseIf oFile.FileSize < 1048576 Then
	   		imageSize= Round(oFile.FileSize / 1024.1) & " KB"
	   		Else
	   		imageSize= Round((oFile.FileSize/1024)/1024.1) & " MB"
	   		End If	
			
			FileExt="gif/jpg/bmp/"
			'if Instr(FileExt,oFile.FileExt)=0 then 
			 if oFile.FileExt<>l_pic_ext then
			 %>
			 <script language=javascript>
                     history.back()
                     alert("您只能上传后缀为{ <%=l_pic_ext%> }文件")
             </script>
             <%
            response.end			
			end if
			
			if oFile.FileSize>=200000 then 
			 %>
			 <script language=javascript>
                     history.back()
                     alert("上传文件不能超过不能超过200K！您输入的文件大小为{ <%=imageSize%> }已超过了限制")
             </script>
             <%
            response.end
			end if	

			PicName=GetNewFileName()
			
			'判断是否上传过图片
			if l_picIsNull="True" then 'l_pic 字段为空更新l_pic字段值
			modiPic="update w_ad_pic set l_pic='"&PicName&"',l_ext='"&oFile.FileExt &"' where l_id="&l_id&""
			'response.write "modiPic="&modiPic &"<br>"
			myConn.Execute (modiPic)
			oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)
			else
				if oFile.FileExt=l_ext then '文件后缀与上传的文件后缀相同时文件不需改名直接存贮
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				else '更新后缀并按照新后缀存储文件并删除久文件
				updatepicname="update w_ad_pic set l_ext='"&oFile.FileExt&"' where l_id="&l_id&""
				myConn.Execute (updatepicname)
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				
					Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
					Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
					sMapFileName = Path &"images\"& l_picName&"."&l_ext
	
					If oFSO.FileExists(sMapFileName) = True Then
					oFSO.DeleteFile(sMapFileName)
					End If				
				end if
						
			end if
			
			
	'取得一个不重复的序号
	Public Function GetNewFileName()
		dim ranNum
		dim dtNow
		dtNow=Now()
		'ranNum=int(90000*rnd)+10000
		dim rndnum,num
		Randomize
		Do while Len(rndnum)<5
		num = Cstr(Chr((57-48)*rnd+48))
		rndnum = rndnum & num
		Loop		
		GetNewFileName=year(dtNow) & right("0" & month(dtNow),2) & right("0" & day(dtNow),2) & right("0" & hour(dtNow),2) & right("0" & minute(dtNow),2) & right("0" & second(dtNow),2) & rndnum
	End Function

'sub HtmEnd(Msg)
' set upload=nothing
' response.write "<br>"&Msg&" [<a href=""javascript:history.back();"">返回</a>]</body></html>"
' response.end
'end sub

'Htmend iCount&" 个文件上传结束!"	

set oFile=nothing
set upload=nothing  ''删除此对象

end if

	'response.Write("l_classid="&l_classid&"<br>")	
	'response.Write("l_id="&l_id&"<br>")

modiDetail="update w_ad_pic set l_url='"&l_url&"',l_title='"&l_title&"' where l_id="&l_id&""
'response.write "modiPic="&modiDetail &"<br>"
myConn.Execute (modiDetail)	

myconn.close
set rs=nothing
set myconn=nothing

%>
<html>
<head>
<title>modipic</title>
<meta http-equiv="refresh" content="0;url=pic_list.html">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>信息已修改</strong></font> </p>
</div>
</body>
</html>
