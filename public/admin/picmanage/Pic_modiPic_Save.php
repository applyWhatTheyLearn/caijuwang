
<!--#include file="../../_inc/checkoutTime2.php" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<?phpServer.ScriptTimeOut=5000?>


<?php

	dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file,l_url
	set upload=new upload_5xsoft ''�����ϴ�����
	l_id=$_POST["l_id")
	l_title=$_POST["l_title")
	l_url=$_POST["l_url")
	
	'response.Write("l_url="&l_url &"<br>")
	search="select l_id,l_ext from w_ad_pic where l_id=".$l_id.""
	 $msql->query (search)
	l_pic_ext=trim($msql->f("l_ext"))


Set oFile = upload.file("file1")

if oFile.FileSize<>0 {
'echo ("oFile.FileSize="&oFile.FileSize &"<br>")
'echo upload.Version&"<br><br>"  ''显示�ϴ���İ汾

	
	search="select l_id,l_pic,l_ext from w_ad_pic where l_id=".$l_id.""
	$msql->query(search)
	l_picIsNull=IsNull(trim($msql->f("l_pic")))
	l_picName=trim($msql->f("l_pic"))
	l_ext=trim($msql->f("l_ext"))
	'response.Write("l_picIsNull="&l_picIsNull)

	formPath="../../images/"
	if right(formPath,1)<>"/" { formPath=formPath&"/"

			'Set oFile = upload.file("file1")
	   		If oFile.FileSize <1024 Then
	   		imageSize=oFile.FileSize & " Bytes"
			ElseIf oFile.FileSize < 1048576 Then
	   		imageSize= Round(oFile.FileSize / 1024.1) & " KB"
	   		Else
	   		imageSize= Round((oFile.FileSize/1024)/1024.1) & " MB"
	   		End If	
			
			FileExt="gif/jpg/bmp/"
			'if Instr(FileExt,oFile.FileExt)=0 {
			 if oFile.FileExt<>l_pic_ext {
			 ?>
			 <script language=javascript>
                     history.back()
                     alert("��ֻ���ϴ���׺Ϊ{ <?php echo $l_pic_ext?> }�ļ�")
             </script>
             <?php
            response.end			
			}
			
			if oFile.FileSize>=200000 {
			 ?>
			 <script language=javascript>
                     history.back()
                     alert("�ϴ��ļ����ܳ����ܳ���200K暂无内容��ļ���СΪ{ <?php echo $imageSize?> }已超过了限制")
             </script>
             <?php
            response.end
			}

			PicName=GetNewFileName()
			
			'�ж��Ƿ��ϴ���ͼƬ
			if l_picIsNull="True" { 'l_pic �ֶ�Ϊ�ո���l_pic�ֶ�ֵ
			modiPic="update w_ad_pic set l_pic='"&PicName&"',l_ext='"&oFile.FileExt &"' where l_id=".$l_id.""
			'echo "modiPic="&modiPic &"<br>"
			$msql->query (modiPic)
			oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)
			else
				if oFile.FileExt=l_ext { '�ļ���׺���ϴ����ļ���׺��ͬʱ�ļ暂无内容ֱ�Ӵ���
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				else '���º�׺�������º�׺�洢�ļ���ɾ����ļ�
				updatepicname="update w_ad_pic set l_ext='"&oFile.FileExt&"' where l_id=".$l_id.""
				$msql->query (updatepicname)
				oFile.SaveAs Server.mappath(formPath&l_picName&"."&oFile.FileExt)
				
					Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
					Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
					sMapFileName = Path &"images\"& l_picName&"."&l_ext
	
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

}

	'response.Write("l_classid=".$l_classid."<br>")
	'response.Write("l_id=".$l_id."<br>")

modiDetail="update w_ad_pic set l_url='"&l_url&"',l_title='"&l_title&"' where l_id=".$l_id.""
'echo "modiPic="&modiDetail &"<br>"
$msql->query (modiDetail)



set myconn=nothing

?>
<html>
<head>
<title>modipic</title>
<meta http-equiv="refresh" content="0;url=Pic_List.php">
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
