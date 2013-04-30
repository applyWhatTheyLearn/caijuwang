<?php
session_start();
$loginid = $_SESSION["loginid"];
if (!$loginid) {
    $_SESSION["err_mes"] = "您还没有正确登录或是未操作的时间过长";
    header("Location: ../login.php");
    exit;
}
