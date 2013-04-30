
<!--#include file="../../_inc/checkoutTime2.php" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<?phpServer.ScriptTimeOut=5000?>


<?php
ID=trim(request("ID"))
dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
set upload=new upload_5xsoft ''�����ϴ�����
w_id=$_POST["w_id")
class_id=$_POST["class_id")

'echo ("t_id="&t_id &"<br>")
'echo upload.Version&"<br><br>"  ''显示�ϴ���İ汾

	
	search="select w_id,w_pic,w_ext from z_comate where w_id="&w_id&""
	$msql->query(search)
	w_picIsNull=IsNull(trim($msql->f("w_pic")))
	w_picName=trim($msql->f("w_pic"))
	w_ext=trim($msql->f("w_ext"))
	'response.Write("w_picIsNull="&w_picIsNull)

	formPath="../../folder/comatepic/"
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
			
			if oFile.FileSize>=100000 {
			 ?>
			 <script language=javascript>
                     history.back()
                     alert("�ϴ��ļ����ܳ����ܳ���100K暂无内容��ļ���СΪ{ <?php echo $imageSize?> }已超过了限制")
             </script>
             <?php
            response.end
			}

			PicName=GetNewFileName()
			
			'�ж��Ƿ��ϴ���ͼƬ
			if w_picIsNull="True" { 'w_pic �ֶ�Ϊ�ո���w_pic�ֶ�ֵ
			modiPic="update z_comate set w_pic='"&PicName&"',w_ext='"&oFile.FileExt &"' where w_id="&w_id&""
			'echo "modiPic="&modiPic &"<br>"
			$msql->query (modiPic)
			oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)
			else
				if oFile.FileExt=w_ext { '�ļ���׺���ϴ����ļ���׺��ͬʱ�ļ暂无内容ֱ�Ӵ���
				oFile.SaveAs Server.mappath(formPath&w_picName&"."&oFile.FileExt)
				else '���º�׺�������º�׺�洢�ļ���ɾ����ļ�
				updatepicname="update z_comate set w_ext='"&oFile.FileExt&"' where w_id="&w_id&""
				$msql->query (updatepicname)
				oFile.SaveAs Server.mappath(formPath&w_picName&"."&oFile.FileExt)
				
					Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
					Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
					sMapFileName = Path &"folder\comatepic\"& w_picName&"."&w_ext
	
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
<meta http-equiv="refresh" content="0;url=Comate_list.php?class_id=<?php echo $class_id ?>">
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
