<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
    $l_id=trim($_REQUEST["l_id"]);
    $l_classid=trim($_REQUEST["l_classid"]);
	$pageno = trim($_REQUEST["pageno"]);
        $msql->query("select l_id,l_pic,l_ext from z_productpic where l_id=".$l_id);
if($msql->next_record()){
    $l_picName=trim($msql->f("l_pic"));
    $l_ext=trim($msql->f("l_ext")) ;
 }
$formPath = "../../folder/product/";
       $msql->query ("Delete from z_productpic where l_id=".$l_id);
?>
<html>
<head>
<title>删除成功</title>
<meta http-equiv="refresh" content="0;url=Pro_Pic_List.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">
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


 