<?php
include("../include/common.inc.php");
session_start();
$l_id = trim($_GET["l_id"]);
$l_num = trim($_GET["l_num"]);
$msql->query("update z_car set l_num='" . $l_num . "' where l_id=" . $l_id . "");
?>

