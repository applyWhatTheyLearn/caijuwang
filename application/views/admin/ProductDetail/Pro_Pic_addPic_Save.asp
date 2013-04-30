<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<%Server.ScriptTimeOut=5000%>

<%
	dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
	set upload=new upload_5xsoft ''建立上传对象
	l_classid=upload.form("l_classid")
	l_sort=upload.form("l_sort")
	l_views=upload.form("l_views")
	l_title=upload.form("l_title")
	
	'response.write upload.Version&"<br><br>"  ''显示上传类的版本
	
	formPath="../../folder/product/"
	if right(formPath,1)<>"/" then formPath=formPath&"/" 
	
	iCount=0
	'for each formName in upload.objForm ''列出所有form数据
	' response.write formName&"="&upload.form(formName)&"<br>"
	'next
	
	'response.write "<br>"

	   

		Set oFile = upload.file("file1")
		
		If oFile.FileSize <1024 Then
	   	imageSize=oFile.FileSize & " Bytes"
		ElseIf oFile.FileSize < 1048576 Then
	   	imageSize= Round(oFile.FileSize / 1024.1) & " KB"
	   	Else
	   	imageSize= Round((oFile.FileSize/1024)/1024.1) & " MB"
	   	End If
		
		FileExt="gif/jpg/bmp/"
		if Instr(FileExt,oFile.FileExt)=0 then 
		 %>
		 <script language=javascript>
                 history.back()
                 alert("您只能上传后缀为{ <%=FileExt%> }文件")
         </script>
         <%
         response.end			
		end if
			
		if oFile.FileSize>=100000 then 
		%>
		<script language=javascript>
                history.back()
                alert("上传文件不能超过不能超过100K！您输入的文件大小为{ <%=imageSize%> }已超过了限制")
        </script>
        <%
        response.end
		end if		
			

			PicName=GetNewFileName()
		    oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)   ''保存文件
		    
		    '图片信息入库
		    AddPic="INSERT INTO z_productpic (l_productid,l_title,l_pic,l_ext,l_sort,l_views) VALUES ('"&l_classid&"','"&l_title&"','"&PicName&"','"&oFile.FileExt&"','"&l_sort&"','"&l_views&"')"
		    'response.write "AddPic="&AddPic &"<br>"
			myConn.Execute (AddPic)
			set oFile=nothing
			set upload=nothing  ''删除此对象
				
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
			%>
                
<html>
<head>
<title>addpic</title>
<meta http-equiv="refresh" content="0;url=Pro_Pic_List.asp?l_classid=<%= l_classid %>">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>信息已添加</strong></font> </p>
</div>
</body>
</html>
