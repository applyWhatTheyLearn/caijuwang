<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_classid=trim($_REQUEST["l_classid"]);
$l_id=trim($_REQUEST["l_id"]);
$msql->query ("Delete from z_affiche where l_id=".$l_id);
?>
<html>
<head>
<title>删除成功</title>
<meta http-equiv="refresh" content="0;url=GongGao_list.php?l_classid=<?php echo  $l_classid ?>">
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


 