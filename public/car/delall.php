<?php
    include("../include/common.inc.php");
    include("../_inc/GetTempNum.php");
    $GetTempNum1 = isset($_SESSION["GetTempNum"]) ? trim($_SESSION["GetTempNum"]) : '';
	$msql->query("delete from z_car where l_tempnum='".$GetTempNum1."'");
    header("Location: car.php");