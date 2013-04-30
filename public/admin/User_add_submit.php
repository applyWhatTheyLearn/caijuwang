<?php
include("../include/common.inc.php");
include("../_inc/checkoutTime.php");
include("../_inc/func.php");
$UserName = trim($_POST["MemaberName"]);
$UserPass = trim($_POST["MemberPass"]);
$ReUserPass = trim($_POST["ReMemberPass"]);
$view=trim($_POST["view"]);

ChackError($UserName, "用户名称");
ChackError($UserPass, "输入密码");
ChackError($ReUserPass, "重复密码");
if ($UserPass <> $ReUserPass) {
    echo "密码不一致，请检查密码!";
    exit;
}else{
    $msql->query("insert into admin set UserName='" . $UserName
        . "',UserPass='" . md5($UserPass)
        . "',opens='" . $view ."',InpuTime='". date("Y-m-d H:i:s",time()) . "'");
    echo "ok";
    exit;
}


