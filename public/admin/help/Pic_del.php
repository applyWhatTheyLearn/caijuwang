
<!--#include file="../../_inc/checkoutTime2.php" -->

<?php
	$l_classid=trim($_REQUEST["l_classid"]);
	l_id=trim($_REQUEST["l_id"))
	l_helpid=trim($_REQUEST["l_helpid"))
	search="select l_id,l_pic,l_ext from z_helpic where l_id=".$l_id.""
	$msql->query(search)
	l_picName=trim($msql->f("l_pic"))
	l_ext=trim($msql->f("l_ext"))


	
	Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
	Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
	sMapFileName = Path &"folder\helpic\"& l_picName&"."&l_ext
	
	If oFSO.FileExists(sMapFileName) = True Then
	oFSO.DeleteFile(sMapFileName)
	End If


					
   DelInfo="Delete from z_helpic where l_id=".$l_id.""
   $msql->query (DelInfo)


	''response.redirect("DelUserOK$_REQUEST[")
?>
<html>
<head>
<title>ɾ����Ϣ</title>
<meta http-equiv="refresh" content="0;url=Pic_list.php?l_classid=<?php echo  $l_classid ?>&l_id=<?php echo $l_id ?>&l_helpid=<?php echo $l_helpid ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>


 