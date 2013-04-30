<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_classid=trim($_POST["l_classid"]);
$l_fid=trim($_POST["l_fid"]);
$l_name=trim($_POST["l_name"]);
$l_name_e=isset($_POST["l_name_e"])?trim($_POST["l_name_e"]):'';
$l_basic=trim($_POST["l_basic"]);
$l_basic_e=isset($_POST["l_basic_e"])?trim($_POST["l_basic_e"]):'';
$l_extend=trim($_POST["l_extend"]);
$l_extend_e=trim($_POST["l_extend_e"]);
$l_price1=trim($_POST["l_price1"]);
$l_price2=trim($_POST["l_price2"]);
$l_units=trim($_POST["l_units"]);
$l_num=trim($_POST["l_num"]);
$l_sort=$_POST["l_sort"];
$l_tuijian=$_POST["l_tuijian"];
$l_views=$_POST["l_views"];
ChackNum($l_sort,"排序");
$msql->query ("INSERT INTO z_product (l_fid,l_classid,l_name,l_name_e,l_basic,l_basic_e,l_extend,l_extend_e,l_price1,l_price2,l_units,l_num,l_sort,l_tuijian,l_views) VALUES ('".$l_fid."','".$l_classid."','". $l_name."','".$l_name_e."','" .$l_basic. "','" .$l_basic_e. "','".$l_extend."','".$l_extend_e."','".$l_price1."','".$l_price2."','".$l_units."','".$l_num."','".$l_sort."','".$l_tuijian."','".$l_views."')");

?>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=Pro_list.php?l_classid=<?php echo  $l_classid ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>