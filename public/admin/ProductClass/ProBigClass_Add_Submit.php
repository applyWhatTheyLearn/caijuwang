<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime3.php");
include("../../_inc/func.php");
$l_name = $_POST["l_name"];
$l_name_e = isset($_POST["l_name_e"])?$_POST["l_name_e"]:'';
$l_detail = isset($_POST["detail"])?$_POST["detail"]:'';
$l_sort = $_POST["l_sort"];
$l_tuijian = $_POST["l_tuijian"];
$l_views = $_POST["l_views"];
ChackError($l_name, "大类名称");
ChackNum($l_sort, "排序");
$msql->query("INSERT INTO z_class (l_fid,l_name,l_name_e,l_detail,l_sort,l_tuijian,l_views) VALUES ('0','" . $l_name . "','" . $l_name_e . "','" . $l_detail . "','" . $l_sort . "','" . $l_tuijian . "','" . $l_views . "')");
?>

<html>
<head>
    <title>更新添加成功!</title>
    <meta http-equiv=refresh content="0; url=ProBigClass_List.php">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>