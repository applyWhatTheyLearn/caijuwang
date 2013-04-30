<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
    $w_companyname=trim($_POST["w_companyname"]);
    $LogTime=date("Y-m-d H:i:s", time());
    $w_tongji=$_POST["w_tongji"];
// $address=$_POST["address"];
    $w_copyright=$_POST["w_copyright"];
$w_beiannum=$_POST["w_beiannum"];
$msql->query("update w_copyright set w_companyname='" . $w_companyname . "',w_tongji='" . $w_tongji . "',w_copyright='" . $w_copyright ."',w_beiannum='" . $w_beiannum . "'");
?>
<meta http-equiv=refresh content="0; url=copyright_modi.php">
<html>
<head>
<title>更新添加成功</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>