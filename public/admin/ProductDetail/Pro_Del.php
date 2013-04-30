<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$l_id = trim($_REQUEST["l_id"]);
$pageno = trim($_REQUEST["pageno"]);
$l_classid = trim($_REQUEST["l_classid"]);
$Path = "../../folder/product/";
$msql->query("select l_id,l_productid,l_pic,l_ext from z_productpic where l_productid=" . $l_id);
while ($msql->next_record()) {
    $ProPicid = trim($msql->f("l_id"));
    $ProPicName = trim($msql->f("l_pic"));
    $ProExt = trim($msql->f("l_ext"));
    unlink($Path . $ProPicName . "." . $ProExt);

    $msql->query("Delete from z_fittings_pic where l_id=" . $ProPicid);
}
$msql->query("Delete from z_product where l_id=" . $l_id)
?>
<html>
<head>
<title>删除成功</title>
<meta http-equiv="refresh" content="0;url=Pro_list.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>">
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
