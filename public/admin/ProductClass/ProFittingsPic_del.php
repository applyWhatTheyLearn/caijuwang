
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->

<?php
    $l_id=trim($_REQUEST["l_id"]);
    $l_classid=trim($_REQUEST["l_classid"]);
	$pageno = trim($_REQUEST["pageno"]);
	search="select l_id,l_pic,l_ext from z_fittings_pic where l_id=".$l_id.""
	$msql->query(search)
	l_picName=trim($msql->f("l_pic"))
	l_ext=trim($msql->f("l_ext"))


	
	Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
	Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
	sMapFileName = Path &"folder\fittings\"& l_picName&"."&l_ext
	
	If oFSO.FileExists(sMapFileName) = True Then
	oFSO.DeleteFile(sMapFileName)
	End If	
					
   DelInfo="Delete from z_fittings_pic where l_id=".$l_id.""
   $msql->query (DelInfo)


   set oFSO=nothing
	''response.redirect("DelUserOK$_REQUEST[")
?>
<html>
<head>
<title>ɾ��˾��Ϣ</title>
<meta http-equiv="refresh" content="0;url=ProFittingsPic_List.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">
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


 