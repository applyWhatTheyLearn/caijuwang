<?php
include("../include/common.inc.php");
include_once("../_inc/genKey.php");
session_start();
$i = 9;
$OrderNum1 = gen_key($i);
$GetTempNum1 = isset($_POST["GetTempNum1"]) ? trim($_POST["GetTempNum1"]) : '';
//订单号
$l_orderform = $OrderNum1;
//会员id
$l_userid = trim($_POST["UserLoginUserID"]);
$l_detail = trim($_POST["orderinfolist"]);
$l_price = trim($_POST["AllPirce"]);
$l_consignee = trim($_POST["UserName"]);
$l_sex = trim($_POST["sex"]);
$l_address = trim($_POST["address"]);
$l_phone = trim($_POST["l_phone"]);
$l_mobile = trim($_POST["l_mobile"]);
$l_postcode = trim($_POST["postcode"]);
$l_email = trim($_POST["Email"]);
$l_deliver = trim($_POST["SongHuoFS"]);
$l_payment = trim($_POST["FuKuanFS"]);
$fapiao =  isset($_POST["fapiao"]) ? trim($_POST["fapiao"]) : ''; 
$l_invoice = trim($_POST["l_invoice"]);
$l_place = trim($_POST["l_place"]);
$l_ordertime = isset($_POST["l_ordertime"]) ? trim($_POST["l_ordertime"]) :date("Y-m-d H:m:s",time());
$l_takeffectime = isset($_POST["l_takeffectime"]) ? trim($_POST["l_takeffectime"]):date("Y-m-d H:m:s",time());
$l_orderstatu = isset($_POST["l_orderstatu"]) ? trim($_POST["l_orderstatu"]):'';


$AddDetail = "INSERT INTO z_order (l_orderform,l_userid,l_detail,l_price,l_consignee,l_sex,l_address,l_phone,l_mobile,l_postcode,l_email,l_deliver,l_payment,l_invoice,l_place,l_orderstatu) VALUES ('" . $l_orderform . "','" . $l_userid . "','" . $l_detail . "','" . $l_price . "','" . $l_consignee . "','" . $l_sex . "','" . $l_address . "','" . $l_phone . "','" . $l_mobile . "','" . $l_postcode . "','" . $l_email . "','" . $l_deliver . "','" . $l_payment . "','" . $l_invoice . "','" . $l_place . "','新订单')";
$msql->query($AddDetail);
$msql->query("select @@IDENTITY as z_orderid from z_order limit 1");
$msql->next_record();
$z_orderid = trim($msql->f("z_orderid"));



$msql->query("Delete from z_car where l_tempnum='" . $GetTempNum1 . "'");

?>

<html>
<head>
    <title>修改成功!</title>
    <meta http-equiv=refresh content="0; url=order_ok.php?z_orderid=<?php echo($z_orderid); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

</body>
</html>
