<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<%Server.ScriptTimeOut=5000%>


<%
ID=Trim(request("ID"))
dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
set upload=new upload_5xsoft ''�����ϴ�����
l_id=upload.form("l_id")
pageno=upload.form("pageno")

'response.write ("t_id="&t_id &"<br>")
'response.write upload.Version&"<br><br>"  ''��ʾ�ϴ���İ汾

	
	search="select l_id,l_pic,l_ext from z_class where l_id="&l_id&""
	set rs=myConn.execute (search)
	l_picIsNull=IsNull(Trim(rs("l_pic")))
	l_picName=Trim(rs("l_pic"))
	l_ext=Trim(rs("l_ext"))
	'response.Write("w_picIsNull="&w_picIsNull)

	formPath="../../folder/productClassPic/"
	if right(formPath,1)<>"/" then formPath=formPath&"/" 

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
			
			'�ж��Ƿ��ϴ���ͼƬ
			if l_picIsNull="True" then 'l_pic �ֶ�Ϊ�ո���l_pic�ֶ�ֵ
			modiPic="update z_class set l_pic='"&PicName&"',l_ext='"&oFile.FileExt &"' where l_id="&l_id&""
			'response.write "modiPic="&modiPic &"<br>"
			myConn.Execute (modiPic)
			oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)
			else
				if oFile.FileExt=l_ext then '�ļ���׺���ϴ����ļ���׺��ͬʱ�ļ��������ֱ�Ӵ���
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				else '���º�׺�������º�׺�洢�ļ���ɾ�����ļ�
				updatepicname="update z_class set l_ext='"&oFile.FileExt&"' where l_id="&l_id&""
				myConn.Execute (updatepicname)
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				
					Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
					Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
					sMapFileName = Path &"folder\productClassPic\"& l_picName&"."&l_ext
	
					If oFSO.FileExists(sMapFileName) = True Then
					oFSO.DeleteFile(sMapFileName)
					End If				
				end if
						
			end if
			
			
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

'sub HtmEnd(Msg)
' set upload=nothing
' response.write "<br>"&Msg&" [<a href=""javascript:history.back();"">����</a>]</body></html>"
' response.end
'end sub

'Htmend iCount&" ���ļ��ϴ�����!"	

set oFile=nothing
set upload=nothing  ''ɾ���˶���




%>
<html>
<head>
<title>modipic</title>
<meta http-equiv="refresh" content="0;url=ProBigClass_list.asp?pageno=<%= pageno %>">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>��Ϣ���޸�</strong></font> </p>
</div>
</body>
</html>
