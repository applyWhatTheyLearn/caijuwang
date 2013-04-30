
<!--#include file="../_inc/checkoutTime.php"-->
<?php
   'loginid=$_SESSION["loginid")
   'if not loginid="true" {
	'  $_SESSION["err_mes")="��û����ȷ��¼����δ������ʱ���"
	'  header("Location:login.php"
   '}

    LanMuName=trim($_POST["LanMuName"))
	LinkName=trim($_POST["LinkName"))

	$_REQUEST[
	Search = "select * from Accredit_t where FotherID_t=0"
    $msql->query($Search);
	'echo ("count="&rs.recordcount)
	totalnum=intval(rs.recordcount&"00")
	'echo ("totalnum="&totalnum)

	
	'response.Write("BirthTime="&BirthTime)
	ChackError  LanMuName,"��Ŀ���"
	ChackError  LinkName,"�������"


      Member="select * from Accredit_t"
      rs.open Member,Myconn,1,3	  
      rs.addnew
	  $msql->f("TitleName_t")=LanMuName
	  $msql->f("LinkName_t")=LinkName
	  $msql->f("FotherID_t")=0
	  $msql->f("compositor_t")=totalnum+100
      rs.update

'
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="refresh" content="0;url=QxLm_List.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p><strong><font color="#993300">用户信息更新成功</font></strong></p>
</div>
</body>
</html>
<?php
	Function ChackError(ce,cans) 
		if len(ce)=0 {
		 ?>
		 <script language=vbscript>
				 history.back()
				 alert("[ <?php echo(cans?>  ] ����Ϊ暂无内容���룡")
		 </script>
		 <?php
		response.end 
		}
		
	for i=1 to len(ce) 
	'��MID暂无内容���user��i λ�õ�һ���ַ�
	us=mid(ce,i,1) 
	'暂无内容�ַ���бȽ�
	if us="'" or us="%" or us="<" or us=">" or us="&" or  us="`" {
	'暂无内容��ַ��不显示�����ܺ暂无内容����ַ�
     ?>

     <script language=vbscript>
             history.back()
             alert("[ <?php echo(cans?>  ] ���ܺ���[    ' %  <  >  &  /  \ `   ]�ȷǷ��ַ暂无内容��� ��")
     </script>
     <?php
	response.end 
	}
	next 
	
	}
	
	Function ChackNum(num,numName)
	
		if len(num)=0 {
		 ?>
		 <script language=vbscript>
				 history.back()
				 alert("[ <?php echo(numName?>  ] ����Ϊ暂无内容���� ��")
		 </script>
		 <?php
		response.end 
		}
		
	   for n=1 to len(num) 
	   usNum=mid(num,n,1) 
			if Asc(usNum)<48 or Asc(usNum)>57 {
			?>
			<script language=vbscript>
					history.back()
					alert("[ <?php echo(numName?> ]ֻ暂无内容�֣�")
			</script>
			<?php
			response.end 
			}
		next
		
	}
	
sub endConnection()


end sub
?>

