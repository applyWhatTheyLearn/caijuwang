<?php
include("../include/common.inc.php");
session_start();
$l_userid = trim($_GET["userid"]);
$l_productid = trim($_GET["productid"]);
$msql->query("select l_id,l_userid,l_productid from z_collection where l_userid=" . $l_userid . " and l_productid=" . $l_productid . "");
if ($msql->num_rows() == 0) {
    $msql->query("insert into z_collection (l_userid,l_productid) values ('" . $l_userid . "','" . $l_productid . "')");
}


