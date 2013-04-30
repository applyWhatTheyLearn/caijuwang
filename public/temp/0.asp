<!--#include file="../_inc/GetTempNum.php"-->
<?php
	'response.Write("GetTempNum="&trim($_SESSION["GetTempNum")) &"<br>")
	response.Write("isempty="&isempty(trim($_SESSION["connected"))) &"<br>")
	 if isempty(trim($_SESSION["connected"))) then
	    application.Lock '��
		response.Write("connected=")


	    application.UnLock '����>>>>>>>>>>>>>>>>>>>>>>>>
	 else
	 response.Write("null")
	 }
	 '$_SESSION["connected")="true"
	 $_SESSION["connected")=""
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>

</body>
</html>
