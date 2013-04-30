
<!--#include file="../../_inc/func.php"-->
<!--#include file="../../_inc/checkoutTime2.php" -->
<?php
l_id=trim($_POST["l_id"))
l_classname=trim($_POST["l_classname"))
l_sort=trim($_POST["l_sort"))
l_views=$_REQUEST["l_views")
ChackError l_classname,"�������"
ChackNum($l_sort,"排序");
'ChackError(NetAnswer)

	updateInfo="update z_helpclass set l_classname='"&l_classname&"',l_sort='".$l_sort."',l_views='".$l_views."' where l_id=".$l_id.""
    $msql->query (updateInfo)


?>
<script language="JavaScript">
		{
parent.window_left.location.href= "helpClass_List.php"
		}
</script>
<html>
<head>
<title>�޸ĳɹ�!</title>
<meta http-equiv=refresh content="0; url=helpClass_managelist.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
