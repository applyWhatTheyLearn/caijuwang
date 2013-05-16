<?php
include("../include/common.inc.php");
$UserName = trim($_POST["username"]);
$UserPass = trim($_POST["userpass"]);

$Search = "Select * From z_user where UserName='" . $UserName . "' and UserPass='" . md5($UserPass) . "'";
$msql->query($Search);
if ($msql->next_record()) {
    $UserLoginUserID = trim($msql->f("Meid"));
    session_start();
    $_SESSION["UserLoginUserID"] = $UserLoginUserID;
    $_SESSION["UserLoginUserName"] = $UserName;
    $_SESSION["UserLoginUserNamePass"] = md5($UserPass);
    $_SESSION["UserLoginStatu"] = "login";
    $msql->query("update z_user set LoginNum=LoginNum+1,LastLoginTime='" . date("Y-m-d H:i:s",time()) . "' where Meid=" . $UserLoginUserID . "");
} else {
    header("Location:user_login.php?st=2");
}
?>

<html>
<head>
<meta http-equiv=refresh content="0; url=../index.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录提交</title>
</head>

<body>

</body>
</html>
