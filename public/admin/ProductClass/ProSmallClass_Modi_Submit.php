<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
	$l_id=$_POST["l_id"];
	$l_classid=$_POST["l_classid"];
	$pageno=trim($_POST["pageno"]);
	$l_name=$_POST["l_name"];
	$l_name_e=$_POST["l_name_e"];
	$l_detail=$_POST["detail"];
	$l_sort=$_POST["l_sort"];
	$l_tuijian=$_POST["l_tuijian"];
	$l_views=$_POST["l_views"];
	$msql->query ("update z_class set l_name='". $l_name."',l_name_e='".$l_name_e."',l_detail='".$l_detail."',l_sort='".$l_sort."',l_tuijian='".$l_tuijian."',l_Views='".$l_views."' where l_id=".$l_id);
?>
<meta http-equiv=refresh content="0; url=ProSmallClass_List.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>">
<html>
<head>
<title>更新添加成功!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
