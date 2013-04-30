<?php
include("../_inc/checkoutTime.php");
include("../include/common.inc.php");
$UserID=trim($_REQUEST["UserID"]);

 $msql->query ("Delete from admin where UserID=".$UserID);

?>
<html>
<head>
<title>ɾ���û���Ϣ</title>
<meta http-equiv="refresh" content="0;url=User_List.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>删除记录成功</strong></font> </p>
</div>
</body>
</html>

