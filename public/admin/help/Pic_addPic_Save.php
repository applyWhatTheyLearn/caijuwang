
<!--#include file="../../_inc/func.php"-->
<!--#include file="../../_inc/checkoutTime2.php" -->
<!--#include FILE="../../_inc/upload_5xsoft.inc"-->
<?phpServer.ScriptTimeOut=5000?>

<?php
	dim upload,oFile,formName,formPath,iCount,fname,imageSize,FileExt,file
	set upload=new upload_5xsoft ''�����ϴ�����
	l_classid=$_POST["l_classid")
	l_helpid=$_POST["l_helpid")
	l_sort=$_POST["l_sort")
	l_views=$_POST["l_views")
	'l_id=$_POST["l_id")
	ChackNum($l_sort,"排序");
	
	'echo upload.Version&"<br><br>"  ''显示�ϴ���İ汾
	
	formPath="../../folder/helpic/"
	if right(formPath,1)<>"/" { formPath=formPath&"/"
	
	iCount=0
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

			PicName=GetNewFileName()
		    oFile.SaveAs Server.mappath(formPath&PicName&"."&oFile.FileExt)   ''�����ļ�

		    'ͼƬ��Ϣ���
		    AddPic="INSERT INTO z_helpic (l_helpid,l_pic,l_ext,l_sort,l_views) VALUES ('"&l_helpid&"','"&PicName&"','"&oFile.FileExt&"','".$l_sort."','".$l_views."')"
		    'echo "AddPic="&AddPic &"<br>"
			$msql->query (AddPic)
			set oFile=nothing
			set upload=nothing  ''ɾ��˶���
			'Htmend iCount&" ���ļ��ϴ�����!"
				
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
<meta http-equiv="refresh" content="0;url=pic_List.php?l_classid=<?php echo  $l_classid ?>&l_helpid=<?php echo $l_helpid ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>ͼƬ�����</strong></font> </p>
</div>
</body>
</html>
