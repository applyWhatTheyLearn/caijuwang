<?php
include("../../include/common.inc.php");
	$l_classid=trim($_REQUEST["l_classid"]);
	$l_id=trim($_REQUEST["l_id"]);
				
   $msql->query ("Delete from z_comments where l_id=".$l_id);
?>
<html>
<head>
<title>删除成功</title>
<meta http-equiv="refresh" content="0;url=PingLun_list.php">
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


 