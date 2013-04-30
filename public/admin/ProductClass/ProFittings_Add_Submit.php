<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_classid = trim($_POST["l_classid"]);
$l_name = $_POST["l_name"];
$l_detail = substr($_POST["l_detail"], 0, 100);
$l_sort = $_POST["l_sort"];
$l_views = $_POST["l_views"];
ChackError($l_name, "分类名称");
ChackNum($l_sort, "排序");
$msql->query("INSERT INTO z_fittings (l_classid,l_name,l_detail,l_sort,l_views) VALUES ('" . $l_classid . "','" . $l_name . "','" . $l_detail . "','" . $l_sort . "','" . $l_views . "')");
?>

<html>
<head>
    <title>更新添加成功!</title>
    <meta http-equiv=refresh content="0; url=ProFittings_List.php?l_classid=<?php echo  $l_classid ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>