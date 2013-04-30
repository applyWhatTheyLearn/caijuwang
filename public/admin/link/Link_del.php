<?php
include("../../_inc/checkoutTime.php");
include("../../include/common.inc.php");
$w_id = trim($_REQUEST["w_id"]);
$msql->query("Delete from z_link where w_id=".$w_id);


?>
<html>
<head>
    <title>删除成功</title>
    <meta http-equiv="refresh" content="0;url=Link_list.php">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p>&nbsp;</p>
</div>
</body>
</html>


 