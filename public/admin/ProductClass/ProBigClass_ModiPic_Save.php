
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<?phpServer.ScriptTimeOut=5000?>


<?php
ID=trim(request("ID"))
dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
set upload=new upload_5xsoft ''�����ϴ�����
pageno=$_POST["pageno")
l_id=$_POST["l_id")

'echo ("t_id="&t_id &"<br>")
'echo upload.Version&"<br><br>"  ''显示�ϴ���İ汾

	
	search="select l_id,l_pic,l_ext from guojia where l_id=".$l_id.""
	$msql->query(search)
	l_picIsNull=IsNull(trim($msql->f("l_pic")))
	l_picName=trim($msql->f("l_pic"))
	l_ext=trim($msql->f("l_ext"))
	'response.Write("w_picIsNull="&w_picIsNull)

	formPath="../../pic/guojiapic/"
	if right(formPath,1)<>"/" { formPath=formPath&"/"

			Set oFile = upload.file("file1")
	   		If oFile.FileSize <1024 Then
	   		imageSize=oFile.FileSize & " Bytes"
			ElseIf oFile.FileSize < 1048576 Then
	   		imageSize= Round(oFile.FileSize / 1024.1) & " KB"
	   		Else
	   		imageSize= Round((oFile.FileSize/1024)/1024.1) & " MB"
	   		End If	
			
			FileExt="gif/jpg/bmp/"
			if Instr(FileExt,oFile.FileExt)=0 {
			 ?>
			 <script language=javascript>
                     history.back()
                     alert("��ֻ���ϴ���׺Ϊ{ <?php echo(FileExt?> }�ļ�")
             </script>
             <?php
            response.end			
			}
			
			if oFile.FileSize>=50000 {
			 ?>
			 <script language=javascript>
                     history.back()
                     alert("�ϴ��ļ����ܳ����ܳ���50K暂无内容��ļ���СΪ{ <?php echo $imageSize?> }已超过了限制")
             </script>
             <?php
            response.end
			}

			PicName=GetNewFileName()
			
			'�ж��Ƿ��ϴ���ͼƬ
			if l_picIsNull="True" { 'w_pic �ֶ�Ϊ�ո���w_pic�ֶ�ֵ
			modiPic="update guojia set l_pic='"&PicName&"',l_ext='"&oFile.FileExt &"' where l_id=".$l_id.""
			'echo "modiPic="&modiPic &"<br>"
			$msql->query (modiPic)
			oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)
			else
				if oFile.FileExt=l_ext { '�ļ���׺���ϴ����ļ���׺��ͬʱ�ļ暂无内容ֱ�Ӵ���
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				else '���º�׺�������º�׺�洢�ļ���ɾ����ļ�
				updatepicname="update guojia set l_ext='"&oFile.FileExt&"' where l_id=".$l_id.""
				$msql->query (updatepicname)
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				
					Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
					Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
					sMapFileName = Path &"pic\guojiapic\"& l_picName&"."&l_ext
	
					If oFSO.FileExists(sMapFileName) = True Then
					oFSO.DeleteFile(sMapFileName)
					End If				
				}
						
			}
			
			
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
	}

'sub HtmEnd(Msg)
' set upload=nothing
' echo "<br>"&Msg&" [<a href=""javascript:history.back();"">����</a>]</body></html>"
' response.end
'end sub

'Htmend iCount&" ���ļ��ϴ�����!"	

set oFile=nothing
set upload=nothing  ''ɾ��˶���




?>
<html>
<head>
<title>modipic</title>
<meta http-equiv="refresh" content="0;url=ProBigClass_List.php?pageno=<?php echo $pageno ?>&l_id=<?php echo $l_id ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>��Ϣ��修改</strong></font> </p>
</div>
</body>
</html>
