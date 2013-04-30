<?php
include("../../_inc/checkoutTime.php");
include("../../include/common.inc.php");
   $l_id=trim($_REQUEST["l_id"]);
   $l_classid=trim($_REQUEST["l_classid"]);
   $pageno = trim($_REQUEST["pageno"]);
   $msql->query ("Delete from z_class where l_id=".$l_id);
?>
<html>
<head>
<title>删除信息</title>
<meta http-equiv="refresh" content="0;url=ProSmallClass_List.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>">
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

