<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$class_id = $_POST["class_id"];
$w_id = $_POST["w_id"];
$w_name = trim($_POST["w_name"]);
$w_url = trim($_POST["w_url"]);
$w_sort = trim($_POST["w_sort"]);
$w_views = $_POST["w_views"];
ChackError($w_name, "连接名称");
ChackNum($w_sort, "排序");
$msql->query("update z_link set w_name='"
    . $w_name . "',w_url='"
    . $w_url . "',w_sort="
    . $w_sort . ",w_views='"
    . $w_views . "' where w_id=" . $w_id);

?>
<meta http-equiv=refresh content="0; url=Link_list.php?class_id=<?php echo $class_id ?>">
<html>
<head>
    <title>更新添加成功!</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
