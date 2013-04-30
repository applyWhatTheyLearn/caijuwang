<?php
include("../../include/common.inc.php");
	$l_id=trim($_REQUEST["l_id"]);
    $l_classid=trim($_REQUEST["l_classid"]);
    $pageno=trim($_REQUEST["pageno"]);
	$msql->query ("update z_product set l_tuijian='不推荐' where l_id=".$l_id);
    header("Location:Pro_TjList.php");
?>

