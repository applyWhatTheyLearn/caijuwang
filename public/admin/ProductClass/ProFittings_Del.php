<?php
include("../../_inc/checkoutTime.php");
include("../../include/common.inc.php");
$l_id = trim($_REQUEST["l_id"]);
$pageno = trim($_REQUEST["pageno"]);
$l_classid = trim($_REQUEST["l_classid"]);
$msql->query("select l_id,l_pjid,l_pic,l_ext from z_fittings_pic where l_pjid=" . $l_id);
while ($msql->next_record()) {
    $picid = trim($msql->f("l_id"));
    $picName = trim($msql->f("l_pic"));
    $ext = trim($msql->f("l_ext"));
//sMapFileName = Path &"folder\fittings\"& picName&"."&ext
    unlink("../../folder/fittings/".$picName.".".$ext);
    $dsql->query("Delete from z_fittings_pic where l_id=" . $picid);
}
   $msql->query("Delete from z_fittings where l_id=" . $l_id);

?>
<html>
<head>
    <title>删除信息</title>
    <meta http-equiv="refresh"
          content="0;url=ProFittings_List.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>">
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

