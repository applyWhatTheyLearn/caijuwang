<?php
include("../include/common.inc.php");
include("../_inc/checkoutTime2.php");
include("../_inc/func.php");
$UserID = trim($_POST["UserID"]);
$UserName = trim($_POST["MemaberName"]);
$UserPass = trim($_POST["MemberPass"]);
$ReUserPass = trim($_POST["ReMemberPass"]);
ChackError($UserName, "用户名称");
ChackError($UserPass, "输入密码");
ChackError($ReUserPass, "重复密码");
if ($UserPass <> $ReUserPass) {
    ?>

    <script language=vbscript>
        history.back()
        alert("密码输入错误请检查密码!")
    </script>
    <?php
    exit;
}


ChackError($UserName, "用户姓名");

$msql->query("update admin set UserName='" . $UserName . "',UserPass='" . md5($UserPass) . "' where UserID=" . $UserID);
?>
<html>
<head>
    <title>Untitled Document</title>
    <meta http-equiv="refresh" content="0;url=Login_User.php">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
    <p>&nbsp;</p>

    <p><strong><font color="#993300">用户信息更新成功</font></strong></p>
</div>
</body>
</html>

