<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$class_id = trim($_POST["class_id"]);
$w_name = trim($_POST["w_name"]);
$w_url = trim($_POST["w_url"]);
$w_sort = trim($_POST["w_sort"]);
$w_views = trim($_POST["w_views"]);
ChackError($w_name, "连接名称");
ChackNum($w_sort, "排序");
$msql->query("INSERT INTO z_link (w_name,w_url,w_sort,w_views)
 VALUES ('" . $w_name . "','".$w_url."'," . $w_sort . ",'" . $w_views . "')");

?>

<html>
<head>
    <title>修改成功</title>
    <meta http-equiv=refresh content="0; url=link_List.php?class_id=<?php echo $class_id ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
