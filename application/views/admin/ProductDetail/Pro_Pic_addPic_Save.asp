<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<%Server.ScriptTimeOut=5000%>

<%
	dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
	set upload=new upload_5xsoft ''�����ϴ�����
	l_classid=upload.form("l_classid")
	l_sort=upload.form("l_sort")
	l_views=upload.form("l_views")
	l_title=upload.form("l_title")
	
	'response.write upload.Version&"<br><br>"  ''��ʾ�ϴ���İ汾
	
	formPath="../../folder/product/"
	if right(formPath,1)<>"/" then formPath=formPath&"/" 
	
	iCount=0
	'for each formName in upload.objForm ''�г�����form����
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
                 alert("��ֻ���ϴ���׺Ϊ{ <%=FileExt%> }�ļ�")
         </script>
         <%
         response.end			
		end if
			
		if oFile.FileSize>=100000 then 
		%>
		<script language=javascript>
                history.back()
                alert("�ϴ��ļ����ܳ������ܳ���100K����������ļ���СΪ{ <%=imageSize%> }�ѳ���������")
        </script>
        <%
        response.end
		end if		
			

			PicName=GetNewFileName()
		    oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)   ''�����ļ�
		    
		    'ͼƬ��Ϣ���
		    AddPic="INSERT INTO z_productpic (l_productid,l_title,l_pic,l_ext,l_sort,l_views) VALUES ('"&l_classid&"','"&l_title&"','"&PicName&"','"&oFile.FileExt&"','"&l_sort&"','"&l_views&"')"
		    'response.write "AddPic="&AddPic &"<br>"
			myConn.Execute (AddPic)
			set oFile=nothing
			set upload=nothing  ''ɾ���˶���
				
			'ȡ��һ�����ظ������
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
  <p><font color="#993300"><strong>��Ϣ�����</strong></font> </p>
</div>
</body>
</html>
