<?php
include("../include/common.inc.php");
include("../_inc/checkoutTime.php");
include("../_inc/func.php");
$AccID_t = trim($_POST["AccID_t"]);
$LanMuName=trim($_POST["LanMuName"]);
$LinkName=trim($_POST["LinkName"]);
$compositor_t=trim($_POST["compositor_t"]);


	ChackError(LanMuName,"栏目名称");
	ChackError(LinkName,"连接名称");
	ChackNum(compositor_t,"排序");


    $msql->query("update Accredit_t set TitleName_t='".$LanMuName."',LinkName_t='".$LinkName."',compositor_t='".$compositor_t."' where AccID_t=".$AccID_t);

    $msql->query("update Accredit set TitleName='".$LanMuName."',LinkName='".$LinkName."',compositor='".$compositor_t."' where AccID_t=".$AccID_t);



?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="refresh" content="0;url=QxLm_List.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p><strong><font color="#993300">用户信息更新成功</font></strong></p>
</div>
</body>
</html>
