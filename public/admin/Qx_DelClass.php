
<!--#include file="../_inc/checkoutTime.php"-->
<?php

	ManageName=trim($_POST["ManageName"))
	DelClass=trim($_POST["DelClass"))
    UserID=trim($_POST["OUserID"))
	AccID_t=trim($_POST["AccID_t"))
	'Response.Write("AddClass="&AddClass &"<br>")
	'Response.Write("UserID="&UserID &"<br>")
	'Response.Write("ManageName="&ManageName &"<br>")
	if DelClass<>"0" {
	
 	DelInfo="Delete from Accredit where TitleName='"&DelClass&"' and AdminID="&UserID&""    
	$msql->query (DelInfo)


	set myconn=nothing
	
	}
'Response.Write("DelInfo="&DelInfo &"<br>")
'
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="refresh" content="0;url=QX_list.php?UserID=<?php echo $UserID?>&amp;ManageName=<?php echo(ManageName?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  </div>
</body>
</html>
