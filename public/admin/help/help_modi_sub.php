
<!--#include file="../../_inc/func.php"-->
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php

	l_id=trim($_POST["l_id"))
	$l_classid=trim($_POST["l_classid"]);
	l_title=trim($_POST["l_title"))
	l_detail=trim($_POST["l_detail"))
	l_sort=trim($_POST["l_sort"))
	l_views=trim($_POST["l_views"))
	ChackError l_title,"�������"

	updateInfo="update z_helpdetail set l_title='"&l_title&"',l_detail='".$l_detail."',l_sort='".$l_sort."',l_views='".$l_views."' where l_id=".$l_id.""
	$msql->query (updateInfo)
	'response.Write("updateInfo="&updateInfo)


'
?>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=help_list.php?l_classid=<?php echo  $l_classid ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
