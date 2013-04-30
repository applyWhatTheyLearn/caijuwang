<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_id=trim($_POST["l_id"]);
$l_classid=trim($_POST["l_classid"]);
$l_title=trim($_POST["l_title"]);
$l_detail=trim($_POST["l_detail"]);
$l_sort=trim($_POST["l_sort"]);
$l_views=trim($_POST["l_views"]);
ChackError(l_title,"评论标题");
$msql->query ("update z_comments set l_title='".$l_title."',l_detail='".$l_detail."',l_views='".$l_views."' where l_id=".$l_id);
?>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=PingLun_list.php?l_classid=<?php echo  $l_classid ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
