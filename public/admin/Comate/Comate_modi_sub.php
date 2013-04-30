<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$class_id=trim($_POST["class_id"]);
$w_id=$_POST["w_id"];
$w_name=trim($_POST["w_name"]);
$w_url=trim($_POST["w_url"]);
$w_sort=trim($_POST["w_sort"]);
$w_views=$_REQUEST["w_views"];
ChackError($w_name,"合作伙伴名称");
ChackNum ($w_sort,"排序");
$msql->query("update z_comate set w_name='"
    .$w_name."',w_url='"
    .$w_url."',w_sort="
    .$w_sort.",w_views='"
    .$w_views. "  where w_id=".$w_id);
?>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=Comate_list.php?class_id=<?php echo $class_id ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>