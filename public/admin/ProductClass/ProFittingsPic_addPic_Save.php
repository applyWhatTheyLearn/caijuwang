
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<?phpServer.ScriptTimeOut=5000?>

<?php
	dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
	set upload=new upload_5xsoft ''�����ϴ�����
	l_classid=$_POST["l_classid")
	l_extname=$_POST["l_extname")
	l_price1=$_POST["l_price1")
	l_price2=$_POST["l_price2")
	l_sort=$_POST["l_sort")
	l_views=$_POST["l_views")

	
	'echo upload.Version&"<br><br>"  ''显示�ϴ���İ汾
	
	formPath="../../folder/fittings/"
	if right(formPath,1)<>"/" { formPath=formPath&"/"
	
	iCount=0
	'for each formName in upload.objForm ''�г�����form���
	' echo formName&"="&$_POST[formName)&"<br>"
	'next
	
	'echo "<br>"

	   

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
			
		if oFile.FileSize>=200000 {
		?>
		<script language=javascript>
                history.back()
                alert("�ϴ��ļ����ܳ����ܳ���200K暂无内容��ļ���СΪ{ <?php echo $imageSize?> }已超过了限制")
        </script>
        <?php
        response.end
		}
			
			'echo ("file.FileName="&oFile.FileName &"<br>")
			'echo ("file.FileSize="&oFile.FileSize &"<br>")
			'echo ("file.FileType="&oFile.FileType &"<br>")
			'echo ("file.FileExt="&oFile.FileExt &"<br>")
			'echo ("imageSize="&imageSize &"<br>")
			'fname="123456."&oFile.FileExt
			'file.SaveAs Server.mappath(formPath&file.FileName)
			'oFile.SaveAs Server.mappath(formPath&fname)
			'echo ("formPath&file.FileName="&formPath&fname &"<br>")
			'response.Write("GetNewFileName="&GetNewFileName() &"<br>")
			'PicName=GetNewFileName()&"."&oFile.FileExt
			PicName=GetNewFileName()
		    oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)   ''�����ļ�
		    'echo file.FilePath&file.FileName&" ("&file.FileSize&") => "&formPath&fname&" �ɹ�!<br>"
		    'iCount=iCount+1
		    'ͼƬ��Ϣ���
		    AddPic="INSERT INTO z_fittings_pic (l_pjid,l_extname,l_price1,l_price2,l_pic,l_ext,l_sort,l_views) VALUES ('".$l_classid."','"&l_extname&"','"&l_price1&"','"&l_price2&"','"&PicName&"','"&oFile.FileExt&"','".$l_sort."','".$l_views."')"
		    'echo "AddPic="&AddPic &"<br>"
			$msql->query (AddPic)
			set oFile=nothing
			set upload=nothing  ''ɾ��˶���
			'Htmend iCount&" ���ļ��ϴ�����!"
				
			'sub HtmEnd(Msg)
			'    set upload=nothing
			 '   echo "<br>"&Msg&" [<a href=""javascript:history.back();"">����</a>]</body></html>"
			 '   response.end
			'end sub
				
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
			?>
                
<html>
<head>
<title>addpic</title>
<meta http-equiv="refresh" content="0;url=ProFittingsPic_List.php?l_classid=<?php echo  $l_classid ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
