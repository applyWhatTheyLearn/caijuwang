<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_id = $_POST["l_id"];
$pageno = trim($_POST["pageno"]);
$l_name = $_POST["l_name"];
$l_name_e = $_POST["l_name_e"];
$l_detail = $_POST["detail"];
$l_sort = $_POST["l_sort"];
$l_tuijian = $_POST["l_tuijian"];
$l_views = $_POST["l_views"];
$msql->query("update z_class set l_name='" . $l_name . "',l_name_e='" . $l_name_e . "',l_detail='" . $l_detail . "',l_sort='" . $l_sort . "',l_tuijian='" . $l_tuijian."' where l_id=".$l_id);
header("Location: ProBigClass_List.php?pageno=" . $pageno);

