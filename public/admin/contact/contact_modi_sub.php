<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");

$w_id=$_POST["w_id"];
//LogTime=date()
$w_company=$_POST["w_company"];
$w_company_e=$_POST["w_company_e"];
$address=$_POST["address"];
$address_e=$_POST["address_e"];
$tel=$_POST["tel"];
$tel_e=$_POST["tel_e"];
$postcode=$_POST["postcode"];
$fax=$_POST["fax"];
$email=$_POST["email"];
$w_detail=$_POST["w_detail"];
$w_detail_e=$_POST["w_detail_e"];
$qq=$_POST["qq"];
$msn=$_POST["msn"];
$open_time=$_POST["open_time"];

ChackError ($w_company,"公司名称");
$msql->query ("update z_contact set w_company='".$w_company."',w_company_e='".$w_company_e."',w_postcode='".$postcode."',w_tel='".$tel."',w_tel_e='".$tel_e."',w_fax='".$fax."',w_address='".$address."',w_address_e='".$address_e."',w_email='".$email."',w_qq='".$qq."',w_msn='".$msn."',w_open_time='".$open_time."',w_detail='".$w_detail."',w_detail_e='".$w_detail_e."' where w_id=".$w_id);
?>
<meta http-equiv=refresh content="0; url=contact_modi.php">
<html>
<head>
<title>更新添加成功!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>
