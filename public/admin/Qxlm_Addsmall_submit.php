<?php
    include("../include/common.inc.php");
    include("../_inc/checkoutTime.php");
    include("../_inc/func.php");
    $AccID_t = trim($_POST["AccID_t"]);
    $LanMuName=trim($_POST["LanMuName"]);
    $LinkName=trim($_POST["LinkName"]);

    $msql->query("select * from Accredit_t where FotherID_t=".$AccID_t);

$totalnum=intval($msql->num_rows()."00");
$compositor_t=$totalnum+100;
	ChackError(LanMuName,"栏目名称");
	ChackError(LinkName,"连接名称");
    $msql->query("insert into Accredit_t set TitleName_t='" . $LanMuName
        . "',LinkName_t='" .$LinkName
        . "',FotherID_t='" . $AccID_t ."',compositor_t='". $compositor_t . "'");

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
