<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/func.asp"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<%Server.ScriptTimeOut=5000%>


<%
dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
set upload=new upload_5xsoft ''建立上传对象
w_id=upload.form("w_id")
w_title=upload.form("w_title")
w_sort=upload.form("w_sort")
w_views=upload.form("w_views")
ChackNum w_sort,"排序"

'response.write ("t_id="&t_id &"<br>")
'response.write upload.Version&"<br><br>"  ''显示上传类的版本

	
	search="select w_id,w_title,w_filename,w_ext,w_sort,w_views from w_address where w_id="&w_id&""
	set rs=myConn.execute (search)
	
	'w_title=Trim(rs("w_title"))
	w_filename=Trim(rs("w_filename"))
	w_ext=Trim(rs("w_ext"))
	'response.Write("w_picIsNull="&w_picIsNull)
	rs.close
	set rs=nothing

	formPath="../../folder/Addressbook/"
	if right(formPath,1)<>"/" then formPath=formPath&"/" 

			Set oFile = upload.file("file1")
	   		If oFile.FileSize <1024 Then
	   		imageSize=oFile.FileSize & " Bytes"
			ElseIf oFile.FileSize < 1048576 Then
	   		imageSize= Round(oFile.FileSize / 1024.1) & " KB"
	   		Else
	   		imageSize= Round((oFile.FileSize/1024)/1024.1) & " MB"
	   		End If	
			
			FileExt="rar/zip/doc/pdf/xls/"
			if Instr(FileExt,oFile.FileExt)=0 then 
			 %>
			 <script language=javascript>
                     history.back()
                     alert("您只能上传后缀为{ <%=FileExt%> }文件")
             </script>
             <%
            response.end			
			end if
			
			if oFile.FileSize>=10000000 then 
			 %>
			 <script language=javascript>
                     history.back()
                     alert("上传文件不能超过不能超过10兆！您输入的文件大小为{ <%=imageSize%> }已超过了限制")
             </script>
             <%
            response.end
			end if		

			PicName=GetNewFileName()
			
			if oFile.FileExt=w_ext then '文件后缀与上传的文件后缀相同时文件不需改名直接存贮
			updatepicname="update w_address set w_title='"&w_title&"',w_sort='"&w_sort&"',w_views='"&w_views&"' where w_id="&w_id&""
			myConn.Execute (updatepicname)
			myconn.close
			set myconn=nothing			
			oFile.SaveAs Server.mappath(formPath&w_filename&"."&oFile.FileExt)
			else '更新后缀并按照新后缀存储文件并删除久文件
			updatepicname="update w_address set w_title='"&w_title&"',w_ext='"&oFile.FileExt&"',w_sort='"&w_sort&"',w_views='"&w_views&"' where w_id="&w_id&""
			myConn.Execute (updatepicname)
			myconn.close
			set myconn=nothing
			
			oFile.SaveAs Server.mappath(formPath&w_picName&"."&oFile.FileExt)
				
				Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
				Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
				sMapFileName = Path &"folder\Addressbook\"&w_filename &"."&w_ext
	
				If oFSO.FileExists(sMapFileName) = True Then
					oFSO.DeleteFile(sMapFileName)
				End If				
			end if
						
'sub HtmEnd(Msg)
' set upload=nothing
' response.write "<br>"&Msg&" [<a href=""javascript:history.back();"">返回</a>]</body></html>"
' response.end
'end sub

'Htmend iCount&" 个文件上传结束!"	

set oFile=nothing
set upload=nothing  ''删除此对象




%>
<html>
<head>
<title>modipic</title>
<meta http-equiv="refresh" content="0;url=exponnet_list.asp">
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
