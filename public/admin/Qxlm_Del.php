<?php
    include("../include/common.inc.php");
    include("../_inc/checkoutTime.php");
   $AccID_t=trim($_REQUEST["AccID_t"]);
    $FotherID_t=trim($_REQUEST["FotherID_t"]);
   if ($FotherID_t==0) {
   $msql->query ("Delete from Accredit_t where AccID_t=".$AccID_t);
   $msql->query ("Delete from Accredit_t where FotherID_t=".$AccID_t);
   }else{
    $msql->query ("Delete from Accredit_t where AccID_t=".$AccID_t);
   }

?>
<html>
<head>
<title>删除用户信息</title>
<meta http-equiv="refresh" content="0;url=QxLm_List.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>信息已删除</strong></font> </p>
</div>
</body>
</html>

