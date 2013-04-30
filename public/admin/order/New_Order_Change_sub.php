
<!--#include file="../../_inc/func.php"-->
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php

	l_id=trim($_POST["l_id"))
	$pageno=trim($_POST["pageno"]);
	change=trim($_POST["change"))
	if change="��" {
	updateInfo="update z_order set l_orderstatu='������',l_takeffectime='"&now()&"' where l_id=".$l_id.""
	$msql->query (updateInfo)
	}
	'response.Write("updateInfo="&updateInfo)


'
?>

<html>
<head>
<title>���³ɹ�!</title>
<meta http-equiv=refresh content="0; url=New_Order_list.php?pageno=<?php echo $pageno ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
