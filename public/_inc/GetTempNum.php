<?php
include("../_inc/genKey.php");
//	用户访问网站识号
$GetTempNum = date("YmdHis", time()) . gen_key(6);
session_start();
if (empty($_SESSION["GetTempNum"])) {
    $_SESSION["GetTempNum"] = $GetTempNum;
}
