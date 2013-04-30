
<!--#include file="../../_inc/func.php"-->
<!--#include file="../../_inc/checkoutTime2.php" -->
<?php
l_classname=trim($_POST["l_classname"))
l_sort=trim($_POST["l_sort"))
l_views=$_REQUEST["l_views")
ChackError l_classname,"�������"
ChackNum($l_sort,"排序");
'ChackError(NetAnswer)


	AddDetail="INSERT INTO z_helpclass (l_classname,l_sort,l_views) VALUES ('" &l_classname& "','" .$l_sort. "','" .$l_views. "')"
    $msql->query (AddDetail)

	set Rs=nothing

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
