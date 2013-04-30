<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime3.php");
include("../../_inc/func.php");
$l_id = $_POST["l_id"];
$pageno = trim($_POST["pageno"]);
$l_classid = trim($_POST["l_classid"]);
$l_name = $_POST["l_name"];
$l_detail = $_POST["l_detail"];
$l_sort = $_POST["l_sort"];
$l_views = $_POST["l_views"];


$msql->query("update z_fittings set l_name='" . $l_name . "',l_detail='" . $l_detail . "',l_sort='" . $l_sort . "',l_Views='" . $l_views . "' where l_id=" . $l_id);
?>
<meta http-equiv=refresh
      content="0; url=ProFittings_List.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>">
<html>
<head>
    <title>更新成功</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
