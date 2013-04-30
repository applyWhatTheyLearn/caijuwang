<?php
include("../../_inc/checkoutTime.php");
include("../../include/common.inc.php");
$Meid = trim($_REQUEST["Meid"]);

$msql->query("Delete from z_user where Meid=" . $Meid);
?>
<html>
<head>
    <title>删除用户信息</title>
    <meta http-equiv="refresh" content="0;url=Member_List.php?pageno=<?php echo trim($_REQUEST["pageno"])?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p><font color="#993300"><strong>信息已删除</strong></font></p>
</div>
</body>
</html>

