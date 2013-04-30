<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$w_id=trim($_REQUEST["db_w_id"]);
$dbname=trim($_REQUEST["dbname"]);
unlink("../../folder/db/".$dbname.".sql");
$msql->query ("Delete from w_db_bakinfo where w_id=".$w_id);
?>
<html>
<head>
<meta http-equiv="refresh" content="0;url=backup_database.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>删除成功</title>
</head>

<body>
</body>
</html>
