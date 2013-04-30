
<!--#include file="../_inc/checkoutTime.php"-->
<?php

	'ManageName=trim($_POST["ManageName"))
	DelClassID=trim($_POST["DelSmallClassID"))
    UserID=trim($_POST["UserID"))
	AccID=trim($_POST["AccID"))
	AccID_t=trim($_POST["AccID_t"))
	'Response.Write("DelClassID="&DelClassID &"<br>")
	'Response.Write("UserID="&UserID &"<br>")
	'Response.Write("AccID="&AccID &"<br>")
	'Response.Write("AccID_t="&AccID_t &"<br>")
	if DelClassID<>"0" {
	
 	DelInfo="Delete from Accredit where AccID="&DelClassID&" and AdminID="&UserID&""    
	$msql->query (DelInfo)


	set myconn=nothing
	
	}
'Response.Write("DelInfo="&DelInfo &"<br>")
'
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="refresh" content="0;url=QX_Detail.php?UserID=<?php echo $UserID?>&amp;AccID_t=<?php echo(AccID_t?>&amp;AccID=<?php echo(AccID?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  </div>
</body>
</html>
